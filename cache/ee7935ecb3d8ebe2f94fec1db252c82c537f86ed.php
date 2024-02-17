<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <label for="name">Category Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="parent_category_id">Type of product:</label><br>
        <select name="parent_category_id" id="parent_category_id">
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type['category_id']); ?>"><?php echo e($type['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\E-CommerceBladeViews\views/viewInsertCategory.blade.php ENDPATH**/ ?>