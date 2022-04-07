
     
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Absensi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('users.create')); ?>"> Create</a>
            </div>
        </div>
    </div>
    
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
    <?php
        $number = 1;
    ?>
    //di foreach dari $users['data'] karna biasanya response dari API itu di bungkus dalam index 'data'
        <?php $__empty_1 = true; $__currentLoopData = $users['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
        <td><?php echo e($number++); ?></td>
        <td><?php echo e($user['firstname']); ?></td>
        <td><?php echo e($user['lastname']); ?></td>
        <td align="center">
            <a href="<?php echo e('users/'.$user['id']); ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
            <a href="<?php echo e('users/'.$user['id']); ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
        <?php endif; ?>
    </table>
    
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Fake_API\resources\views/users/index.blade.php ENDPATH**/ ?>