<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title title">Add User</h4>
                </div>
                <div class="modal-body">
                    <div class="form-control">
                        <label for=" name">Full Name: </label>
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
                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="data_action" id="data_action" value="Insert" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- <h1>action=" echo base_ur . 'admin/home/student/create' ?>"</h1> -->