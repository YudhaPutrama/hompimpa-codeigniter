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
        .play {
            margin-top: 100px;
        }
        canvas {
            margin:auto;
        }
    </style>
    <div class="ui container play">
        <div id="content">
            <div id="game-container"></div>
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
    <script>
//    var socket = io('http://hompimpa.trivalier.id:8080');
//    socket.on('news', function (data) {
//        console.log(data);
//        socket.emit('message', { my: 'data' });
//    });
</script>
    <script src="<?php echo base_url('public/js/phaser.min.js');?>"></script>
    <script src="<?php echo base_url('public/games/scripts/'.$gamesfile.'.js');?>"></script>
<?php include ("templates/public/footer.php"); ?>
</body>
</html>
