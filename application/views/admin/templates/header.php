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
                <a class="item" href="/admin/article/category">
                    Kategori
                </a>
                <a class="item" href="/admin/article/tag">
                    Tag
                </a>
            </div>
            <a class="item" href="/admin/comments">
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
                <a class="item" href="/admin/user/new">
                    Tambah Pengguna
                </a>

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
                        <span class="counter">3654</span>
                    </div>
                    <div class="label">
                        Pengguna
                    </div>
                </div>

                <div class="statistic">
                    <div class="value">
                        <i class="ion-mouse icon"></i><span class="counter">19</span>
                    </div>
                    <div class="label">
                        Permainan
                    </div>
                </div>
            </div>
    </div>
    <a></a>
    <!--sidebar-->
    <div class="ui right sidebar">
        <div class="ui pointing secondary two item tabular menu">
            <a class="item active" data-tab="first"><i class="red icon ion-chatbox-working icon"></i></a>
            <a class="item" data-tab="fourth"><i class="blue icon ion-gear-a"></i></a>
        </div>
        <div class="ui tab active" data-tab="first">
            <div class="ui small feed">
                <h4 class="ui header">Followers Activity</h4>
                <div class="event">
                    <div class="label">
                        <img src="/public/images/admin/avatar/people/Abraham.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui tab" data-tab="fourth">
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Connection Limited</label>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput" checked="checked">
                            <label>20 mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>10mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>5mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox checked">
                            <input type="radio" name="throughput">
                            <label>Unmetered</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Notifications</label>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" checked name="public">
                            <label class="coloring red">Enabled</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label class="coloring green">Updates</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Comments</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Chat</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>

            <h4 class="ui header">Navbar Color</h4>
            <div class="ui basic segment">

                <ul class="colorlist">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
            <h4 class="ui header">Sidebar Color</h4>
            <div class="ui basic segment">

                <ul class="sidecolor">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                    <div class="ui dropdown item labeled icon">
                        <i class="bell icon"></i>
                        <div class="ui red label mini circular">6</div>
                        <div class="menu">
                            <div class="header">
                                People You Might Know
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="/public/images/admin/avatar/people/enid.png" alt="label-image" /> Janice Robinson
                            </div>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        <img class="ui mini circular image" src="/public/images/admin/avatar/people/enid.png" alt="label-image" />
                        <div class="menu">
                            <a class="item" href="profile.html">Profil</a>
                            <a class="item" href="settings.html">Pengaturan</a>
                            <div class="ui divider"></div>
                            <a class="item" href="login.html"><i class="sign out icon"></i>Keluar</a>
                        </div>
                    </div>
                    <a class="item labeled rightsidebar computer only">
                        <i class="ion-wrench large icon"></i>
                    </a>

                </div>
            </div>
        </div>
        <!--navbar-->
