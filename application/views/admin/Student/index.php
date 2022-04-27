<div class="admin">
    <h1 class="title">Admin Student</h1>
    <a class="btn" href="student/index-create">Create Student</a>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Major</th>
                <th>Course</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $item => $student) : ?>
            <tr>
                <td data-column="First Name"><?php echo $student['name'] ?></td>
                <td data-column="Last Name"><?php echo $student['major'] ?></td>
                <td data-column="Job Title"><?php echo $student['course'] ?></td>
                <td data-column="Job Title"><?php echo $student['phone'] ?></td>
                <td data-column="Twitter">
                    <a class="btn-table"
                        href="<?php echo base_url() . 'admin/student/edit/' . $student['id'] ?>">Edit</a>
                    <a class="btn-table"
                        href="<?php echo base_url() . 'admin/student/delete/' . $student['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>