<!doctype html>
<?php include ('head.php'); ?>

        <div id="page-content">
        <div class="grid-block">
            <?php
            if(isset($_GET["id"]))
                viewer($_GET["id"]);
            else
                echo "Produkt nicht gefunden!"
            ?>
        </div>
            <?php include ('footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->

</body>
</html>
