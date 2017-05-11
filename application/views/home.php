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
        <div class="hero">
            <div class="ui inverted vertical masthead center aligned segment">
                <div class="ui text container">
                    <h1 class="ui inverted header">
                        HOMPIMPA
                    </h1>
                    <h2>Ketahui dan Mainkan Permainan Tradisional</h2>
                    <a class="ui huge primary button" href="/article">Jelajahi <i class="right arrow icon"></i></a>
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="eight wide column">
                            <h2 class="ui header">Telusuri dan Pelajari</h2>
<!--                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>-->
                        </div>
                        <div class="six wide right floated column">
                            <img src="/public/images/search.png" class="ui large bordered rounded image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="six wide left floated column">
                            <img src="/public/images/play2.png" class="ui large bordered rounded image">
                        </div>
                        <div class="eight wide column">
                            <h2 class="ui header">Mainkan</h2>
<!--                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>-->
                        </div>

                    </div>
<!--                    <div class="row">-->
<!--                        <div class="center aligned column">-->
<!--                            <a class="ui huge button">Check Them Out</a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui text container">
                    <h4 class="ui horizontal header divider">
                        <a href="#">Artikel Terbaru</a>
                    </h4>
<?php foreach ($posts as $post) { ?>
                    <h3 class="ui header"><?php echo $post['JUDUL'] ?></h3>
                    <p><?php echo $post['KONTEN']->read(500) ?></p>
                    <a class="ui large button" href="<?php echo site_url($post['SLUG']) ?>">Read More</a>
<?php } ?>


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
