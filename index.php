<?php
/**********************
 * Made by Evan Galli *
 **********************/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>

    <title>Minecraft Better</title>
    <link rel="canonical" href="https://nginx.minecraftbetter.com"/>
    <meta name="description" content="Minecraft Better: A minecraft server">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/fontawesome.min.css" rel="stylesheet"/>
    <link href="assets/css/twemoji-amazing.css" rel="stylesheet"/>
    <link href="assets/css/main.css" rel="stylesheet"/>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/js.cookie.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>

<body>
<div class="mx-auto">
    <header class="masthead mb-auto scrolled" style="color: var(--white)">
        <div class="inner">
            <a href="/"><img class="masthead-brand" src="assets/img/banner.png" style="height: 4.5em;"/></a>
            <nav class="p-3 nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/" id="txt-home">Home</a>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="language" data-toggle="dropdown"><i class="fas fa-language"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:changeLanguage('english')"><i class="twa twa-flag-united-kingdom"></i>English</a>
                        <a class="dropdown-item" href="javascript:changeLanguage('french')"><i class="twa twa-flag-france"></i>Français</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main role="main">
        <div class="d-flex flex-column w-100 introduction">
            <div class="carousel slide carousel-fade fullscreen-image" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $files = glob('assets/img/home/background/*.{jpg,png,gif}', GLOB_BRACE);
                    $class = "active";
                    foreach ($files as $file) { ?>
                        <div class="carousel-item <?= $class ?>">
                            <div style="background-image: url('<?= $file ?>')" class="img"></div>
                        </div>
                        <?php $class = "";
                    } ?>
                </div>
            </div>
            <div class="text-center">
                <img src="assets/img/home/icon.png" href="#" class="presentation-icon"/>
                <h1 id="txt-mcbetter">Minecraft Better</h1>
                <p class="lead" id="txt-mcbetter-subtitle">A minecraft server</p>
                <p class="lead" id="buttons" style="flex-wrap: wrap;">
                    <a href="https://api.adoptium.net/v3/installer/version/jdk-18.0.1%2B10/windows/x64/jdk/hotspot/normal/eclipse?project=jdk" class="btn btn-lg btn-info">
                        <i class="fab fa-java"></i><span id="txt-download-java">Java 18</span>
                    </a>
                    <span style="width: 100vw;"></span>
                    <a href="https://api.minecraftbetter.com/minecraftbetter/launcher/download?os=windows" id="downloadBtn" class="btn btn-lg btn-danger">
                        <i class="fab fa-windows"></i><span id="txt-download-win">Download (Win)</span>
                    </a>
                    <a href="https://api.minecraftbetter.com/minecraftbetter/launcher/download" id="downloadBtn" class="btn btn-lg btn-danger">
                        <i class="fas fa-download"></i><span id="txt-download-universal">Download (Universal)</span>
                    </a>
                </p>
            </div>
        </div>


        <content class="panel d-block mb-5">
            <p class="description" id="txt-mcbetter-desc">
                Type 'creeper' in chat
            </p>

            <div class="mb-5 text-center" style="margin: 0 auto; max-width: 900px; max-height: 500px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item text-center text-light d-flex" style="margin: 0 auto; background: #2f2f2f">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/zO28JbsaZwI" title="MinecraftBetter Trailer" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="d-flex mt-5 flex-wrap" style="gap: 25px; margin: 0 auto; max-width: 900px">
                <a href="https://github.com/MinecraftBetter" class="btn btn-lg btn-secondary" style="flex: 1 1 0">
                    <i class="fab fa-github"></i><span id="txt-github">Github</span>
                </a>
                <a href="https://discord.gg/4TC5eNEkE5" class="btn btn-lg btn-secondary" style="flex: 1 1 0">
                    <i class="fab fa-discord"></i><span id="txt-discord">Discord</span>
                </a>
            </div>
        </content>
    </main>

    <footer class="mt-auto text-center">
        <div class="inner">
            <p><span id="txt-credit">This website was made with ❤ by</span> <a href="https://github.com/06Games" style="font-weight: 600;">Evan Galli</a></p>
        </div>
    </footer>
</div>
</body>
</html>
