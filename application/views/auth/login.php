<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal">
            <div class="content">
                Log-in to your account
            </div>
        </h2>

        <div class="ui negative message">
            <i class="close icon"></i>
            <div class="header">
                We're sorry we can't apply that discount
            </div>
<!--            <p>That offer has expired</p>-->
        </div>
        <form class="ui large form" method="post">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail address">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <button class="ui fluid large teal submit button" type="submit">Login</button>
                <button class="ui fluid large blue button" type="submit">Login with Facebook</button>
                <button class="ui fluid large blue button" type="submit">Login with Twitter</button>
            </div>
        </form>

        <div class="ui message">
            New to us? <a href="<?php echo base_url('auth/register');?>">Sign Up</a>
        </div>
    </div>
</div>