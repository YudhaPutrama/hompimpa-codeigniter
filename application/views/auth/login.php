<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal">
            <div class="content">
                Masuk ke Hompimpa
            </div>
        </h2>
        <?php if (isset($message)){ ?>
            <div class="ui info message">
                <!--            <i class="close icon"></i>-->
                <div class="header">
                    <?php echo $message; ?>
                </div>
                <!--            <p>That offer has expired</p>-->
            </div>
        <?php } else ?>
        <?php if (isset($error)){ ?>
        <div class="ui negative message">
<!--            <i class="close icon"></i>-->
            <div class="header">
                <?php echo $error; ?>
            </div>
<!--            <p>That offer has expired</p>-->
        </div>
        <?php } ?>
        <form class="ui large form" method="post">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button class="ui fluid large teal submit button" type="submit"><i class="sign in icon"></i>Masuk</button>
<!--                <a class="ui fluid large blue button"><i class="facebook icon"></i>Masuk dengan Facebook</a>-->
<!--                <button class="ui fluid large blue button" type="submit">Login with Twitter</button>-->
            </div>
        </form>

        <div class="ui message">
            Belum punya akun? <a href="<?php echo base_url('auth/register');?>">Daftar</a>
        </div>
    </div>
</div>