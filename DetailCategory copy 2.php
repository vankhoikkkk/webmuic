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
            padding-bottom: 80px;
        }

        .main-song {
            width: 60%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .main-song>.song-card {
            width: 100%;
            height: 360px;
            position: relative;
            background-color: #2a2a3d;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
        }

        .main-song .song-card > img {
            width: 350px;
            height: 350px;
            border-radius: 8px;
            object-fit: cover;
            padding: 30px;
            transition: opacity 0.3s ease;
        }


        /* -------------------------------------------------- */

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
            background: rgba(36, 179, 214, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transform: scale(1.02);
            transition: all 0.3s ease;
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


        .song-card.playing {
            background: rgba(65, 65, 65, 0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transform: scale(1.02);
            transition: all 0.3s ease;
        }



        .song-card.playing .play-overlay {
            opacity: 1;
        }

        .info-song {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            padding: 10px;
            background-color: #2a2a3d;
            border-radius: 10px;
            width: 100%;
        }
        .info-song-hidden-list {
            display: none;
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
                <div style="display:  none;" class="song-info">
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
                <strong>Nghệ sĩ : </strong>
                <p class="nghesi"> <?php echo $row_idbaihat['ngheSi']; ?> </p>
                <strong>Mô Tả Bài Hát : </strong>
                <p class="mota"> <?php echo $row_idbaihat['moTa']; ?></p>
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
                                <!-- Ẩn để tiện cho việt lấy nội sung thay cho main song -->
                                <div class="info-song-hidden-list ">
                                    <p class="nghesi-list"> <?php echo $row['ngheSi']; ?> </p>
                                    <p class="mota-list"> <?php echo $row['moTa']; ?></p>
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
        // Khai báo biến
        const audioPlayer = document.getElementById('audio');
        const songCards = document.querySelectorAll('.song-card');
        const imgScrThanhNhac = document.querySelector('.cover > img');
        const containerPlay = document.querySelector('.container-play');
        const playButton = document.getElementById("play");
        const duration = document.getElementById("duration");
        const current = document.getElementById("current");
        const progress = document.getElementById("progress");
        const volume = document.getElementById("volume");
        const volumeIcon = document.getElementById("volume-icon");

        let currentAudioSrc = '';
        let currentTime = 0;
        let currentCard = null;
        let currentIndex = 0;

        // Hàm phát nhạc chính
        function playMusic(card) {
            console.log(card);
            // Xóa class playing từ tất cả card 
            document.querySelectorAll('.song-card').forEach(c => {
                c.classList.remove('playing');
            });

            const audioSrc = card.getAttribute('data-audio');
            const currentImg = card.querySelector('img');
            const playButtonCard = card.querySelector('.play-overlay i');
            const songTitle = card.querySelector(".baihat").textContent;
            const artistName = card.querySelector(".casi").textContent;

            // Thêm class playing vào card được chọn
            card.classList.add('playing');

            // Cập nhật UI
            document.getElementById('song-name').textContent = songTitle;
            document.getElementById('artist-name').textContent = artistName;
            containerPlay.classList.add('show');
            imgScrThanhNhac.src = currentImg.src;

            // Reset card cũ
            // if (currentCard && currentCard !== card) {
            //     const oldPlayButton = currentCard.querySelector('.play-overlay i');
            //     oldPlayButton.className = 'bx bx-play-circle';
            //     currentCard.classList.remove('playing');
            // }

            if (card.closest('.song-list')) {
                updateMainSong(card);
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

        // Event listeners cho card
        songCards.forEach((card, index) => {
            const playOverlay = card.querySelector('.play-overlay');

            // Click vào nút play trên card
            playOverlay.addEventListener('click', (e) => {
              
                // Kiểm tra nếu card này đang phát nhạc
                if (currentCard === card) {
                    // Toggle play/pause mà không xóa class playing 
                    if (!audioPlayer.paused) {
                        audioPlayer.pause();
                        playOverlay.querySelector('i').className = 'bx bx-play-circle';
                        playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
                        card.classList.add('playing');
                    } else {
                        audioPlayer.play();
                        playOverlay.querySelector('i').className = 'bx bx-pause-circle';
                        playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
                        card.classList.add('playing');
                    }
                    return;
                }

                // Nếu là card khác
                currentIndex = index;
                playMusic(card);
            });
        });


        

        // Xử lý điều khiển phát nhạc
        playButton.addEventListener('click', () => {
            if (!currentCard) return;
            const playButtonCard = currentCard.querySelector('.play-overlay i');

            if (audioPlayer.paused) {
                audioPlayer.play();
                playButtonCard.className = 'bx bx-pause-circle';
                playButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
            } else {
                audioPlayer.pause();
                playButtonCard.className = 'bx bx-play-circle';
                playButton.innerHTML = "<i class='bx bx-play-circle'></i>";
            }
        });

        // Xử lý next/prev
        document.getElementById('prev').addEventListener('click', () => {
            const cards = Array.from(songCards);
            if (!currentCard) return;
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            playMusic(cards[currentIndex]);
        });

        document.getElementById('next').addEventListener('click', () => {
            const cards = Array.from(songCards);
            if (!currentCard) return;
            currentIndex = (currentIndex + 1) % cards.length;
            playMusic(cards[currentIndex]);
        });

        // Xử lý audio events
        audioPlayer.addEventListener('ended', () => {
            const cards = Array.from(songCards);
            if (!currentCard) return;
            currentIndex = (currentIndex + 1) % cards.length;
            playMusic(cards[currentIndex]);
        });

        audioPlayer.addEventListener('loadedmetadata', () => {
            duration.textContent = formatTime(audioPlayer.duration);
        });

        audioPlayer.addEventListener('timeupdate', () => {
            current.textContent = formatTime(audioPlayer.currentTime);
            progress.value = (audioPlayer.currentTime / audioPlayer.duration) * 100;
        });



        // Xử lý thanh progress và volume
        progress.addEventListener("input", () => {
            audioPlayer.currentTime = (progress.value / 100) * audioPlayer.duration;
        });

        volume.addEventListener("input", () => {
            audioPlayer.volume = volume.value;
        });

        // Helper functions
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${minutes < 10 ? '0' + minutes : minutes}:${secs < 10 ? '0' + secs : secs}`;
        }

        function updateMainSong(card) {
            const mainSong = document.querySelector('.main-song .song-card');
            const mainSongInfo = document.querySelector('.song-info.show-main');
            const mainSongInfoMota = document.querySelector('.info-song');

            // Cập nhật thông tin cho main-song card
            mainSong.setAttribute('data-audio', card.getAttribute('data-audio'));
            mainSong.querySelector('img').src = card.querySelector('img').src;
            mainSong.querySelector('.baihat').textContent = card.querySelector('.baihat').textContent;
            mainSong.querySelector('.casi').textContent = card.querySelector('.casi').textContent;
            
           

            // Cập nhật thông tin hiển thị bên dưới
            mainSongInfo.querySelector('.show-main-text').textContent = card.querySelector('.baihat').textContent;
            mainSongInfo.querySelector('.show-main-text.casi').textContent = card.querySelector('.casi').textContent;

            // thông tin mô tả
            mainSongInfoMota.querySelector('.nghesi').textContent = card.querySelector('.nghesi-list').textContent;
            mainSongInfoMota.querySelector('.mota').textContent = card.querySelector('.mota-list').textContent;


        }
    </script>


</body>

</html>