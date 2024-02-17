<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post">
        <table>

            <tr>
                <?php $__currentLoopData = $products[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($key); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product['product_id']); ?></td>
                    <td>
                        <option value="<?php echo e($product['product_id']); ?>"><?php echo e($product['name']); ?></option>
                    </td>
                    <td><?php echo e($product['description']); ?></td>
                    <td><?php echo e($product['price']); ?></td>
                    <td><?php echo e($categories["$product[category_id]"]); ?></td>
                    <td>No Image</td>
                    <td><?php echo e($product['created_at']); ?></td>
                    <td><a href="./modifyProduct">Modify Product</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mio\E-CommerceBladeViews\views/viewProducts.blade.php ENDPATH**/ ?>