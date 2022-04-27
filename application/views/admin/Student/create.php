<div class="admin">
    <h1 class="title">Create Student</h1>

    <form class="form" action="<?php echo base_url() . 'admin/home/student/create' ?>" method="post">
        <div class="form-control">
            <label for=" name">Full Name: </label>
            <input class="input" type="text" name="name" id="">
        </div>
        <div class="form-control">
            <label for="course">Course: </label>
            <input class="input" type="text" name="course" id="">
        </div>
        <div class="form-control">
            <label for="major">Major: </label>
            <input class="input" type="text" name="major" id="">
        </div>
        <div class="form-control">
            <label for="phone">Phone: </label>
            <input class="input" type="text" name="phone" id="">
        </div>

        <input class="btn" type="submit" value="Submit">
    </form>
</div>