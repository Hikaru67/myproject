<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
    <style>
        .content, .nav{
            margin: auto;
            max-width: 1250px;
        }
        .status-1{
            color: green;
        }
        .status-2{
            color: red;
        }
    </style>
</head>
<body>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link <?php echo e(checkActiceMenu('/user')); ?>" href="/user" aria-selected="true">Quản lý user</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link <?php echo e(checkActiceMenu('/class')); ?>" href="/class" >Quản lý lớp học</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link <?php echo e(checkActiceMenu('/subject')); ?>" href="/subject" >Quản lý môn học</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link <?php echo e(checkActiceMenu('/point')); ?>" href="/point" >Quản lý điểm</a>
        </li>
    </ul>
    <?php echo $__env->yieldContent('content'); ?>


</body>
</html>
<?php /**PATH /home/hikaru/learn-php/myproject/resources/views/layout.blade.php ENDPATH**/ ?>