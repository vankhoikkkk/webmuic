<?php
include 'DAO/ShowCategoryDAO.php';

$showCategory = new ShowCategoryDAO();
$query = "";
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
} else {
    echo "Vui lòng nhập từ khóa tìm kiếm.";
    exit;
}

// Tìm kiếm bài hát và ca sĩ
$result_baihat = $showCategory->searchMusic($query);
?>

<?php include 'V_headerCategory.php'  ?>

<style>
    .hot-songs.search {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 20px;
        gap: 20px;
    }

  
</style>
<div class="results">
    <h2 style="color: red;">Kết quả tìm kiếm cho: "<?php echo $query; ?>"</h2>

    <?php if ($result_baihat && $result_baihat->num_rows > 0): ?>
        <div class="hot-songs search">
            <?php while ($row = $result_baihat->fetch_assoc()): ?>
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
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>Không tìm thấy bài hát nào.</p>
    <?php endif; ?>
</div>

<div class="list-buttom">
    <ul>
        <!-- Thêm các trang nếu cần -->
    </ul>
</div>

<?php include 'player.php'?>



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
</script>


<!-- <script src="music-player.js"></script> -->
</html>