<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price"><br>

        <label for="category_id">Category</label><br>
        <select id="category_id" name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category['category_id']); ?>"><?php echo e($category['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\E-CommerceBladeViews\views/viewInsertProduct.blade.php ENDPATH**/ ?>