<?php include "templates/header.php" ?>
    <!--maincontent-->
    <div class="mainWrap navslide">
        <div class="ui equal width left aligned padded grid stackable">
            <!--Site Content-->
            <!--Site Content-->

            <div class="row">
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui clearing segment">
                            <h3 class="ui header">
                                Datatable
                                <a class="ui blue right floated mini button" onclick="$('.ui.fullscreen.modal').modal('show')"><i class="plus icon"></i>Tambah</a>
                            </h3>
                        </div>
                        <div class="ui segment">
                            <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jumlah Artikel</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach($categories as $category) { ?>
                                    <tr>
                                        <td><?php echo $category['KODE_KATEGORI'] ?></td>
                                        <td><?php echo $category['NAMA_KATEGORI'] ?></td>
                                        <td><?php echo $category['JUMLAH'] ?></td>
                                        <td>
                                            <a class="ui teal button" id="btn-edit" href="/admin/category/<?php echo $category['KODE_KATEGORI'] ?>/update"><i class="pencil icon"></i>Sunting</a>
                                            <a class="ui red button" id="btn-remove" href="/admin/category/<?php echo $category['KODE_KATEGORI'] ?>/delete"><i class="trash icon"></i>Hapus</a>
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

    <div class="ui fullscreen modal">
        <i class="close icon"></i>
        <div class="header">
            Tambah Baru
        </div>
        <div class="content">
            <div class="ui form">
                <form method="post" id="kategori_baru" action="<?php echo base_url('/admin/category/new') ?>">
<!--                <h4 class="ui dividing header">Give us your feedback</h4>-->
                <div class="field">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori"></input>
                </div>
                </form>
            </div>
        </div>
        <div class="actions">
            <div class="ui green button" onclick="$('#kategori_baru').submit()">Buat</div>
        </div>

    </div>
<?php
//$scripts[] = "
//<script>
//$('.fullscreen.modal').modal('show');
//</script>";
?>
<?php include "templates/footer.php" ?>