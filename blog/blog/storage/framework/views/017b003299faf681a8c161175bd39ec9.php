<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>

        
    </head>
    <body>
    Postagens:<br>
    <strong>id:</strong> <?php echo e($postagem->id); ?> <br>
    <strong>Titulo:</strong> <?php echo e($postagem->titulo); ?> <br>
    <strong>Conteudo:</strong> <?php echo e($postagem->conteudo); ?> <br>
    <br>
    Comentários:<br>

    <?php $__currentLoopData = $postagem->comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($value->conteudo); ?><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\blog\blog\resources\views/postagem/show.blade.php ENDPATH**/ ?>