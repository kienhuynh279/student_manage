<div class="admin">
    <h1 class="title">Update Student</h1>

    <form class="form" action=" <?php echo base_url() . 'api/api/update/' . $student['id'] ?>" method="post">
        <div class="form-control">
            <label for=" name">Full Name: </label>
            <input class="input" value="<?php echo set_value('name', $student['name']); ?>" type="text" name="name"
                id="">
        </div>
        <div class="form-control">
            <label for="course">Course: </label>
            <input class="input" value="<?php echo set_value('course', $student['course']); ?>" type="text"
                name="course" id="">
        </div>
        <div class="form-control">
            <label for="major">Major: </label>
            <input class="input" value="<?php echo set_value('major', $student['major']); ?>" type="text" name="major"
                id="">
        </div>
        <div class="form-control">
            <label for="phone">Phone: </label>
            <input class="input" value="<?php echo set_value('phone', $student['phone']); ?>" type="text" name="phone"
                id="">
        </div>

        <input class="btn" type="submit" value="Submit">
    </form>
</div>