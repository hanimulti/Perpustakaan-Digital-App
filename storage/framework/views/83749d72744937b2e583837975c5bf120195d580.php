<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <h2>Data Author</h2>
    <br>

    <?php if(session('status')): ?>
        <h4><?php echo e(session('status')); ?></h4>
    <?php endif; ?>

    <br>
    <form name="book-save-form" id="book-save-form" action="<?php echo e(url('/authors/save-authors')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Author ID</td>
                <td>:</td>
                <td><input type="text" name="author_id" id="author-id" readonly></td>
            </tr>
            <tr>
                <td>Author Name</td>
                <td>:</td>
                <td><input type="text" name="author_name" id="author-name"></td>

            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <table>
        <tr>
            <th>No.</th>
            <th>Author ID</th>
            <th>Author Name</th>
            <th colspan="2">Action</th>
        </tr>
        <?php ($num = 1); ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="row-data">
            <td><?php echo e($num++); ?></td>
            <td><?php echo e($b['author_id']); ?></td>
            <td><?php echo e($b['author_name']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\Submission 3\perpustakaan-digital-app-master\resources\views/authors/index.blade.php ENDPATH**/ ?>