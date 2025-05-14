<?php
include_once 'Uitl/database.php';
?>



<?php 

class CategoryDAO {
    private $db;

    public function __construct() {
        $this -> db = new Database();
    }

    function getAllMusicOfGengerTOP($Category) {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi 
        WHERE theloai = '$Category' ORDER BY luotnghe DESC LIMIT 6";
        $resutl = $this -> db -> select($query);
        return $resutl;
    }

    function getAllMusicOfGenger($Category) {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi 
        WHERE theloai = '$Category' ORDER BY RAND();";
        $resutl = $this -> db -> select($query);
        return $resutl;
    }

    function getAllMusic() {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi ORDER BY RAND();";
        $resutl = $this -> db -> select($query);
        return $resutl;
    }
}


?>


