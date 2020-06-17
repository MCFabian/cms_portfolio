<!doctype html>
<head>
    <title>Testing</title>
</head>
<?php include ('pages/head.php'); ?>
<?php cookie(1); ?> 
        <div id="page-content">
            <div class="grid">
                <div class="blocker ">
                    
                <div class="flex row">
                    <div class="col-6 copy--large grey">
                            <strong class="darkgrey">Kontakt</strong><br>
                            <?php getconntactinformation(); ?>
                    </div>
                    <div class="col-4 ">
                        <ul class="side-navi">
                            <li>Test</li>
                            <li class="active">hallo</li>
                        </ul>
                    </div>
                </div>
                    
                </div>
            </div> 

            <?php include ('pages/footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->




</body>
</html>
