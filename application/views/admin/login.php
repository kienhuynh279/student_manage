<div class="login">
    <h1>Login</h1>
    <form class="login-form" action="<?php base_url() ?>admin/home/login" method="post">
        <div class="form-control">
            <label class="label" for="email">Email:</label>
            <input class="input" type="email" name="email" id="" placeholder="Enter E-mail">
        </div>

        <div class="form-control">
            <label class="label" for="email">Password:</label>
            <input class="input" type="password" name="password" id="" placeholder="Enter Password">
        </div>

        <input type="submit" value="Login">
    </form>
</div>