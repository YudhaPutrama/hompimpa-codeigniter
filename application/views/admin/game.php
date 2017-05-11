<?php include "templates/header.php" ?>
    <!--maincontent-->
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <!--Site Content-->
            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui clearing segment">
                            <h3 class="ui header">
                                Permainan
                                <a class="ui blue right floated mini button" href="/admin/article/new"><i class="plus icon"></i>Tambah</a>
                            </h3>
                        </div>
                        <div class="ui segment">
                            <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Slug</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($games as $game) { ?>
                                    <tr>
                                        <td><?php echo $game['SLUG'] ?></td>
                                        <td><?php echo $game['NAMA_PERMAINAN'] ?></td>
                                        <td>
                                            <a class="ui teal button" href="/admin/game/<?php echo $game['SLUG'] ?>"><i class="pencil icon"></i>Sunting</a>
                                            <a class="ui red button" href="/admin/game/<?php echo $game['SLUG'] ?>/delete"><i class="trash icon"></i>Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--maincontent-->
<?php
//$scripts[] = "
//<script>
//$('.fullscreen.modal').modal('show');
//</script>";
?>
<?php include "templates/footer.php" ?>