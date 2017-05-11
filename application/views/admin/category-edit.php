<?php include "templates/header.php" ?>
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <!--Site Content-->

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Kategori Edit (<?php echo $category['KODE_KATEGORI'] ?>)
                            </h5>
                        </div>
                        <div class="ui clearing segment">
                            <form action="/admin/category/<?php echo $category['KODE_KATEGORI'] ?>/update" method="post">
                                <input type="hidden" name="kode" value="<?php echo $category['KODE_KATEGORI'] ?>">
                                <div class="ui form">
                                    <div class="field">
                                        <label>Kode Kategori</label>
                                        <input type="text" placeholder="nama" name="nama" value="<?php echo $category['NAMA_KATEGORI'] ?>">
                                    </div>
                                    <div class="field">
                                        <label>Nama Kategori</label>
                                        <input type="text" placeholder="nama" name="nama" value="<?php echo $category['NAMA_KATEGORI'] ?>">
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