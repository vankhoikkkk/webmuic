<?php
include 'DAO/ShowCategoryDAO.php';
?>


<?php
$showCategory = new ShowCategoryDAO();
$theloai = "";
if (isset($_GET['theloai'])) {
  $theloai = $_GET['theloai'];
} else {
  echo "Lỗi không tìm được thể loại nhạc";
}

// lấy dữ liệu show
$result = null;
if ($theloai ==   "ALL") {
  $result = $showCategory->getAllMusic();
} else {
  $result = $showCategory->getAllMusicOfGenger($theloai);
}

// phân trang
$rowCount = $result->num_rows;

$trang = $rowCount / 20;

$page = "";
if (!$_GET['page']) {
  $page = 0;
}



if ($theloai == "ALL") {
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;  // ép kiểu an toàn
  $limit = 18;
  $offset = $page * $limit;
  $result_show = $showCategory->getAllMusic18CO($offset);
} else {
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 0;  // ép kiểu an toàn
  $limit = 18;
  $offset = $page * $limit;
  $result_show = $showCategory->getShowMusic18CO($theloai, $offset);
} 


?>
<style>
  .hot-songs.row {
    /* display: flex;
    flex-wrap: wrap;
    justify-content: center; */
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
    gap: 20px;
  }

  li {
    list-style: none;
    padding: 10px;
    margin: 5px;
    background-color: rgba(17, 136, 106, 0.34);
    cursor: pointer;
  }

  li>a {
    display: block;
    width: 100%;
    height: 100%;
  }

  .active {
    background-color: rgba(1, 22, 17, 0.34);
  }

  .list-buttom ul {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
</style>

<?php include 'V_headerCategory.php' ?>

<div class="list-music-top">
  <div class="hot-title">🎧 Top Nhạc <?php echo $theloai ?></div>
  <div class="hot-songs row">
    <?php
    if ($result_show) {
      while ($row = $result_show->fetch_assoc()) {
    ?>
        <div class="song-card" data-audio="<?php echo $row['linknhac']; ?>" data-id="<?php echo $row['id_baihat']; ?>">
          <div class="play-overlay">
            <i class='bx bx-play-circle'></i>
          </div>
          <img src="<?php echo $row['album']; ?>" alt="Song">
          <div class="song-info">
            <p class="baihat"><?php echo $row['tenbaihat']; ?></p>
            <p class="casi">(<?php echo $row['tenCaSi']; ?>)</p>
          </div>
        </div>
    <?php
      }
    } else {
      echo "<p>Không có bài hát nào.</p>";
    }
    ?>
  </div>
</div>



<div class="list-buttom">
  <ul>
    <?php
    for ($page = 0; $page <= $trang; $page++) {
      echo "<a href='ShowCategory.php?page={$page}&theloai={$theloai}'><li> {$page} </li></a>";
    ?>
    <?php
    }
    ?>
  </ul>
</div>

<?php include 'player.php' ?>
</body>


<script>
  // sử lý cho phần hiện thanh nhạc khi bấm vào
  const audioPlayer = document.getElementById('audio');
  const songCards = document.querySelectorAll('.song-card');
  const imgScrThanhNhac = document.querySelector('.cover > img');
  const containerPlay = document.querySelector('.container-play');

  const playButtonCard = document.querySelector('.play-overlay');

  // sử lý riêng cho thanh nhạc
  const audio = document.getElementById("audio");
  const playButton = document.getElementById("play");
  const duration = document.getElementById("duration");
  const current = document.getElementById("current");
  const progress = document.getElementById("progress");
  const volume = document.getElementById("volume");
  const volumeIcon = document.getElementById("volume-icon");


  let currentAudioSrc = '';
  let currentTime = 0;
  let currentCard = null; // Thêm biến để theo dõi card hiện tại

  songCards.forEach(card => {
    // Xử lý click vào nút play-overlay
    const playOverlay = card.querySelector('.play-overlay');
    playOverlay.addEventListener('click', (e) => {
      e.preventDefault(); // Ngăn chặn sự kiện click lan ra card
      e.stopPropagation(); // Ngăn chặn sự kiện click lan ra card

      const audioSrc = card.getAttribute('data-audio');
      const currentImg = card.querySelector('img');
      const playButtonCard = card.querySelector('.play-overlay i');
      // lấy tên bài hát và tên ca sĩ
      const songTitle = card.querySelector(".baihat").textContent;
      const artistName = card.querySelector(".casi").textContent;

      // Cập nhật tên bài hát trong thanh nhạc
      document.getElementById('song-name').textContent = songTitle;
      document.getElementById('artist-name').textContent = artistName;

      // Nếu click vào card khác
      if (currentCard && currentCard !== card) {
        const oldPlayButton = currentCard.querySelector('.play-overlay i');
        oldPlayButton.className = 'bx bx-play-circle';
        currentTime = 0;
      }

      currentCard = card;
      containerPlay.classList.add('show');
      imgScrThanhNhac.src = currentImg.src;

      // Xử lý phát nhạc
      if (audioPlayer.src.includes(audioSrc)) {
        if (audioPlayer.paused) {
          audioPlayer.play();
          playButtonCard.className = 'bx bx-pause-circle';
          playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
        } else {
          audioPlayer.pause();
          playButtonCard.className = 'bx bx-play-circle';
          playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
        }
      } else {
        currentAudioSrc = audioSrc;
        audioPlayer.src = audioSrc;
        audioPlayer.currentTime = 0;
        audioPlayer.play();

        document.querySelectorAll('.play-overlay i').forEach(icon => {
          icon.className = 'bx bx-play-circle';
        });

        playButtonCard.className = 'bx bx-pause-circle';
        playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
      }
    });

    // Xử lý click vào card để chuyển trang
    card.addEventListener('click', () => {
      const songId = card.getAttribute('data-id'); // Thêm data-id vào card
      window.location.href = `DetailCategory.php?id_baihat=${songId}`; // Chuyển đến trang chi tiết
    });
  });


  // Cập nhật event listener của playButton
  playButton.addEventListener('click', function() {
    if (!currentCard) return; // Nếu chưa có card nào được chọn

    const playButtonCard = currentCard.querySelector('.play-overlay i');

    if (audio.paused) {
      audio.play();
      playButtonCard.className = 'bx bx-pause-circle';
      playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
    } else {
      audio.pause();
      playButtonCard.className = 'bx bx-play-circle';
      playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
    }
  });

  // Cập nhật event listener của audio
  audioPlayer.addEventListener('ended', () => {
    // Khi bài hát kết thúc
    if (currentCard) {
      const playButtonCard = currentCard.querySelector('.play-overlay i');
      playButtonCard.className = 'bx bx-play-circle';
      playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
      currentTime = 0;
    }
  });

  // Lưu thời gian hiện tại khi tạm dừng
  audioPlayer.addEventListener('pause', () => {
    currentTime = audioPlayer.currentTime;
  });

  // Khôi phục thời gian khi play lại
  audioPlayer.addEventListener('play', () => {
    if (currentTime > 0) {
      audioPlayer.currentTime = currentTime;
    }
  });


  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secon = Math.floor(seconds % 60);
    return `${minutes < 10 ? '0' + minutes : minutes}:${secon < 10 ? '0' + secon : secon}`;
  };


  audio.addEventListener('loadedmetadata', function() {
    duration.textContent = formatTime(audio.duration);
    // console.log(formatTime(audio.duration));
  });

  audio.addEventListener('timeupdate', function() {
    current.textContent = formatTime(audio.currentTime);
    progress.value = (audio.currentTime / audio.duration) * 100;
  });

  progress.addEventListener("input", () => {
    audio.currentTime = (progress.value / 100) * audio.duration;
  })
  // giá trị của thanh âm lượng 0.0 - 1.0
  volume.addEventListener("input", function() {
    audio.volume = volume.value;
  });

  // kích hoạt nút phân trang
  const listButton = document.querySelectorAll('.list-buttom > ul > li');
  listButton.forEach(function(button) {
    button.addEventListener('click', function() {
      listButton.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>

</html>