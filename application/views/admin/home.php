<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <title>Admin Student</title>
</head>

<body>
    <header>Header</header>
    <?php $this->load->view($template) ?>

    <script type="text/javascript" src="http://localhost/StudentManage/js/ajax.js"></script>

    <!-- <script type="text/javascript" language="javascript">
    $(document).ready(function() {

        function fetch_data() {
            $.ajax({
                url: "<?php echo base_url(); ?>api/test_api/action",
                method: "POST",
                data: {
                    data_action: 'fetch_all'
                },
                success: function(data) {
                    $('tbody').html(data);
                }
            });
        }

        fetch_data();
    });
    </script> -->
</body>

</html>