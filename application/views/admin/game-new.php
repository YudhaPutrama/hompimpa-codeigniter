<?php include "templates/header.php" ?>
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <!--Site Content-->

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <h5 class="ui header">
                                Permainan Baru
                            </h5>
                        </div>
                        <div class="ui clearing segment">
                            <?php echo form_open_multipart('admin/game/new');?>
                                <div class="ui form">
                                    <div class="field">
                                        <label>Nama</label>
                                        <input type="text" placeholder="Nama" name="nama" required>
                                    </div>
                                    <div class="field">
                                        <label>Script</label>
                                        <input type="text" placeholder="Script" name="script" required>
                                    </div>
                                    <button class="ui blue right floated button" type="submit" value="upload">Submit</button>
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