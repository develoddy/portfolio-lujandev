<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /home/lujandev/portfolio-lujandev/vendor/filament/infolists/resources/views/components/grid.blade.php ENDPATH**/ ?>