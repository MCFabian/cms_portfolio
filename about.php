<!doctype html>
<head>
    <title>Über mich</title>
</head>
<?php include ('pages/head.php'); ?>
<?php cookie(1); ?> 
        <div id="page-content">
            <div class="grid">
                <div class="blocker">
                    <?php getaboutcontent(); ?>
                    <ul class="comments flex row">
                        <?php comments(); ?>
                    </ul>
                    
                </div>
            </div> 

            <?php include ('pages/footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->




</body>
</html>
