<?php include("templates/public/header.php"); ?>
    <!-- Page Contents -->
    <div class="pusher">
        <div class="ui borderless main menu fixed">
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
    </div>
    <style>
        .profile {
            margin-top: 100px;
        }
    </style>
    <div class="ui container profile">
        <div class="ui grid">
            <div class="ui four wide column">
                <!--<div class="ui segment">-->
                    <div class="ui fluid one cards special">
                        <div class="card fluid">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Add Friend</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="/public/images/avatar/<?php echo is_null($user['AVATAR'])?'Default.png':$user['AVATAR'] ?>">
                            </div>
                            <div class="content">
                                <a class="header"><?php echo $user['NAMA_LENGKAP'] ?></a>
                                <div class="meta">
                                    <span class="date"><?php echo $user['USERNAME'] ?></span>
                                </div>
                            </div>
                            <div class="extra content">
                                <a>
                                    <i class="write icon"><b><?php echo isset($num['article'])?$num['article']:'0' ?></b></i>
                                </a>
                            </div>
                            <div class="extra content">
                                <a>
                                    <i class="like icon"><b><?php echo isset($num['like'])?$num['like']:'0' ?></b></i>
                                </a>
                            </div>
                            <div class="extra content">
                                <a>
                                    <i class="comment icon"><b><?php echo isset($num['comment'])?$num['comment']:'0' ?></b></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <!--</div>-->
            </div>
            <div class="ui twelve wide column">
                <div class="row">
                    <div class="ui segment">
                        <div class="ui feed timeline">
                            <div class="event">
                                
                                <div class="ui form" style="width:100%">
                                <form method="post">
                                    <div class="field">
                                        <label>Berita</label>
                                        <textarea rows="3" name='berita'></textarea>
                                    </div>
                                    <button type="submit" class="ui submit button">Submit</button>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ui segment">
                        <h5 class="ui dividing header">
                            Berita Terbaru
                        </h5>
                        <div class="ui feed timeline">
                            <?php
                            // Like article and comment article
                            //var_dump($news);
                            foreach ($news as $item){
                                
                            ?>
                            <div class="event">
                                <div class="label">
                                    <img src="/public/images/avatar/<?php echo is_null($item['AVATAR'])?'Default.png':$item['AVATAR'] ?>" alt="label-image" />
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            <?php echo $item['NAMA_LENGKAP'] ?>
                                        </a><?php echo $item['BERITA'] ?>
                                        <div class="date">
                                            <?php echo $item['CREATED_AT'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <?php include ("templates/public/script.php"); ?>
    <script>
        $(document).ready(function () {
            // show dropdown on hover
            $('.ui.dropdown').dropdown({
                on: 'click'
            });
        });
    </script>
<?php include ("templates/public/footer.php"); ?>
</body>
</html>
