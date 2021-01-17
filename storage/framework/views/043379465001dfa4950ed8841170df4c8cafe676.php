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
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" href="/user" aria-selected="true">Quản lý user</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="/class" >Quản lý lớp học</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="/point" >Quản lý điểm</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Giới tính</th>
                <th>Quê quán</th>
                <th>Quyền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $list_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($users->id); ?></td>
                        <td><?php echo e($users->fullName); ?></td>
                        <td><img src="<?php echo e($users->avatar); ?>" alt="" width="50px"></td>
                        <td><?php echo e($users->email); ?></td>
                        <td><?php echo e(date('d/m/Y',$users->birthday)); ?></td>
                        <td><?php echo e($users->gender === 1 ? 'Nam':'Nữ'); ?></td>
                        <td><?php echo e($users->country); ?></td>
                        <td><?php echo e($users->role); ?></td>
                        <?php if($users->status === 1): ?>
                            <td style="color: green">ACTIVE</td>
                        <?php else: ?>
                            <td style="color: red">INACTIVE</td>
                        <?php endif; ?>
                        <td><?php echo e($users->created_at); ?></td>
                        <td><a href=""><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>

</body>
</html>
<?php /**PATH /home/hikaru/learn-php/myproject/resources/views/test.blade.php ENDPATH**/ ?>