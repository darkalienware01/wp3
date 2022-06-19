<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-dark.min.css');?>">


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
        <a class="nav-link" href="<?=base_url('/')?>" target="_blank">Home</a>
        <a class="nav-link" href="<?=base_url('/login/logout')?>">Logout</a>
    </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <img id="target" src="<?=base_url('/public/uploads/') . '/' . $row[0]->name;?>" type="button" />

        </div>
    </div>
    <script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
    <script>

            const im = $("#target");
            const img1 = "<?=base_url('/public/uploads/') . '/' . $row[0]->name;?>";
            const img2 = "<?=base_url('/public/uploads/') . '/' . $row[1]->name;?>";
            const sfx = new Audio("<?=base_url('/public/uploads/') . '/' . $row[2]->name;?>");
            function f1() {
                im.attr('src',img2);
              sfx.play();
          }
            function f2() {
            im.attr('src',img1);
          }
            im.mousedown(function() {
                f1();});
            im.mouseup(function() {
                f2();});
            im.addEventListener("touchstart", function(e) {
              e.preventDefault();
                 f2();
             });
            im.addEventListener("touchend", function(e) {
            e.preventDefault();
             f1();
            });


    </script>