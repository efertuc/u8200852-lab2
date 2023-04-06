<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customers data</title>
</head>

<body>
    <div class="container mt-5">
        <div>
            <p>
                Filters
            </p>
            <form action="/customers" method="get">
                <label>Blocked?</label>
                <input type="checkbox" name="blocked" />
                <label>Email part</label>
                <input type="text" name="email" />
                <label>Phone</label>
                <input type="text" name="phone" />
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Blocked?</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($customer->id); ?></td>
                    <td><?php echo e($customer->name); ?></td>
                    <td><?php echo e($customer->surname); ?></td>
                    <td><?php echo e($customer->blocked); ?></td>
                    <td><?php echo e($customer->phone); ?></td>
                    <td><?php echo e($customer->email); ?></td>
                    <td><?php echo e($customer->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($customers->links()); ?>

        </div>
    </div>
</body>

</html><?php /**PATH /home/miet/apps/u8200852-lab2/resources/views/customers.blade.php ENDPATH**/ ?>