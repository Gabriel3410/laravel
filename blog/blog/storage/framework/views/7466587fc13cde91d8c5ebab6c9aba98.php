<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>

    </head>
    <body>
       CRIAR:<br>

       <?php echo Form::open(['url' => 'postagem/create']); ?>

        <?php echo Form::label('titulo', 'Título'); ?><br>
        <?php echo Form::text('titulo'); ?><br>
        <?php echo Form::label('conteudo', 'Conteudo'); ?><br>
        <?php echo Form::text('conteudo'); ?><br>
        <?php echo Form::submit('Enviar'); ?><br>
        <?php echo Form::close(); ?>



    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\blog\blog\resources\views/postagem/create.blade.php ENDPATH**/ ?>