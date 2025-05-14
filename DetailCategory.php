<?php
include 'DAO/DetailCategoryDAO.php';
?>


<?php

$detaiCategory = new DetailCategoryDAO();

$result_idbaihat = null;

if (isset($_GET['id_baihat'])) {
    $id_baihat = $_GET['id_baihat'];
    $result_idbaihat = $detaiCategory->getMusicOfId($id_baihat);
} else {
    echo "ID bài hát không được cung cấp.";
}

$row_idbaihat = $result_idbaihat->fetch_assoc();

$result = $detaiCategory->getAllMusicOfGenger($row_idbaihat['theloai'], $row_idbaihat['id_baihat']);

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolero Hay Nhất</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/playMusic.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1e1e2f;
            color: #fff;
        }

        .container {
            display: flex;
            flex-direction: row;
            padding: 20px;
        }

        .main-song {
            width: 60%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .main-song > .song-card {
            width: 100%;
            height: 50%;
            position: relative;
            background-color: #2a2a3d;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
        }

        .main-song .song-card > img {
            width: 70%;
            border-radius: 8px;
            transition: opacity 0.3s ease;
        }


        /* -------------------------------------------------- */

        .song-card img {
            width: 100%;
            /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của thẻ cha */
            height: 100%;
            /* Đặt chiều cao cố định cho ảnh */
            border-radius: 8px;
            /* Bo góc ảnh */
            object-fit: cover;
            /* Cắt ảnh để vừa với khung mà không bị méo */
            padding: 5px;
            /* Đặt độ rỗng đồng đều cho ảnh */
            background-color: #f0f0f0;
            /* Màu nền để lấp đầy khoảng trống nếu ảnh không đủ lớn */
            box-sizing: border-box;
            /* Bao gồm padding trong kích thước ảnh */
        }

        .song-card:hover img {
            opacity: 0.5;
        }

        /* ------------------------------------------nút play music và stop main----------------------------------------------------------------------------------------------------*/
        .play-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            /* Ẩn nút play mặc định */
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        .main-song:hover .play-overlay {
            opacity: 1;
            /* Hiển thị nút play khi hover */
        }

        .play-overlay i {
            color: white;
            font-size: 54px;
            /* Kích thước biểu tượng play */
        }

        /* ------------------------------------------nút play music và stop list nhạc----------------------------------------------------------------------------------------------------*/
        .play-overlay.list-card {
            width: 30px;
            height: 30px;
            left: 11%;
        }

        .play-overlay.list-card i {
            font-size: 20px;
        }

        .song-card:hover .play-overlay {
            opacity: 1;
            /* Hiển thị nút play khi hover */
        }


        /* nút random nhạc */
        .random-button {
            padding: 10px 20px;
            border-radius: 8px;
            background-color: #9147ff;
            border: none;
            color: white;
            margin-top: 10px;
            cursor: pointer;
        }

        .random-button:hover {
            background-color: #3e1487;
            box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.5);
        }


        /* Danh sách */
        .right-panel {
            width: 30%;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        /* Styles cho song list */
        .song-list {
            background-color: #2a2a3d;
            padding: 15px;
            border-radius: 10px;
            height: 450px;
            overflow-y: auto;
        }

        .song-item {
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .song-item:hover {
            background-color: #3e1487;
        }

        .song-item .song-card {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .song-item .song-card img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            margin-right: 15px;
        }

        .song-info {
            display: flex;
            align-items: center;
            flex: 1;
            position: relative;

        }

        .baihat {
            font-weight: bold;
            margin: 5px 0;
            color: black;
        }

        .casi {
            color: #808080;
            font-size: 0.9em;
        }

        .song-info.show-main {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            flex-direction: column;
            flex: 0;
        }
        .show-main-text {
            font-weight: bold;
            margin: 5px 0;
            color: black;
            font-size: 35px;
        }
        .show-main-text.casi {
            color: #808080;
            font-size: 0.9em;
            font-weight: 400;

        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Bên trái: Bài nhạc chính -->
        <div class="main-song">
            <div class="song-card" data-audio="<?php echo $row_idbaihat['linknhac']; ?>">
                <div class="play-overlay">
                    <i class='bx bx-play-circle'></i>
                </div>
                <img src="<?php echo $row_idbaihat['album']; ?>" alt="Song">
                <!-- chỗ này viết để cho thanh nhạc có thể lấy và hiện thông tin -->
                <div class="song-info">
                    <p class="baihat"><?php echo $row_idbaihat['tenbaihat']; ?></p>
                    <p class="casi"> <?php echo $row_idbaihat['tenCaSi']; ?></p>
                </div>     
            </div>
            <!-- chỗ này viết để show ra người dùng thấy -->
            <div class="song-info show-main">
                    <p class="show-main-text "> <?php echo $row_idbaihat['tenbaihat']; ?></p>
                    <p class="show-main-text casi"> (<?php echo $row_idbaihat['tenCaSi']; ?>)</p>
            </div>
            <div class="info-song">
                <p> <strong >Nghệ sĩ : </strong>  <?php echo $row_idbaihat['ngheSi'];?> </p>
                <p> <strong>Mô Tả Bài Hát : </strong>  <?php echo $row_idbaihat['moTa'];?></p> 
            </div>  

        </div>

        <!-- Bên phải: Danh sách nhạc và nghệ sĩ -->
        <div class="right-panel">
            <div class="song-list">
                <h3>Danh sách bài hát</h3>
                <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="song-item">
                            <div class="song-card" data-audio="<?php echo $row['linknhac']; ?>">
                                <div class="play-overlay list-card">
                                    <i class='bx bx-play-circle'></i>
                                </div>
                                <img src="<?php echo $row['album']; ?>" alt="Song">
                                <div class="song-info">
                                    <p class="baihat"><?php echo $row['tenbaihat']; ?></p>
                                    <br>
                                    <p class="casi">(<?php echo $row['tenCaSi']; ?>)</p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <img src="album/baica" alt="">
            </div>
        </div>
    </div>

    <?php include 'player.php'; ?>

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
            card.addEventListener('click', () => {
                const audioSrc = card.getAttribute('data-audio');
                const currentImg = card.querySelector('img');
                const playButtonCard = card.querySelector('.play-overlay i');

                const songTitleBaiHat = card.querySelector('.baihat');
                const songTitleCaSi = card.querySelector('.casi'); // Lấy text từ thẻ p
                if (songTitleBaiHat && songTitleCaSi) {
                    const text = songTitleBaiHat.textContent;
                    const text2 = songTitleCaSi.textContent;
                    console.log(text);
                    console.log(text2);
                } else {
                    console.log('Không tìm thấy thẻ ');
                }


                // // Cập nhật tên bài hát trong thanh nhạc
                document.getElementById('song-name').textContent = songTitleBaiHat.textContent;
                document.getElementById('artist-name').textContent = songTitleCaSi.textContent;

                // Nếu click vào card khác
                if (currentCard && currentCard !== card) {
                    // Reset card cũ
                    const oldPlayButton = currentCard.querySelector('.play-overlay i');
                    oldPlayButton.className = 'bx bx-play-circle';
                    // Reset thời gian của bài cũ
                    currentTime = 0;
                }

                // Cập nhật card hiện tại
                currentCard = card;

                // hiện thanh nhạc
                containerPlay.classList.add('show');

                // hiện ảnh bài hát
                imgScrThanhNhac.src = currentImg.src;

                if (audioPlayer.src.includes(audioSrc)) {
                    if (audioPlayer.paused) {
                        audioPlayer.play();
                        // hiện ảnh bật pause
                        playButtonCard.className = 'bx bx-pause-circle'; // thay đổi toàn bộ class có trong thẻ thanh 1 class này
                        playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
                    } else {
                        audioPlayer.pause();
                        // hiện ảnh bật play
                        playButtonCard.className = 'bx bx-play-circle';
                        playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
                    }
                } else {
                    // Khi chọn bài mới
                    currentAudioSrc = audioSrc;
                    audioPlayer.src = audioSrc;
                    audioPlayer.currentTime = 0; // Reset thời gian về 0
                    audioPlayer.play();

                    // Cập nhật tất cả icon về play
                    document.querySelectorAll('.play-overlay i').forEach(icon => {
                        icon.className = 'bx bx-play-circle';
                    });

                    // Cập nhật icon play/pause cho bài hiện tại
                    playButtonCard.className = 'bx bx-pause-circle';
                    playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
                }
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


</body>

</html>