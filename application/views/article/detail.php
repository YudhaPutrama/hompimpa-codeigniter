
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title><?php echo isset($title)? $title:"Hompimpa"; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/semantic.css')?>">


    <script src="<?php echo base_url('public/js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/semantic.js')?>"></script>
    <script>
        $(document)
            .ready(function() {

                // fix main menu to page on passing
                $('.main.menu').visibility({
                    type: 'fixed'
                });

                // lazy load images
                $('.image').visibility({
                    type: 'image',
                    transition: 'vertical flip in',
                    duration: 500
                });


                // show dropdown on hover
                $('.main.menu  .ui.dropdown').dropdown({
                    on: 'click'
                });

                $('.edit.article .ui.dropdown').dropdown({
                    on: 'click'
                });
            })
        ;
    </script>

    <style type="text/css">

        body {
            background-color: #FFFFFF;
        }
        .main.container {
            margin-top: 2em;
        }

        .main.menu {
            /*margin-top: 4em;*/
            border-radius: 0;
            border: none;
            box-shadow: none;
            transition:
                    box-shadow 0.5s ease,
                    padding 0.5s ease
        ;
        }
        .main.menu .item img.logo {
            margin-right: 1.5em;
        }

        .overlay {
            position: absolute;
            left:20px;
            bottom:20px;
            margin: 0em 3em 1em 5em;
            transition: left 0.5s ease;
            z-index: 5;
        }

        .overlay.fixed {
            position: fixed;
            left:20px;
            bottom:4em;
            margin: 0em 3em 1em 5em;
        }

        .main.menu.fixed {
            background-color: #FFFFFF;
            border: 1px solid #DDD;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }


        .text.container .left.floated.image {
            margin: 2em 2em 2em -4em;
        }
        .text.container .right.floated.image {
            margin: 2em -4em 2em 2em;
        }

        .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
        }
        .hero {
            position: relative;
            overflow: hidden;
            /*text-align: center;*/
            padding: 0em;
            color: rgba(255, 255, 255, 0.9);
            /*margin-bottom: 0px;*/
            border-bottom: none;
            background-color: #000000;
            background-position: 50% 50%;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 3;
            margin: 0em;
            min-height: 185px;

        }
        .hero:after {
            background-image: url(../public/images/2.jpg);
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: -1;
            width: 100%;
            height: 100%;
            content: '';
            background-size: cover;
            opacity: 0.45;
        }
        .hero .container {
            margin-left: auto !important;
            height: 35vh;
            margin-right: auto !important;
            min-height: 400px;
            /*-webkit-box-align: center;*/
        }
        .header-hero {
            position: absolute;
            bottom: 20px;
        }
        .title-hero {
            font-weight: 700!important;
            font-style: normal!important;
            font-size: 40px !important;
            /*margin-left: -2.5px;*/
        }
        .header-hero p{
            font-size: 18px!important;
        }
        .author-article {
            position: fixed;
            right: 60px;
            bottom: 60px;
            margin-bottom: 10px;
            z-index: 10;
        }
        .panel-bottom-play {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 10;
        }
    </style>

</head>
<body>
<div class="hero">
    <div class="ui container">
<?php //if ($this->authentication->verify_role('ADMIN')){ ?>
        <div class="ui right floated teal buttons edit article" style="margin-top: 60px;">
            <a class="ui button" href="<?php echo site_url('admin/article/'.$post['SLUG'])?>"><i class="edit icon"></i> Sunting Artikel</a>
            <div class="ui floating dropdown icon button">
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" href="<?php echo site_url('admin/article/'.$post['SLUG'])?>"><i class="delete icon"></i> Hapus Artikel</a>
                    <a class="item" href="<?php echo site_url('admin/article/'.$post['SLUG'])?>"><i class="hide icon"></i> Sembunyikan Artikel</a>
                </div>
            </div>
        </div>
<?php //} ?>
        <div class="header-hero">
            <h1 class="ui header inverted title-hero"><?php echo $post['JUDUL'] ?></h1>
            <p><?php echo isset($post['POST_AT'])?$post['POST_AT']:""; ?></p>
        </div>
    </div>
