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
        <!--<div class="ui equal width left aligned padded grid stackable">-->
            <!--Site Content-->

            <div class="eight wide column">
                <!--<div class="column">-->
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Teman
                            </h5>
                        </div>
                        <div class="ui segment">
                            <div class="ui items">
                            <?php foreach($friends as $friend){ ?>
                            <div class="item">
                                <a class="ui tiny circular image">
                                    <img src="img/avatar/people/carol.png" alt="label-image">
                                </a>
                                <div class="content">
                                    <a class="header"><?php echo $friend['NAMA_LENGKAP']?></a>
                                    <div class="description">
                                        <button class="ui right floated button"><i class="plus icon"></i> Tambah Teman</button></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ui divider"></div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                <!--</div>-->
            </div>
            <div class="eight wide column">
                <div class="ui segments">
                    <div class="ui segment">
                        <h5 class="ui header">
                            Cari Teman
                        </h5>
                    </div>
                    <div class="ui segment">
                        <div class="ui items">
                        <?php foreach($ofriends as $ofriend){ ?>
                            <div class="item">
                                <a class="ui tiny circular image">
                                    <img src="img/avatar/people/carol.png" alt="label-image">
                                </a>
                                <div class="content">
                                    <a class="header"><?php echo $ofriend['NAMA_LENGKAP']?></a>
                                    <div class="description">
                                        <button class="ui right floated button"><i class="plus icon"></i> Tambah Teman</button></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ui divider"></div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Site Content-->
        <!--</div>-->
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
