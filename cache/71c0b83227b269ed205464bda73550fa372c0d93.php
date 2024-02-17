<?php $__env->startSection('title', $titulo); ?>

<?php $__env->startSection('content'); ?>
    <form action="process_category_form.php" method="post">
        <label for="name">Type Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <input type="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\E-CommerceBladeViews\views/viewInsertType.blade.php ENDPATH**/ ?>