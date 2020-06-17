<!doctype html>
<?php include ('head.php'); ?>
<?php cookie(); ?> 
        <div id="page-content">
        <div class="grid-block nobg">
            <?php
            if(isset($_GET["id"]))
                viewernew($_GET["id"]);
            else
                echo "";
            ?>

            

        </div>
            <?php include ('footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->

</body>
</html>
