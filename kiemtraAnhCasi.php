<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "musicdemo"; // Đổi tên DB nếu cần

// Kết nối
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý lọc theo id_casi (nếu có)
$id_casi_filter = "";
if (isset($_GET['id_casi']) && is_numeric($_GET['id_casi'])) {
    $id_casi_filter = intval($_GET['id_casi']);
    $sql = "SELECT id_album, id_casi, linkAnh FROM albumcasi WHERE id_casi = $id_casi_filter";
} else {
    $sql = "SELECT id_album, id_casi, linkAnh FROM albumcasi";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kiểm Tra Ảnh</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .ok { color: green; }
        .fail { color: red; }
        .form-box { margin-bottom: 20px; }
    </style>
</head>
<body>

    <h2>🔍 Kiểm Tra Ảnh Trong CSDL</h2>

    <div class="form-box">
        <form method="get" action="">
            <label for="id_casi">Lọc theo ID Ca sĩ:</label>
            <input type="number" name="id_casi" id="id_casi" value="<?= htmlspecialchars($id_casi_filter) ?>">
            <button type="submit">Lọc</button>
            <a href="kiemtra.php"><button type="button">Kiểm tra lại tất cả</button></a>
        </form>
    </div>

    <?php
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            $path = $row['linkAnh'];
            $fileExists = file_exists($path);
            $statusClass = $fileExists ? "ok" : "fail";
            $statusText = $fileExists ? "✅ Tồn tại" : "❌ Không tìm thấy";
            echo "<li class='$statusClass'>[ID Album: {$row['id_album']}] [ID Ca sĩ: {$row['id_casi']}] - $statusText: <code>{$path}</code></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Không tìm thấy dữ liệu phù hợp.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
