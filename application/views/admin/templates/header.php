<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo isset($title)?$title." | Hompimpa Challenge":"Hompimpa Challenge"; ?></title>
    <link rel="icon" href="/public/images/admin/favicon.ico" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link href="/public/css/semantic.min.css" rel="stylesheet" />
    <link href="/public/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="/public/css/admin/main.css" rel="stylesheet" />
    <link href="/public/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link href="/public/vendor/weather-icons/css/weather-icons-wind.min.css" rel="stylesheet" />
    <link href="/public/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet" />
    <link href="/public/vendor/chartist/chartist.min.css" rel="stylesheet" />
    <link href="/public/css/admin/chat-page.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/public/images/admin/favicon.ico" />

    <link href="/public/vendor/trumbowyg/ui/trumbowyg.css" rel="stylesheet" />
<!--    <link href="/public/vendor/tinymce/skins/lightgray/skin.min.css" rel="stylesheet" />-->


</head>

<body>
<div id="contextWrap">
    <!--sidebar-->
    <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
        <a class="item logo" href="/admin">
            <img src="/public/images/logo.png" alt="hompimpalogo" />
        </a>
        <div class="ui accordion inverted">
            <a class="item" href="/admin">
                <i class="ion-speedometer titleIcon icon"></i>
                Dashboard
            </a>
            <div class="title item">
                <i class="ion-ios-lightbulb titleIcon icon"></i>

                <i class="dropdown icon"></i> Artikel
            </div>
            <div class="content">
                <a class="item" href="/admin/article/new">
                    Tambah Artikel
                </a>

                <a class="item" href="/admin/article">
                    Daftar Artikel
                </a>
                <a class="item" href="/admin/category">
                    Kategori
                </a>
                <a class="item" href="/admin/tag">
                    Tag
                </a>
            </div>
            <a class="item" href="/admin/comment">
                <i class="ion-chatbubbles titleIcon icon"></i>
                Komentar
            </a>
            <div class="title item">
                <i class="ion-mouse titleIcon icon"></i>

                <i class="dropdown icon"></i> Permainan
            </div>
            <div class="content">
                <a class="item" href="/admin/game/new">
                    Tambah Permainan
                </a>

                <a class="item" href="/admin/game">
                    Daftar Permainan
                </a>
                <a class="item" href="/admin/game/score">
                    Nilai
                </a>
            </div>

            <div class="title item">
                <i class="ion-person-stalker titleIcon icon"></i>

                <i class="dropdown icon"></i> Pengguna
            </div>
            <div class="content">
                <a class="item" href="/admin/user">
                    Daftar Pengguna
                </a>

                <a class="item" href="/admin/user/block">
                    Pengguna Terblokir
                </a>
                <a class="item" href="/admin/user/role">
                    Role
                </a>
            </div>

            <a class="item" href="/admin/ranking">
                <i class="ion-stats-bars titleIcon icon"></i>
                Peringkat
            </a>

        </div>

        <div class="ui divider"></div>

        <a class="item hiddenCollapse">
            <div class="ui one tiny inverted statistics">
                <div class="statistic">
                    <div class="value">
                        <i class="ion-person icon"></i>
                        <span class="counter"><?php echo $this->user_model->get_count_user() ?></span>
                    </div>
                    <div class="label">
                        Pengguna
                    </div>
                </div>

                <div class="statistic">
                    <div class="value">
                        <i class="ion-mouse icon"></i><span class="counter">  <?php echo $this->game_model->get_count_game() ?></span>
                    </div>
                    <div class="label">
                        Permainan
                    </div>
                </div>
            </div>
    </div>
    <a></a>

    <div class="pusher">
        <!--navbar-->
        <div class="navslide navwrap">
            <div class="ui menu icon borderless grid" data-color="inverted white">
                <a class="item labeled openbtn">
                    <i class="ion-navicon-round big icon"></i>
                </a>
                <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                    <i class="ion-arrow-expand big icon"></i>
                </a>
                <div class="right menu colhidden">
<!--                    <div class="ui dropdown item labeled icon">-->
<!--                        <i class="bell icon"></i>-->
<!--                        <div class="ui red label mini circular">6</div>-->
<!--                        <div class="menu">-->
<!--                            <div class="header">-->
<!--                                People You Might Know-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img class="ui avatar image" src="/public/images/admin/avatar/people/enid.png" alt="label-image" /> Janice Robinson-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="ui dropdown item">
                        <img class="ui mini circular image" src="/public/images/admin/avatar/people/enid.png" alt="label-image" />
                        <div class="menu">
                            <a class="item" href="/me">Profil</a>
<!--                            <a class="item" href="settings.html">Pengaturan</a>-->
                            <div class="ui divider"></div>
                            <a class="item" href="/logout"><i class="sign out icon"></i>Keluar</a>
                        </div>
                    </div>
<!--                    <a class="item labeled rightsidebar computer only">-->
<!--                        <i class="ion-wrench large icon"></i>-->
<!--                    </a>-->

                </div>
            </div>
        </div>
        <!--navbar-->
