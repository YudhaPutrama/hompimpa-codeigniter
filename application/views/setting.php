<?php include("templates/public/header.php");
$user = $this->authentication->get_user();
?>
    <!-- Page Contents -->
    <style>
        .column{
            max-width:inherit;
        }
    </style>
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
                        <i class="icon mail"></i> <?php echo count($notifications)>0?"Notifikasi":"Tidak ada notifikasi" ?>
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
                        <?php echo is_null($user['NAMA_LENGKAP'])?$user["USERNAME"]:$user["NAMA_LENGKAP"] ?> <i class="dropdown icon"></i>
                        <div class="menu ">
                            <div class="item"><a href="/me">Profil</a></div>
                            <div class="item"><a href="/setting">Pengaturan</a></div>
                            <?php if($this->session->userdata('role')==0){ ?><div class="item"><a href="/admin">Administrator</a></div><?php } ?>
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
        <?php if(isset($upload_success)){ ?>
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">
                Upload Success
            </div>
        </div>
        <?php } ?>
        <?php if(isset($upload_error)){ ?>
        <div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
                Upload Error
            </div>
            <p><?php echo $upload_error ?></p>
        </div>
        <?php } ?>
        <div class="ui grid">
            <div class="four wide column">
                <!--<div class="ui segment">-->
                <h3 class="ui header">Profil</h3>
                    <div class="ui fluid one cards special">
                        <div class="card fluid">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Add Friend</div>
                                        </div>
                                    </div>
                                </div>
                                <img id="photoprofil" src="/public/images/avatar/<?php echo is_null($user['AVATAR'])?'Default.png':$user['AVATAR'] ?>" style="cursor:pointer">
                                <div id="updatephoto" class="ui attached button" tabindex="0">Ubah Foto Profil</div>
                                <form method="post" enctype="multipart/form-data" action="/upload-photo">
                                <input id="pp_file" type="file" name="photo-profil" style="display:none;" onchange="this.form.submit()">
                                </form>
                            </div>
                            <div class="content">
                                <a class="header"><?php echo $user['NAMA_LENGKAP'] ?></a>
                                <div class="meta">
                                    <span class="date"><?php echo $user['USERNAME'] ?></span>
                                </div>
                            </div>
                            <div class="extra content">
                                <a href="/me/artikel">
                                    <i class="write icon"></i>Artikel <b class="ui right floated"><?php echo isset($num['article'])?$num['article']:'0' ?></b>
                                </a>
                            </div>
                            <div class="extra content">
                                <a href="/me/like">
                                    <i class="like icon"></i>Menyukai <b  class="ui right floated"><?php echo isset($num['like'])?$num['like']:'0' ?></b>
                                </a>
                            </div>
                            <div class="extra content">
                                <a href="/me/komentar">
                                    <i class="comment icon"></i>Komentar <b class="ui right floated"><?php echo isset($num['comment'])?$num['comment']:'0' ?></b>
                                </a>
                            </div>
                            <div class="ui divider"></div>
                            <a class="ui button" href="/new-article">
                                <i class="pencil icon"></i>
                                Tulis Artikel
                            </a>
                            <a class="ui button" href="/setting">
                                <i class="setting icon"></i>
                                Pengaturan
                            </a>
                            <a class="ui button" href="/report">
                                <i class="warning sign icon"></i>
                                Laporkan
                            </a>
                        </div>
                    </div>
                <!--</div>-->
            </div>
            <div class="twelve wide column">
                <h3 class="ui header">Pengaturan</h3>
                <div class="row" style="margin-bottom: 20px">
                    <div class="ui segment">
                        <div class="ui feed timeline">
                            <div class="event">
                                <div class="ui form" style="width:100%">
                                <form method="post" action="/me/update_profil">
                                    <div class="field">
                                        <label>Username</label>
                                        <input type="text" placeholder="Username" name="username" disabled value="<?php echo $this->session->userdata('username') ?>">
                                    </div>
                                    <div class="field">
                                        <label>Nama Lengkap</label>
                                        <input type="text" placeholder="Nama Lengkap" name="fullname" value="<?php echo $user['NAMA_LENGKAP']?>">
                                    </div>
                                    <div class="field">
                                        <label>Biodata</label>
                                        <textarea class="trumbowygeditor" name="biodata"><?php echo $user['BIODATA']==null?'':$user['BIODATA']->load()?></textarea>
                                    </div>
                                    <div class="field">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $user['EMAIL']?>">
                                    </div>
                                    <div class="field">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="ui fluid dropdown" required>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="1" <?php echo $user['JENIS_KELAMIN']==1?'selected':'' ?>>Laki-laki</option>
                                            <option value="2" <?php echo $user['JENIS_KELAMIN']==2?'selected':'' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="ui submit button">Submit</button>
                                </form>
                                </div>
                                
                            </div>
                        </div>
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
            $('#photoprofil').click(function(){
                $("input[id='pp_file']").click();
            });
            $('#updatephoto').click(function(){
                $("input[id='pp_file']").click();
            });
        });
    </script>
<?php include ("templates/public/footer.php"); ?>
</body>
</html>
