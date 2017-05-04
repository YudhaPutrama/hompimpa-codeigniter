<?php include "templates/header.php" ?>
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <!--Site Content-->

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Tag Edit (<?php echo $tag['KODE_TAG'] ?>)
                            </h5>
                        </div>
                        <div class="ui clearing segment">
                            <form action="/admin/tag/<?php echo $tag['KODE_TAG'] ?>/update" method="post">
                                <input type="hidden" name="kode" value="<?php echo $tag['KODE_TAG'] ?>">
                                <div class="ui form">
                                    <div class="field">
                                        <label>Nama Tag</label>
                                        <input type="text" placeholder="nama" name="nama" value="<?php echo $tag['NAMA_TAG'] ?>">
                                    </div>
                                    <button class="ui blue right floated button" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Site Content-->


    </div>
    <!--maincontent-->
<?php include "templates/footer.php" ?>