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
                        </div>
                    </div>
                <!--</div>-->
            </div>
            <div class="eight wide column">
                <h3 class="ui header">Status</h3>
                <div class="row" style="margin-bottom: 20px">
                    <div class="ui segment">
                        <div class="ui feed timeline">
                            <div class="event">
                                <div class="ui form" style="width:100%">
                                <form method="post">
                                    <div class="field">
                                        <!--<label>Berita</label>-->
                                        <textarea rows="3" name='berita'></textarea>
                                    </div>
                                    <button type="submit" class="ui submit button">Submit</button>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ui segment">
                        <h5 class="ui dividing header">
                            Terbaru
                        </h5>
                        <div class="ui feed timeline">
                            <?php
                            // Like article and comment article
                            //var_dump($news);
                            foreach ($news as $item){
                                
                            ?>
                            <div class="event">
                                <div class="label">
                                    <img src="/public/images/avatar/<?php echo is_null($item['AVATAR'])?'Default.png':$item['AVATAR'] ?>" alt="label-image" />
                                </div>
                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            <?php echo is_null($item['NAMA_LENGKAP'])?$item['USERNAME']:$item['NAMA_LENGKAP'] ?>
                                        </a>
                                        <div class="date">
                                            <?php 
                                            //var_dump($item['CREATED_AT']);
                                            //$date = new DateTime("j-M-Y h.i.s.u A", $item['CREATED_AT']);  
                                            $timezone = new DateTimeZone('Asia/Jakarta');
                                            $date = DateTime::createFromFormat("j-M-y h.i.s.u A",$item['CREATED_AT']);
                                            $date = $date->setTimeZone($timezone);
                                            $converteddate = $date->format('M d,Y G:i');
                                            echo $converteddate;
                                            ?>
                                        </div>
                                        <p>
                                        <?php echo $item['BERITA'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="four wide column">
                <h3 class="ui header">Permintaan Pertemanan</h3>
                <div class="ui cards">
                <?php if(isset($friendreq)) {foreach($friendreq as $req){ ?>
                    <div class="card">
                        <div class="content">
                        <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
                        <div class="header">
                            Elliot Fu
                        </div>
                        <div class="meta">
                            Friends of Veronika
                        </div>
                        <div class="description">
                            Elliot requested permission to view your contact details
                        </div>
                        </div>
                        <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic green button">Approve</div>
                            <div class="ui basic red button">Decline</div>
                        </div>
                        </div>
                    </div>
                <?php }
                    if(count($friendreq<1)) echo "<h4>Tidak Ada</h4>";
                } else {echo "<h5 class='ui header'>Tidak Ada</h5>";} ?>
                </div>
                <h3 class="ui header">Permintaan Permainan</h3>
                <div class="ui cards">
                <?php if(isset($friendreq)){foreach($playreq as $req){ ?>
                    <div class="card">
                        <div class="content">
                        <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
                        <div class="header">
                            Petak Umpet
                        </div>
                        <div class="meta">
                            Zahra
                        </div>
                        <div class="description">
                            Zahra mengajak anda bermain Petak Umpet
                        </div>
                        </div>
                        <div class="extra content">
                        <div class="ui basic fluid red button">Mainkan</div>
                        </div>
                    </div>
                <?php }} else {echo "<h4>Tidak Ada</h4>";} ?>
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
