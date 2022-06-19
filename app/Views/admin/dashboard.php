<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-dark.min.css'); ?>"">
    
 
    <title>Dashboard</title>
        <style>
            .container {
                max-width: 750px
            }
        </style>
</head>

<body>
    <nav class=" navbar ">
    <div class=" container-fluid">
    <div class="navbar-header">
        <a class="nav-link" href="<?= base_url('/')?>" target="_blank">Home</a>
        <a class="nav-link" href="<?= base_url('/login/logout')?>">Logout</a>
    </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <?= $msg ?? "" ?>
            <div class="col-sm-9">
                <form action="<?php echo base_url('FileUpload/upload');?>" name="ajax_form" id="ajax_form" method="post"
                    accept-charset="utf-8" enctype="multipart/form-data">

                    <div class="form-group">
                        <img src="<?= base_url('public/uploads/').'/' .$row[0]->name;?>"
                            style="width:200px;height:25%;">
                        <label for="formGroupExampleInput">Image 1 (Idle)</label>
                        <input type="file" name="img1" class="form-control" id="file"
                            accept="image/png, image/jpeg, image/jpg, image/svg" value="<?= $row[0]->name; ?>" />
                    </div>

                    <div class="form-group">
                        <img src="<?= base_url('public/uploads/').'/' .$row[1]->name;?>"
                            style="width:200px;height:25%px;">
                        <label for="formGroupExampleInput">Image 2 (Clicked)</label>
                        <input type="file" name="img2" class="form-control" id="file"
                            accept="image/png, image/jpeg, image/jpg, image/svg" value="<?= $row[1]->name; ?>" />
                    </div>

                    <div class="form-group">
                        <audio controls>
                            <source src="<?= base_url('public/uploads/').'/' .$row[2]->name;?>" type="audio/mpeg">
                        </audio>
                        <label for="formGroupExampleInput">SFX</label>
                        <small> ~55ms for gapless loop</small>
                        <input type="file" name="sfx" class="form-control" id="file" accept="audio/*"
                            value="<?= $row[2]->name; ?>" />
                    </div>

                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                    </div>
            </div>
            </form>
        </div>

    </div>
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    </body>

</html>