</div>
<div class="ui borderless main menu">
    <div class="ui container">
        <div href="#" class="header item">
            <img class="ui small image logo" src="<?php echo base_url('public/images/logo.png'); ?>">
        </div>
        <a href="/" class="item">Beranda</a>
        <a href="/article" class="item">Artikel</a>
        <a href="/gallery" class="item">Galeri</a>
        <div class="ui right floated item">
            <?php if(isset($user)){ ?>
                <a class="ui dropdown item">
                    <i class="icon mail"></i> <?php echo count($notifications)>0?"Notifikasi":"Tidak ada notifikasi" ?>
                    <?php if(isset($notifications)){ ?>
                        <?php if (count($notifications)>0){ ?><div class="ui red label"><?php echo count($notifications); ?></div><?php } ?>
                        <div class="menu">
                            <div class="header">
                                Mengajak Kamu Bermain
                            </div>
                            <?php foreach ($notifications as $notification){?>
                                <div class="item">
                                    <img class="ui avatar image" src="/images/avatar/small/<?php echo $notification['avatar']; ?>">
                                    <?php echo $notification['name']; ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }?>
                </a>
                <div  class="ui dropdown item">
                    <?php echo is_null($user['NAMA_LENGKAP'])?$user["USERNAME"]:$user["NAMA_LENGKAP"] ?> <i class="dropdown icon"></i>
                    <div class="menu ">
                        <div class="item"><a href="/me">Profil</a></div>
                        <div class="item"><a href="/setting">Pengaturan</a></div>
                        <div class="divider"></div>
                        <div class="item" >
                            <a href="/logout"><i class="sign out icon"></i>Keluar</a>
                        </div>
                    </div>
                </div>

            <?php } else { ?>
                <a href="/register" class="item">Daftar</a>
                <a href="/login" class="item">Masuk</a>
            <?php } ?>
        </div>



    </div>
</div>

<div class="ui text container article">
    <div class="overlay fixed">
        <div class="ui labeled icon horizontal menu">
            <a class="item" onclick="$('.page.dimmer:first').dimmer('toggle');"><i class="heart icon"></i> Like</a>
            <a class="item"><i class="comment icon"></i> Comment</a>
        </div>
    </div>
    <div class="ui horizontal list">
        <div class="item author-article">
            <img class="ui circular tiny image" src="<?php echo base_url('public/images/molly.png');?>">
            <div class="content">
                <div class="ui sub header">Kurniawan</div>
                Penulis
            </div>
        </div>
    </div>
    <?php echo $post["KONTEN"]->load(); ?>
    <div class="ui comments">
        <h3 class="ui dividing header">Comments</h3>
        <?php foreach ($comments as $comment){ ?>
            <div class="comment">
                <a class="avatar">
                    <img src="<?php $comment['AVATAR'] ?>">
                </a>
                <div class="content">
                    <a class="author"><?php $comment['AVATAR'] ?></a>
                    <div class="metadata">
                        <span class="date"><?php $comment['CREATED_AT'] ?></span>
                    </div>
                    <div class="text">
                        <?php $comment['KOMENTAR'] ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form class="ui reply form">
            <div class="field">
                <textarea></textarea>
            </div>
            <div class="ui blue labeled submit icon button">
                <i class="icon edit"></i> Add Reply
            </div>
        </form>
    </div>
</div>

<div class="panel-bottom-play fixed">
    <div class="ui clearing segment">
        <div class="ui text container">
            Mari main bersama
            <button class="ui right floated red button" onclick="$('#modal1').modal('setting', 'closable', false).modal('show')">
                <i class="play icon"></i>Mainkan
            </button>
        </div>
    </div>
</div>


<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Kategori Teratas</h4>
                <div class="ui inverted link list">
                    <?php foreach ($top_categories as $category) {
                        echo "<a href=\"".site_url('category/'.$category['KODE_KATEGORI'])."\" class=\"item\" >".$category['NAMA_KATEGORI']."</a >";
                    } ?>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">Permainan Teratas</h4>
                <div class="ui inverted link list">
                    <?php foreach ($top_games as $game) {
                        echo "<a class=\"item\" >".$game['NAMA_PERMAINAN']."</a >";
                    } ?>
                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Tentang Kami</h4>
                <p>Kami Mahasiswa D3 Teknik Informatika Telkom University</p>
                <!--                        <p>Website ini kami dedikasikan untuk pembelajaran tentang penggiat permainan tradisional</p>-->
            </div>
        </div>
    </div>
</div>
<div class="ui basic modal" id="modal1">
    <div class="content">

    </div>
</div>
<div class="ui page dimmer">
    <div class="content">
        <div class="center">Hello</div>
    </div>
</div>
</body>
</html>
