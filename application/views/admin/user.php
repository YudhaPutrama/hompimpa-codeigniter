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
<!--                                <a class="ui blue right floated mini button" href="/admin/user/new"><i class="plus icon"></i>Tambah</a>-->
                            </h3>
                        </div>
                        <div class="ui segment">
                            <table id="data_table" class="ui compact selectable striped celled table tablet stackable" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <!--<th>Role</th>-->
<!--                                    <th>Created At</th>-->
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($members as $member) { ?>
                                    <tr>
                                        <td><?php echo $member['USERNAME'] ?></td>
                                        <td><?php echo $member['NAMA_LENGKAP'] ?></td>
                                        <td><?php echo $member['EMAIL'] ?></td>
                                        <!--<td><?php echo $member['ROLE'] ?></td>-->
<!--                                        <td>--><?php //echo $article['CREATED_AT'] ?><!--</td>-->
                                        <td>
                                            <!--<a class="ui teal button" href="/admin/user/<?php echo $member['USERNAME'] ?>/update"><i class="pencil icon"></i>Sunting</a>-->
                                            <a class="ui red button" href="/admin/user/<?php echo $member['USERNAME'] ?>/delete"><i class="trash icon"></i>Hapus</a>
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
            Update Your Settings
        </div>
        <div class="content">
            <div class="ui form">
                <h4 class="ui dividing header">Give us your feedback</h4>
                <div class="field">
                    <label>Feedback</label>
                    <textarea></textarea>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" checked="checked" name="contact-me">
                        <label>It's okay to contact me.</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui button">Cancel</div>
            <div class="ui green button">Send</div>
        </div>
    </div>
<?php
//$scripts[] = "
//<script>
//$('.fullscreen.modal').modal('show');
//</script>";
?>
<?php include "templates/footer.php" ?>