<div class="modal-dialog">
    <form method="post" id="create-student-form"
        action=" <?php echo base_url() . 'api/student_api/update/' . $student['id'] ?>">
        <h1 class="modal-title title">Update Student</h1>

        <div class="modal-body">
            <div class="form-control">
                <label for=" name">Full Name: </label>
                <input value="<?php echo set_value('name', $student['name']); ?>" class="input" type="text" name="name"
                    id="">
                <span id="name_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="course">Course: </label>
                <input value="<?php echo set_value('course', $student['course']); ?>" class="input" type="text"
                    name="course" id="">
                <span id="course_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="major">Major: </label>
                <input value="<?php echo set_value('major', $student['major']); ?>" class="input" type="text"
                    name="major" id="">
                <span id="major_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="phone">Phone: </label>
                <input value="<?php echo set_value('phone', $student['phone']); ?>" class="input" type="text"
                    name="phone" id="">
                <span id="phone_error" class="text-danger"></span>
            </div>
        </div>
        <div class="footer-form">
            <input type="submit" name="action" id="action" class="btn" value="Update" />
            <a type="button" href="<?php echo base_url() . 'api/student_test_api' ?>" class="btn btn-cancel"
                data-dismiss="modal">Close</a>
        </div>
    </form>
</div>