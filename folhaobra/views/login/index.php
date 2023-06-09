<div class="login-box">
    <div class="login-logo">

    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="index.php?c=login&a=checklogin" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <a href="index.php?c=user&a=create"><p>Registe-se</p>
                </div>
            </form>
    </div>
</div>
