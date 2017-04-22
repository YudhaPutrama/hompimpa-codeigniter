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
        <div class="hero">
            <div class="ui inverted vertical masthead center aligned segment">
                <div class="ui text container">
                    <h1 class="ui inverted header">
                        HOMPIMPA
                    </h1>
                    <h2>Ketahui dan Mainkan Permainan Tradisional</h2>
                    <div class="ui huge primary button">Jelajahi <i class="right arrow icon"></i></div>
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header">Telusuri dan Pelajari</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                        </div>
                        <div class="six wide right floated column">
                            <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
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
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="six wide left floated column">
                            <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
                        </div>
                        <div class="eight wide column">
                            <h3 class="ui header">Mainkan dengan Orang Lain</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
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
                    <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
                    <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
                    <a class="ui large button">Read More</a>
                    <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
                    <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
                    <a class="ui large button">I'm Still Quite Interested</a>
                </div>
            </div>

        </div>
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">Kategori Teratas</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Sitemap</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Permainan Teratas</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Artikel</a>
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
