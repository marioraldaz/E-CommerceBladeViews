<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post">

        <label for="name">Product Name:</label><br>
        <input type="text" value="<?php echo e($product['name']); ?>" id="name" name="name"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo e($product['description']); ?></textarea><br>

        <label for="price">Price:</label><br>
        <input type="number" value="<?php echo e($product['price']); ?>" id="price" name="price"><br>

        <label for="category_id">Category</label><br>
        <select id="category_id" name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>" <?php echo e($id == $product['category_id'] ? 'selected' : ''); ?>>
                    <?php echo e($name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        <input type="hidden" name="product_id" value="<?php echo e($product['product_id']); ?>" />
        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\E-CommerceBladeViews\views/viewModifyProduct.blade.php ENDPATH**/ ?>