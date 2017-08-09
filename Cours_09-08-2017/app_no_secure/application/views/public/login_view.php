<div class="row">
   
   <div class="col-sm-8 col-sm-offset-2">
       
        <form class="form-signin" method="post" action="<?= BASE_URL . '/authenticate/login' ?>">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputlogin" class="sr-only">Username</label>
                <input type="text" name="inputlogin" class="form-control" placeholder="Username">
                <label for="inputpwd" class="sr-only">Password</label>
                <input type="password" name="inputpwd" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
   </div>
</div>