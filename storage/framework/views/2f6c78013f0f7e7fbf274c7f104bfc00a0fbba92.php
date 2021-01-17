<?php $__env->startSection('content'); ?>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Ngày sinh</th>
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
                        <td>
                            <a style="" href="<?php echo e($users->facebook); ?>" target="_blank">
                                <span class="d-inline-block text-truncate" style="max-width: 150px"><?php echo e($users->facebook); ?></span></a>
                        </td>
                        <td><?php echo e(date('d/m/Y',$users->birthday)); ?></td>
                        <td><?php echo e($users->gender === 1 ? 'Nam':'Nữ'); ?></td>
                        <td><?php echo e($users->country); ?></td>
                        <td><?php echo e(getRoleUser($users->role)); ?></td>
                        <td class="status-<?php echo e($users->status); ?>"><?php echo e(getStatus($users->status)); ?></td>
                        <td><?php echo e($users->created_at); ?></td>
                        <td><a href=""><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hikaru/learn-php/myproject/resources/views/listUser.blade.php ENDPATH**/ ?>