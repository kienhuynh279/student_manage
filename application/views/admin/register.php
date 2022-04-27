<div class="login">
    <h1>Login</h1>
    <form class="login-form" action="<?php echo base_url() . 'admin/register/validation' ?>" method=" post">
        <div class="form-control">
            <label class="label" for="first_name">First name</label>
            <input class="input" type="text" name="first_name" id="" placeholder="Enter First Name">
        </div>

        <div class="form-control">
            <label class="label" for="last_name">Last name</label>
            <input class="input" type="text" name="last_name" id="" placeholder="Enter Last Name">
        </div>

        <div class="form-control">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" name="email" id="" placeholder="Enter E-mail">
        </div>

        <div class="form-control">
            <label class="label" for="email">Password</label>
            <input class="input" type="password" name="password" id="" placeholder="Enter Password">
        </div>

        <input type="submit" value="Login">
    </form>
</div>