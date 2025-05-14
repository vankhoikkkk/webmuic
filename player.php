
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