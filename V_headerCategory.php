
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thư Viện Nhạc</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="CSS/Category.css">
  <link rel="stylesheet" href="CSS/playMusic.css">
</head>

<body>

  <header>
    <h1>🎵 Thư Viện Nhạc</h1>
    <p>Tìm kiếm và khám phá các thể loại nhạc yêu thích</p>
  </header>

  <div class="search-box">
    <form action="search.php" method="GET">
    <input type="text" name="query" placeholder="Tìm bài hát, nghệ sĩ hoặc thể loại...">
    <button type="submit">Tìm kiếm</button>
    </form>
  </div>

  <section class="banner">
    <h2>Khám Phá Âm Nhạc Theo Phong Cách Của Bạn</h2>
  </section>

  <!-- Các thể loại nhạc -->
  <section class="genres">
    <div class="genre-card" data-theloai ="Nhạc Trẻ" >
        <h3>NHẠC TRẺ</h3>
        <p>Nhạc hiện đại, dễ nghe, phổ biến rộng rãi.</p>
    </div>
    <div class="genre-card" data-theloai ="Nhạc Đỏ" >
      <h3>NHẠC ĐỎ</h3>
      <p>Âm thanh mạnh mẽ, guitar điện đặc trưng.</p>
    </div>
    <div class="genre-card" data-theloai ="Nhạc Rap" >
      <h3>NHẠC RAP</h3>
      <p>Nhạc điện tử sôi động, thích hợp cho tiệc tùng.</p>
    </div>
    <div class="genre-card" data-theloai ="Nhạc Âu" >
      <h3>NHẠC ÂU</h3>
      <p>Nhạc trữ tình, sâu lắng và nhẹ nhàng.</p>
    </div>
    <div class="genre-card" data-theloai ="Nhạc Trung">
      <h3>NHẠC TRUNG</h3>
      <p>Phát âm nhanh, lời ca mạnh mẽ và cá tính.</p>
    </div>
    <div class="genre-card" data-theloai ="ALL" >
      <h3>TẤT CẢ NHẠC</h3>
      <p>Âm thanh nhẹ nhàn thư giản</p>
    </div>
  </section>


  <script>
    const genre =  document.querySelectorAll('.genre-card');

    genre.forEach((card) => {
      card.addEventListener('click', () => {
        const theloai = card.getAttribute('data-theloai');
        window.location.href = `ShowCategory.php?theloai=${theloai}`;
      });
    });
  </script>