<div class="ui middle aligned center aligned grid">
    <div class="column">
        <div class="ui">
            <!--        <img src="--><?php //echo base_url('assets/images/logo.png');?><!--" class="ui medium rounded image centered">-->
        </div>

        <h2 class="ui teal">
            <div class="content">
                Daftar Hompimpa Challenge
            </div>
        </h2>

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
                        <input type="text" name="username" placeholder="Username" required value="<?php echo set_value('username');?>">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="at icon"></i>
                        <input type="text" name="email" placeholder="E-mail" required value="<?php echo set_value('email');?>">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button class="ui fluid large blue submit button" type="submit">Daftar</button>

            </div>



        </form>

        <div class="ui message">
            Sudah punya akun? <a href="<?php echo base_url('auth/login');?>">Masuk</a>
        </div>
    </div>
</div>