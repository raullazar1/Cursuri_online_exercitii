<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/css/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/css/bootstrap.min.css"></script>

</head>

<body>

    <div class="container">

        <div class="col-xs-3">



            <?php $this->load->view('users/login_view'); ?>

        </div>
        <div class="col-xs-9">


            <?php $this->load->view($main_view); ?>

        </div>




    </div>



</body>

</html>
