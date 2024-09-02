<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyWave</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <span class="link-text">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="lagu" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7l0 72 0 264c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6L448 147 192 223.8 192 432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6L128 200l0-72c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z" />
                    </svg>
                    <span class="link-text">Lagu</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="artis" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M96 96l0 160c0 53 43 96 96 96s96-43 96-96l-80 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l80 0 0-32-80 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l80 0 0-32-80 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l80 0c0-53-43-96-96-96S96 43 96 96zM320 240l0 16c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 89.1 66.2 162.7 152 174.4l0 33.6-48 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l72 0 72 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0 0-33.6c85.8-11.7 152-85.3 152-174.4l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 24z" />
                    </svg>
                    <span class="link-text">Artis</span>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="header">
            <h3>Melody<span style="color: rgb(45, 129, 255)">Wave</span></h3>
            <form action="">
                <div class="search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" name="" id="" class="search-input" placeholder="search">
                </div>
            </form>

            <div class="right-side">
                <a href="settings.html">
                    <i class="fa-solid fa-gear"></i>
                </a>
                <a href="profile.html">
                    <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                </a>
            </div>
        </div>

        <div class="content">
            <div class="left-half">
                <div class="thumbnail">
                    <img src="images/better-musician.png" alt="" class="thumbnail-img" id="thumbnail">
                    <h2 class="thumbnail-text">Nikmati hidup dengan sedikit musik</h2>
                </div>

                <div class="card-section">
                    <h3><b>lagu yang bagus untukmu</b></h3>
                    <div class="card-container">
                        <div class="card">
                            <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                            <div class="card-content">
                                <div class="card-info">
                                    <h3>Say it aint so </h3>
                                    <p>Weezer</p>
                                </div>
                                <div class="card-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                            <div class="card-content">
                                <div class="card-info">
                                    <h3>Say it aint so</h3>
                                    <p>Weezer</p>
                                </div>
                                <div class="card-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                            <div class="card-content">
                                <div class="card-info">
                                    <h3>Say it aint so </h3>
                                    <p>Weezer</p>
                                </div>
                                <div class="card-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                            <div class="card-content">
                                <div class="card-info">
                                    <h3>Say it aint so </h3>
                                    <p>Weezer</p>
                                </div>
                                <div class="card-btn">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-half">

                <div class="playing-container">
                    <div class="playing-card">
                        <div class="playing-content">
                            <h5 class="song-header"><span><i class="fa-brands fa-soundcloud"></i></span> Sedang
                                dimainkan
                            </h5>
                            <div class="playing-img">
                                <img src="images/Tyler the Creator- Flower boy.webp" alt="">
                            </div>
                            <div class="album-info">
                                <h3 class="album-title">say it aint so</h3>
                                <p class="album-creator">tyler, the creator</p>
                            </div>

                            <ul class="song-list">
                                <hr>
                                <li>
                                    <img src="images/Tyler the Creator- Flower boy.webp"
                                        alt="Alone Album Art">
                                    <span class="song-title">Alone</span>
                                    <span class="artist">Alan Walker</span>
                                    <span class="duration">2.02</span>
                                </li>
                                <li>
                                    <img src="images/Tyler the Creator- Flower boy.webp"
                                        alt="Alone Album Art">
                                    <span class="song-title">Alone</span>
                                    <span class="artist">Alan Walker</span>
                                    <span class="duration">2.02</span>
                                </li>
                                <li>
                                    <img src="images/Tyler the Creator- Flower boy.webp"
                                        alt="Alone Album Art">
                                    <span class="song-title">Alone</span>
                                    <span class="artist">Alan Walker</span>
                                    <span class="duration">2.02</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>
</body>

</html>