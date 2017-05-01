<?php include "templates/header.php" ?>
<div class="mainWrap navslide">
    <div class="ui equal width left aligned padded grid stackable">
        <!--Site Content-->

        <div class="row">
            <div class="sixteen wide column">
                <div class="ui segments">
                    <div class="ui segment">
                        <h5 class="ui header">
                            Artikel Baru
                        </h5>
                    </div>
                    <div class="ui clearing segment">
                        <form action="/admin/article/new" method="post">
                        <div class="ui form">
                            <div class="field">
                                <label>Judul</label>
                                <input type="text" placeholder="Judul" name="judul">
                            </div>
                            <div class="field">
                                <label>Konten</label>
                                <textarea class="trumbowygeditor" name="konten"></textarea>
                            </div>
                            <div class="three fields">
                                <div class="field">
                                    <label>Tag</label>
                                    <select name="tags[]" multiple="" class="ui fluid dropdown">
                                        <option value="" >Tag</option>
                                        <?php foreach ($tags as $tag){
                                            echo "<option value=\"".$tag['KODE_TAG']."\">".$tag['NAMA_TAG']."</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Kategori</label>
                                    <select name="kategori" class="ui fluid dropdown">
                                        <option value="">Kategori</option>
                                        <?php foreach ($categories as $category){
                                            echo "<option value=\"".$tag['KODE_KATEGORI']."\">".$category['NAMA_KATEGORI']."</option>";
                                        } ?>
                                    </select>
<!--                                    <div class="ui fluid labeled icon dropdown button">-->
<!--                                        <i class="filter icon"></i>-->
<!--                                        <span class="text">Kategori</span>-->
<!--                                        <div class="menu">-->
<!--                                            --><?php //foreach ($categories as $category){
//                                                echo "<div class=\"item\">
//                                                Important
//                                            </div>";
//                                            } ?>
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                                <div class="field">
                                    <label>Permainan</label>
<!--                                    <div class="ui fluid labeled icon dropdown button">-->
<!--                                        <i class="mouse pointer icon"></i>-->
<!--                                        <span class="text">Permainan</span>-->
<!--                                        <div class="menu">-->
<!--                                            --><?php //foreach ($games as $game){
//                                                echo "<div class=\"item\">
//                                                ".$game['NAMA_PERMAINAN']."
//                                            </div>";
//                                            } ?>
<!--                                        </div>-->
<!--                                    </div>-->
                                    <select name="permainan" class="ui fluid dropdown">
                                        <option value="">Permainan</option>
                                        <?php foreach ($games as $game){
                                            echo "<option value=\"".$game['ID']."\">".$category['NAMA_PERMAINAN']."</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>
<!--                            <div class="field">-->
<!--                                <label>Gambar</label>-->
<!--                                <input type="file" placeholder="Judul">-->
<!--                            </div>-->
<!--                            <div class="field">-->
<!--                                <img class="ui fluid image" src="https://semantic-ui.com/images/wireframe/image.png">-->
<!--                            </div>-->
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