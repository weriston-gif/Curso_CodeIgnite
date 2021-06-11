
<!-- Core theme JS-->
<?php if(isset($scripts)){
            foreach ($scripts as $valor_s){
                $shef = base_url(). "Public/js/".$valor_s ?>
                <script src="<?=$shef ?>"></script>

            <?php }
            }?>
    <script src="<?= base_url() ?>js/scripts.js"></script>
</body>

</html>