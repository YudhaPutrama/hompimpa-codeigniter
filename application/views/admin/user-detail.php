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
                        <i class="icon mail"></i> Notifikasi
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
                        Kurniawan Yudha Putrama <i class="dropdown icon"></i>
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
        <div class="ui eight wide column">
            <div class="ui basic segment no-padding">
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
                            <img src="/public/images/avatar/<?php echo $user['AVATAR'] ?>">
                        </div>
                        <div class="content">
                            <a class="header"><?php echo $user['NAMA_LENGKAP'] ?></a>
                            <div class="meta">
                                <span class="date"><?php echo $user['USERNAME'] ?></span>
                            </div>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="write icon"></i>
                            </a>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="like icon"></i>
                            </a>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="comment icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui eight wide column">
            <div class="ui segment">
                <h5 class="ui dividing header">
                    Berita Terbaru
                </h5>
                <div class="ui feed timeline">
                    <?php
                    // Like article and comment article
                    foreach ($notifications as $notification){
                        ?>
                        <div class="event">
                            <div class="label">
                                <img src="/public/images/avatar/<?php echo $notification['avatar'] ?>" alt="label-image" />
                            </div>
                            <div class="content">
                                <div class="summary">
                                    <a class="user">
                                        <?php echo $notification['nama'] ?>
                                    </a><?php echo $notification['event'] ?>
                                    <div class="date">
                                        <?php echo $notification['time'] ?>
                                    </div>
                                </div>
                                <!--                            <div class="extra text">-->
                                <!--                                Ours is a life of constant reruns. We're always circling back to where we'd we started, then starting all over again. Even if we don't run extra laps that day, we surely will come back for more of the same another day soon.-->
                                <!--                            </div>-->
                                <!--                            <div class="extra images">-->
                                <!--                                <a><img src="/public/images/admin/bg/1.png" alt="bg-image" /></a>-->
                                <!--                                <a><img src="/public/images/admin/bg/3.png" alt="bg-image" /></a>-->
                                <!--                            </div>-->
                                <!--                            <div class="meta">-->
                                <!--                                <a class="like">-->
                                <!--                                    <i class="like icon"></i> 4 Likes-->
                                <!--                                </a>-->
                                <!--                            </div>-->
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
