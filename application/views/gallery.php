<?php include("templates/public/header.php"); ?>
<!-- Page Contents -->
<div class="pusher">
    <?php include('navbar.php'); ?>
</div>
<style>
    .profile {
        margin-top: 100px;
    }
</style>
<div class="ui container profile">
    <!--<div class="ui grid">-->
        <!--<div class="ui equal width left aligned padded grid stackable">-->
            <!--Site Content-->
                <div class="containerli">
                    <div class="ui hidden divider"></div>
                    <h5 class="ui center aligned icon header">
                        <i class="circular camera retro icon"></i>
                        Image Gallery</small>
                    </h5>
                    <!--Begin Gallery-->
                    <?php foreach($galleries as $gallery){ ?>
                    <div class="gallery"><img src="/public/images/gallery/<?php echo $gallery['NAMA_FILE'] ?>" alt="" title="<?php echo $gallery['JUDUL'] ?>" /></div>
                    <?php } ?>
                    <!--Finish Gallery-->
                </div>
                <!--Site Content-->

        <!--</div>-->
    <!--</div>-->
</div>

<?php include ("templates/public/script.php"); ?>
<script>
    var jqu = $;
    jqu(document).ready(function () {
        // show dropdown on hover
        jqu('.ui.dropdown').dropdown({
            on: 'click'
        });
    });
</script>
<script src="/public/js/admin/jquery-2.1.4.min.js"></script>
<script src="/public/vendor/gridalicius/jquery.grid-a-licious.min.js"></script>
<script src="/public/vendor/fluidbox/dist/js/jquery.fluidbox.min.js"></script>
<script src="/public/js/admin/customjs/custom-gallery.js"></script>

<?php include ("templates/public/footer.php"); ?>
</body>
</html>
