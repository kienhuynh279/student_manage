<div class="modal-dialog">
    <form action="<?php base_url() ?>admin/home/login" method="post">
        <h1 class="modal-title title">Login</h1>
        <div class="modal-body">
            <div class="form-control">
                <label for="email">Email:</label>
                <input class="input" type="email" name="email" id="" placeholder="Enter E-mail">
                <span id="name_error" class="text-danger"></span>
            </div>

            <div class="form-control">
                <label class="label" for="email">Password:</label>
                <input class="input" type="password" name="password" id="" placeholder="Enter Password">
                <span id="name_error" class="text-danger"></span>
            </div>
        </div>

        <input class="btn" type="submit" value="Login">
    </form>
</div>