<?php 
include_once 'Uitl/database.php';
?>


<?php 
class ShowCategoryDAO {
   private $db;

   public function __construct()
   {
        $this -> db = new Database();
   }

   // để đếm loại sản phẩm có bao nhiêu sản phẩm phân trang
   function getAllMusicOfGenger($Category) 
   {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi 
        WHERE theloai = '$Category'";
        $result = $this -> db -> select($query);
        return $result;
   }

   function getAllMusic () 
   {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi";
        $result = $this -> db -> select($query);
        return $result;
   }

   function getAllMusic18 ($Begin_row) 
   {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi LIMIT $Begin_row, 20";
        $result = $this -> db -> select($query);
        return $result;
   }

   function getShowMusic18($Category, $Begin_row) 
   {
        $query = "SELECT * FROM  `baihat` JOIN casi ON casi.id_casi = baihat.id_casi WHERE theloai = '$Category' LIMIT $Begin_row, 20";
        $result = $this -> db -> select($query);
        return $result;
   }

   public function searchMusic($search) {
     $query = "SELECT * FROM baihat
     JOIN casi ON baihat.id_casi = casi.id_casi
     WHERE casi.tenCaSi LIKE '%$search%' OR baihat.tenBaiHat LIKE '%$search%';";
     $result = $this -> db -> select($query);
     return $result;
 }
    



   function getAllMusic18CO ($page) 
   {
        $query = "SELECT * FROM `baihat` JOIN casi ON casi.id_casi = baihat.id_casi LIMIT $page, 18";
        $result = $this -> db -> select($query);
        return $result;
   }

      function getShowMusic18CO($Category, $page) 
   {
        $query = "SELECT * FROM  `baihat` JOIN casi ON casi.id_casi = baihat.id_casi WHERE theloai = '$Category' LIMIT $page, 18";
        $result = $this -> db -> select($query);
        return $result;
   }





}

?>

