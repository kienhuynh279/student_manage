<div id="studentModal" class="admin">
    <h1 class="title modal-title">Create Student</h1>

    <form class="form" id="student_form" method="post">
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

        <div class="modal-footer">
            <input type="hidden" name="id" id="id" />
            <input type="hidden" name="data_action" id="data_action" value="Insert" />
            <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>

<!-- <h1>action=" echo base_ur . 'admin/home/student/create' ?>"</h1> -->