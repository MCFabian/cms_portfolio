<!doctype html>
<?php include ('pages/head.php'); ?>
<?php cookie(1); ?> 
        <div id="page-content">
        <div class="grid-block nobg">
            <?php
            if(isset($_GET["id"]))
                viewernew($_GET["id"]);
            else
                echo "";
            ?>

            

        </div>
        <?php include ('pages/footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->

</body>
</html>
