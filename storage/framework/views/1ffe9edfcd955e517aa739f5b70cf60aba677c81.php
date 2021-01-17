<?php $__env->startSection('content'); ?>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Tên lớp học</th>
                <th>Avatar</th>
                <th>Tên môn học</th>
                <th>Người tạo</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>

                <?php $__currentLoopData = $list_class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($class->id); ?></td>
                        <td><?php echo e($class->name); ?></td>
                        <td><img src="<?php echo e($class->avatar); ?>" alt="" width="50px"></td>
                        <td><?php echo e($class->subjectName); ?></td>
                        <td><?php echo e($class->nameCreator); ?></td>
                        <td class="status-<?php echo e($class->status); ?>"><?php echo e(getStatus($class->status)); ?></td>
                        <td><?php echo e($class->created_at); ?></td>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hikaru/learn-php/myproject/resources/views/listClass.blade.php ENDPATH**/ ?>