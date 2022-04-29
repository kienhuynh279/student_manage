<div class="modal-dialog">
    <form method="post" id="create-student-form">
        <h1 class="modal-title title">Add User</h1>

        <div class="modal-body">
            <div class="form-control">
                <label for="name">Full Name: </label>
                <input class="input" type="text" name="name" id="">
                <span id="name_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="course">Course: </label>
                <input class="input" type="text" name="course" id="">
                <span id="course_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="major">Major: </label>
                <input class="input" type="text" name="major" id="">
                <span id="major_error" class="text-danger"></span>
            </div>
            <div class="form-control">
                <label for="phone">Phone: </label>
                <input class="input" type="text" name="phone" id="">
                <span id="phone_error" class="text-danger"></span>
            </div>
        </div>
        <div class="footer-form">
            <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
            <a type="button" href="<?php echo base_url() . 'api/student_test_api' ?>" class="btn btn-cancel"
                data-dismiss="modal">Close</a>
        </div>
    </form>
</div>