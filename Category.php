<?php
include 'DAO/CategoryDAO.php';
?>


<?php

$listMusic = new CategoryDAO();
$result_tre = $listMusic->getAllMusicOfGengerTOP('Nhạc Trẻ');
$result_Rap = $listMusic->getAllMusicOfGengerTOP('Nhạc Rap');
$result_Au = $listMusic->getAllMusicOfGengerTOP('Nhạc Âu');
$result_Trung = $listMusic->getAllMusicOfGengerTOP('Nhạc Trung');
$result_Do = $listMusic->getAllMusicOfGengerTOP('Nhạc Đỏ');

?>
<style>
  /* Thêm class cho bài hát đang phát */
  .song-card.playing {
    background: rgba(65, 65, 65, 0.3);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    transform: scale(1.02);
    transition: all 0.3s ease;
  }

  .song-card.playing .song-info .baihat {
    color: #1ed760;
  }

  /* Hiệu ứng nhấp nháy cho icon play khi đang phát */
  @keyframes playing {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.6;
    }

    100% {
      opacity: 1;
    }
  }

  .song-card.playing .play-overlay i.bx-pause-circle {
    animation: playing 2s infinite;
    color: #1ed760;
  }
</style>




<?php include 'V_headerCategory.php' ?>

<!----------------------------------- danh sách nhạc --------------------------------------------->
<div class="container-list-hot">

  <!-- NHẠC TRẺ VIỆT NAM -->
  <div class="list-music-top">
    <div class="hot-title">🎧 Top Nhạc Trẻ</div>
    <div class="hot-songs">
      <?php
      if ($result_tre) {
        while ($row = $result_tre->fetch_assoc()) {
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

  <!-- NHẠC RAP VIỆT -->
  <div class="list-music-top">
    <div class="hot-title"><i class='bx bxl-unity'></i> Top Nhạc Rap</div>
    <div class="hot-songs">
      <?php
      if ($result_Rap) {
        while ($row = $result_Rap->fetch_assoc()) {
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

  <!-- NHẠC ÂU -->
  <div class="list-music-top">
    <div class="hot-title">🎧 Top Nhạc Âu</div>
    <div class="hot-songs">
      <?php
      if ($result_Au) {
        while ($row = $result_Au->fetch_assoc()) {
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

  <!-- NHẠC TRUNG QUỐC -->
  <div class="list-music-top">
    <div class="hot-title">🎧 Top Nhạc Trung</div>
    <div class="hot-songs">
      <?php
      if ($result_Trung) {
        while ($row = $result_Trung->fetch_assoc()) {
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
  <!-- NHẠC ĐỎ VIỆT NAM -->
  <div class="list-music-top">
    <div class="hot-title">🎧 Top Nhạc Đỏ</div>
    <div class="hot-songs">
      <?php
      if ($result_Do) {
        while ($row = $result_Do->fetch_assoc()) {
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

</div>

<div class="container-play">
  <div class="player">
    <div class="info">
      <div class="cover">
        <img src="" class="cover" alt="Album">
      </div>
      <div>
        <span id="song-name">Chạy Ngay Đi</span> <!-- Thêm id cho span tên bài hát -->
        <span id="artist-name">Sơn Tung M-TP</span> <!-- Thêm id cho span tên nghệ sĩ -->
      </div>
    </div>
    <div class="controls">
      <div class="controls-button">
        <button class="btn" id="prev"><i class='bx bx-chevrons-left'></i></button>
        <button class="btn" id="play"><i class='bx bx-pause-circle'></i></button>
        <button class="btn" id="next"><i class='bx bx-chevrons-right'></i></button>
      </div>
      <div class="controls-slider">
        <span id="current">00:00</span>
        <input type="range" id="progress" value="0" min="0" max="100">
        <span id="duration">00:00</span>
      </div>
    </div>
    <div class="controls-volume">
      <i class='bx bx-volume-full' id="volume-icon"></i>
      <!-- <input type="range" id="volume" value="100" min="0" max="100"> -->
      <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
    </div>
  </div>
</div>
<audio id="audio" src=""></audio>




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


<script>
  // Thêm vào sau phần khai báo biến
  let currentIndex = 0; // Lưu vị trí bài hát hiện tại

  // Hàm phát nhạc
  function playMusic(card) {
    const audioSrc = card.getAttribute('data-audio');
    const currentImg = card.querySelector('img');
    const playButtonCard = card.querySelector('.play-overlay i');
    const songTitle = card.querySelector(".baihat").textContent;
    const artistName = card.querySelector(".casi").textContent;

    // Cập nhật UI
    document.getElementById('song-name').textContent = songTitle;
    document.getElementById('artist-name').textContent = artistName;
    containerPlay.classList.add('show');
    imgScrThanhNhac.src = currentImg.src;

    // Reset card cũ
    if (currentCard && currentCard !== card) {
      const oldPlayButton = currentCard.querySelector('.play-overlay i');
      oldPlayButton.className = 'bx bx-play-circle';
    }

    // Phát nhạc
    currentCard = card;
    audioPlayer.src = audioSrc;
    audioPlayer.currentTime = 0;
    audioPlayer.play();

    // Cập nhật icon
    document.querySelectorAll('.play-overlay i').forEach(icon => {
      icon.className = 'bx bx-play-circle';
    });
    playButtonCard.className = 'bx bx-pause-circle';
    playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
  }

  // Xử lý nút Previous
  document.getElementById('prev').addEventListener('click', () => {
    const cards = Array.from(songCards);
    if (!currentCard) return;

    currentIndex = cards.indexOf(currentCard);
    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    playMusic(cards[currentIndex]);
  });

  // Xử lý nút Next
  document.getElementById('next').addEventListener('click', () => {
    const cards = Array.from(songCards);
    if (!currentCard) return;

    currentIndex = cards.indexOf(currentCard);
    currentIndex = (currentIndex + 1) % cards.length;
    playMusic(cards[currentIndex]);
  });

  // Tự động chuyển bài khi hết nhạc
  audioPlayer.addEventListener('ended', () => {
    const cards = Array.from(songCards);
    if (!currentCard) return;

    currentIndex = cards.indexOf(currentCard);
    currentIndex = (currentIndex + 1) % cards.length;
    playMusic(cards[currentIndex]);
  });

  // Sửa lại phần xử lý click vào play-overlay
  songCards.forEach((card, index) => {
    const playOverlay = card.querySelector('.play-overlay');
    playOverlay.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      currentIndex = index;
      playMusic(card);
    });
  });
</script>



</html>