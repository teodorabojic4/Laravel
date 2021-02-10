<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Namestaj</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Namestaj</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="namestaj">Namestaj</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="row ml-2">
        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Tip</th>
                        <th>Kreiran</th>
                        <th>Izmena</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $namestaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namestaj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td><?php echo e($namestaj->id); ?></td>
                        <td><?php echo e($namestaj->naziv); ?></td>
                        <td><?php echo e($namestaj->tip->naziv); ?></td>
                        <td><?php echo e($namestaj->created_at); ?></td>
                        <td><a href="/namestaj/<?php echo e($namestaj->id); ?>">Izmena</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="col-3 mt-2">
            <form action="/namestaj" method="POST">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <label>Naziv</label>
                <input type="text" class="form-control" name="naziv">
                <label>Tip</label>
                <select class="form-control" name="tip_id">
                    <?php $__currentLoopData = $tipovi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tip->id); ?>"><?php echo e($tip->naziv); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <button class="form-control btn btn-dark" type="submit">Sacuvaj</button>
            </form>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\Lazar Milosavljević\Desktop\domaci\laravel domaci\namestaj\resources\views/namestaj.blade.php ENDPATH**/ ?>