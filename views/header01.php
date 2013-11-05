<!-- Header for Before Signin with Signup Button -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= $GLOBALS['sr_root'] ?>/d/main/">Sunrise</a>
        <div class="nav-collapse collapse pull-right">
            <form class="navbar-form form-inline" action="<?= $GLOBALS['sr_root'] ?>/d/main/signin/" id="signin_form" name="signin_form" method="post">
                <input type="text" class="form-control" id="signin_email" name="signin_email" placeholder="Email">
                <input type="password" class="form-control" id="signin_password" name="signin_password" placeholder="Password">
                <button type="button" class="btn btn-inverse" id="btn_signin" onclick="whenSignin(event)">Sign In</button>
                <button type="button" class="btn btn-inverse" id="btn_signup" onclick="whenClickSignup(event)">Sign Up</button>
            </form>
        </div>
    </div>
</div>