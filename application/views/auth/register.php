<div class="ui middle aligned center aligned grid">
    <div class="column">
        <div class="ui">
            <!--        <img src="--><?php //echo base_url('assets/images/logo.png');?><!--" class="ui medium rounded image centered">-->
        </div>

        <h2 class="ui teal">
            <div class="content">
                Register
            </div>
        </h2>

        <form class="ui large form" method="post">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Register</div>
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            New to us? <a href="<?php echo base_url('auth/login');?>">Sign In</a>
        </div>
    </div>
</div>