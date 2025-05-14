<?php
include_once 'Uitl/database.php';
?>

<?php
    class DetailCategoryDAO {
        private $db;

        public function __construct() {
            $this -> db = new Database();
        }

        function getAllMusicOfGenger($Category, $id_baihat) {
            $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi 
            WHERE theloai = '$Category' AND id_baihat != '$id_baihat' ORDER BY RAND();";
            $resutl = $this -> db -> select($query);
            return $resutl;
        }

        function getMusicOfId($id_baihat) {
            $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi 
            WHERE id_baihat = '$id_baihat' ";
            $resutl = $this -> db -> select($query);
            return $resutl;
        }

        public function searchMusic($search) {
            $query = "SELECT * FROM baihat
            JOIN casi ON baihat.id_casi = casi.id_casi
            WHERE casi.tenCaSi LIKE '%$search%' OR baihat.tenBaiHat LIKE '%$search%';";
            $result = $this -> db -> select($query);
            return $result;
        }
    }

?>

