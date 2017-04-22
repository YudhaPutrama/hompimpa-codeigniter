
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
        }
        .panel-bottom-play {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>
<body>
<div class="hero">
    <div class="ui container">
        <div class="ui right floated teal buttons edit article" style="margin-top: 60px;">
            <div class="ui button"><i class="edit icon"></i> Sunting Artikel</div>
            <div class="ui floating dropdown icon button">
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item"><i class="delete icon"></i> Hapus Artikel</div>
                    <div class="item"><i class="hide icon"></i> Sembunyikan Artikel</div>
                </div>
            </div>
        </div>
        <div class="header-hero">
            <h1 class="ui header inverted title-hero"><?php echo isset($article['title'])?$article['title']:"Judul Artikel"; ?></h1>
            <p><?php echo isset($article['subtitle'])?$article['subtitle']:"Artikel Subtitle"; ?></p>
        </div>
    </div>
</div>
<div class="ui borderless main menu">
    <div class="ui container">
        <div href="#" class="header item">
            <img class="ui small image logo" src="<?php echo base_url('public/images/logo.png');?>">
        </div>
        <a href="#" class="item">Artikel</a>
        <a href="#" class="item">Galeri</a>
        <div class="ui right floated item">
            <a class="ui dropdown item">
                <i class="icon mail"></i> Notifikasi
                <div class="ui red label">22</div>
                <div class="menu">
                    <div class="header">
                        Mengajak Kamu Bermain
                    </div>
                    <div class="item">
                        <img class="ui avatar image" src="/images/avatar/small/jenny.jpg">
                        Jenny Hess
                    </div>
                    <div class="item">
                        <img class="ui avatar image" src="/images/avatar/small/elliot.jpg">
                        Elliot Fu
                    </div>
                    <div class="item">
                        <img class="ui avatar image" src="/images/avatar/small/stevie.jpg">
                        Stevie Feliciano
                    </div>
                </div>
            </a>
            <a  class="ui dropdown item">
                Kurniawan Yudha Putrama <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">Profil</div>
                    <div class="item">Pengaturan</div>
                    <div class="divider"></div>
                    <div class="item">
                        <i class="sign out icon"></i>Keluar
                    </div>
                </div>
            </a>
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

    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <!--    <img class="ui medium left floated image" data-src="assets/images/wireframe/square-image.png">-->
    <div class="ui comments">
        <h3 class="ui dividing header">Comments</h3>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/matt.jpg">
            </a>
            <div class="content">
                <a class="author">Matt</a>
                <div class="metadata">
                    <span class="date">Today at 5:42PM</span>
                </div>
                <div class="text">
                    How artistic!
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
        </div>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/elliot.jpg">
            </a>
            <div class="content">
                <a class="author">Elliot Fu</a>
                <div class="metadata">
                    <span class="date">Yesterday at 12:30AM</span>
                </div>
                <div class="text">
                    <p>This has been very useful for my research. Thanks as well!</p>
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
        </div>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/joe.jpg">
            </a>
            <div class="content">
                <a class="author">Joe Henderson</a>
                <div class="metadata">
                    <span class="date">5 days ago</span>
                </div>
                <div class="text">
                    Dude, this is awesome. Thanks so much
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
        </div>
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
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Group 1</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Link One</a>
                    <a href="#" class="item">Link Two</a>
                    <a href="#" class="item">Link Three</a>
                    <a href="#" class="item">Link Four</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">Group 2</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Link One</a>
                    <a href="#" class="item">Link Two</a>
                    <a href="#" class="item">Link Three</a>
                    <a href="#" class="item">Link Four</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">Group 3</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Link One</a>
                    <a href="#" class="item">Link Two</a>
                    <a href="#" class="item">Link Three</a>
                    <a href="#" class="item">Link Four</a>
                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Footer Header</h4>
                <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
            </div>
        </div>
        <div class="ui inverted section divider"></div>
        <img src="assets/images/logo.png" class="ui centered mini image">
        <div class="ui horizontal inverted small divided link list">
            <a class="item" href="#">Site Map</a>
            <a class="item" href="#">Contact Us</a>
            <a class="item" href="#">Terms and Conditions</a>
            <a class="item" href="#">Privacy Policy</a>
        </div>
    </div>
</div>
<div class="ui basic modal" id="modal1">
    <div class="ui icon header">
        <i class="archive icon"></i>
        Archive Old Messages
    </div>
    <div class="content">
        <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
    </div>
    <div class="actions">
        <div class="ui red basic cancel inverted button">
            <i class="remove icon"></i>
            No
        </div>
        <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>
            Yes
        </div>
    </div>
</div>
<div class="ui page dimmer">
    <div class="content">
        <div class="center">Hello</div>
    </div>
</div>
</body>

</html>
