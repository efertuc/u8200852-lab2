<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer <?php echo e($customer_u->id); ?></title>
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-4">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Blocked?</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($customer_u->id); ?></td>
                    <td><?php echo e($customer_u->name); ?></td>
                    <td><?php echo e($customer_u->surname); ?></td>
                    <td><?php echo e($customer_u->blocked); ?></td>
                    <td><?php echo e($customer_u->phone); ?></td>
                    <td><?php echo e($customer_u->email); ?></td>
                    <td><?php echo e($customer_u->created_at); ?></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>House</th>
                    <th>Floor</th>
                    <th>Flat</th>
                    <th>Code</th>
                    <th>Added at</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customer_u->addressu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($address->id); ?></td>
                    <td><?php echo e($address->name_usr); ?></td>
                    <td><?php echo e($address->city); ?></td>
                    <td><?php echo e($address->street); ?></td>
                    <td><?php echo e($address->house); ?></td>
                    <td><?php echo e($address->floor); ?></td>
                    <td><?php echo e($address->flat); ?></td>
                    <td><?php echo e($address->intercom_code); ?></td>
                    <td><?php echo e($address->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
    </div>
</body>

</html><?php /**PATH /home/miet/apps/u8200852-lab2/resources/views/customer.blade.php ENDPATH**/ ?>