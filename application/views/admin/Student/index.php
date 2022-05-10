<div class="admin">
    <h1 class="title">Admin Student</h1>
    <a class="btn" href="<?php echo base_url() . 'api/student_view_api/create' ?>">Create Student</a>
    <table>
        <span id="succes_mess"></span>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Major</th>
                <th>Course</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php foreach ($result as $item => $student) : ?>
            <tr>
                <td data-column="Name"><?php echo $student->name ?></td>
                <td data-column="Major"><?php echo $student->major ?></td>
                <td data-column="Course"><?php echo $student->course ?></td>
                <td data-column="Phone"><?php echo $student->phone ?></td>
                <td data-column="Handle">
                    <a onclick="getId()" class="btn-table button-edit"
                        href="<?php echo base_url() . 'api/student_view_api/update/' . $student->id ?>"
                        id="<?php echo $student->id ?>">Edit</a>
                    <a class="btn-table"
                        href="<?php echo base_url() . 'api/student_api/delete/' . $student->id ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>