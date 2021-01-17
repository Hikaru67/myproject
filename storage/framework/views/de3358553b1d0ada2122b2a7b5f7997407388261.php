<?php $__env->startSection('content'); ?>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table content">
                <thead class="table-dark">
                <th>ID</th>
                <th>Tên môn học</th>
                <th>Avatar</th>
                <th>Mô tả</th>
                <th>Người tạo</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
                </thead>
                <tbody>
                
                <?php $__currentLoopData = $list_subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($subject->id); ?></td>
                        <td><?php echo e($subject->name); ?></td>
                        <td><img src="<?php echo e($subject->avatar); ?>" alt="" width="50px"></td>
                        <td><?php echo e($subject->description); ?></td>
                        <td><?php echo e($subject->nameCreator); ?></td>
                        <td class="status-<?php echo e($subject->status); ?>"><?php echo e(getStatus($subject->status)); ?></td>
                        <td><?php echo e($subject->created_at); ?></td>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hikaru/learn-php/myproject/resources/views/listSubject.blade.php ENDPATH**/ ?>