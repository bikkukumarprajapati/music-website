<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="arjit.js" defer></script>
    <title>music website</title>
    <style>
        header .song_side::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 60%;
            background: url(img/arjit_bg.png);
            /* mix-blend-mode: multiply; */
            background-repeat: no-repeat;
            /* background-size: cover; */
            /* margin-top: 0px; */
            margin-left: 400px;
            z-index: -1;
        }
    </style>
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class=" bi bi-music-note-beamed"> Playlist</i></h4>
                <h4 class="active"><span></span><i class=" bi bi-music-note-beamed"> Last listening</i></h4>
                <h4 class="active"><span></span><i class=" bi bi-music-note-beamed">Recommended</i></h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="">
                    <h5>Khairiyat Pucho<br>
                        <div class="subtitle">Arijit Singh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="">
                    <h5>Phir Kabhi<br>
                        <div class="subtitle">Arijit Singh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/3.jpg" alt="">
                    <h5>Akhiyaan Gulaab<br>
                        <div class="subtitle">Shahid Kapur</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/4.jpg" alt="">
                    <h5>Kareja Ho<br>
                        <div class="subtitle">ZB Rai</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/5.jpg" alt="">
                    <h5>Kareja Ho 2<br>
                        <div class="subtitle">ZB Rai</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/6.jpg" alt="">
                    <h5>Sajni<br>
                        <div class="subtitle">Arjit Singh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/7.jpg" alt="">
                    <h5>Apna Bana Le<br>
                        <div class="subtitle">Arjit Singh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/8.jpg" alt="">
                    <h5>O Mahi-Dunki<br>
                        <div class="subtitle">Arjit Singh</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>

        <div class="song_side">
            <nav>
                <ul>
                    <li>DISCOVER <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="search music...">
                </div>
                <div class="user">
                    <img src="img/1.jpg" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Arjit Singh</h1>
                <p>You were the shadow to my light did you feel us Another start you fade <br> Away afriad our aim is
                    out of sigh Wanna se us Alive</p>
                <div class="buttons">
                    <button>play</button>
                    <button>Follow</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/9.jpg" alt="img">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>TUM HI AANA<br>
                            <div class="subtitle">Arijit Singh</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/10.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>DILBAR<br>
                            <div class="subtitle">Neha Kakkar, Dhvani Bhanushali, Ikka</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item artists_bx">
                    <li><img src="img/1.jpg" alt=""></li>
                    <li><img src="img/2.jpg" alt=""></li>
                    <li><img src="img/3.jpg" alt=""></li>
                    <li><img src="img/4.jpg" alt=""></li>
                    <li><img src="img/5.jpg" alt=""></li>
                    <li><img src="img/6.jpg" alt=""></li>
                    <li><img src="img/7.jpg" alt=""></li>
                    <li><img src="img/8.jpg" alt=""></li>
                    <li><img src="img/9.jpg" alt=""></li>
                    <li><img src="img/10.jpg" alt=""></li>
                    <li><img src="img/1.jpg" alt=""></li>
                    <li><img src="img/2.jpg" alt=""></li>
                    <li><img src="img/3.jpg" alt=""></li>
                    <li><img src="img/4.jpg" alt=""></li>
                    <li><img src="img/5.jpg" alt=""></li>
                    <li><img src="img/6.jpg" alt=""></li>
                    <li><img src="img/7.jpg" alt=""></li>
                </div>
            </div>
        </div>

        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/1.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                vande matarm
                <div class="subtitle">Bankim Charam</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i> </a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>

</body>

</html>