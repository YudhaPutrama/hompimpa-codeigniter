<?php $this->load->view('templates/public/header'); ?>
<style>
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
        position: relative;
        width: 100%;
        padding-top: 300px;
        text-align: center;
    }
    .title-hero {
        font-weight: 700!important;
        font-style: normal!important;
        font-size: 40px !important;
        /*margin-left: -2.5px;*/
    }
    .featured.images {
        width: 100%;
        padding-top: 60%;
        background-color: #bcbec0;
    }
    .header-hero p{
        font-size: 18px!important;
    }
</style>
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
        <div class="ui container">
            <div class="header-hero">
                <h1 class="ui header inverted title-hero">Artikel Terbaru</h1>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="ui text container">
        <?php foreach ($posts as $post){ ?>
            <h3 class="ui header"><?php echo $post['JUDUL']; ?></h3>
            <div class="ui red ribbon label">
                <i class="mouse icon"></i> Permainan
            </div>
            <div class="featured images" style="background-image:url('/public/images/gallery/<?php echo $post['GAMBAR'] ?>')"></div>
            <p><?php echo $post['KONTEN']->read(500) ?></p>
            <a class="ui large button" href="<?php echo site_url($post['SLUG'])?>">Baca Lebih</a>
        <?php } ?>
            <div class="ui center aligned basic segment">
<!--                <div class="ui horizontal divider header">Halaman Lain</div>-->
                <?php echo $this->pagination->create_links() ?>
<!--                <div class="ui buttons">-->
<!--                    <button class="ui button"><i class="left arrow icon"></i></button>-->
<!--                    <button class="blue ui button">1</button>-->
<!--                    <button class="ui button">2</button>-->
<!--                    <button class="ui button">3</button>-->
<!--                    <button class="ui button"><i class="right arrow icon"></i></button>-->
<!--                </div>-->
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
<?php $this->load->view('templates/public/script'); ?>
<script>
    $(document).ready(function () {
        // show dropdown on hover
        $('.ui.dropdown').dropdown({
            on: 'click'
        });
    });
</script>
<?php //$this->load->view('templates/public/footer'); ?>
</body>
</html>
