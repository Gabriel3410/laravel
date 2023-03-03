<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>

        Postagens:<br>
    </head>
    <body>
        <a href="<?php echo e(url('postagem/create')); ?>">CRIAR</a>
        
        <table>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Visualizar</th>
            </tr>
            <?php $__currentLoopData = $postagens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($value->id); ?></td>
                <td><?php echo e($value->titulo); ?></td>
                <td><a href="<?php echo e(url('postagem/' . $value->id)); ?>">Visualizar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\blog\blog\resources\views/postagem/index.blade.php ENDPATH**/ ?>