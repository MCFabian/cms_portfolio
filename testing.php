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
                            <?php 
                                echo $_SERVER['PHP_SELF'];
                                echo "<br>";
                                echo $_SERVER['SERVER_NAME'];
                                echo "<br>";
                                echo $_SERVER['HTTP_HOST'];
                                echo "<br>";


                            ?>
                            <strong class="darkgrey">Kontakt</strong>
                            <br>
                            <div class="modal">
                                <span class="modal-close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                            <div class="intro-container">                            <div class="border-button">Border Button</div>
                            <div class="btn">BTN</div>
                            <div class="btn-primary">p</div>
                            <div class="btn-secondary">s</div>
                            <div class="btn-light">btn light</div>
                            <button class="button">
                                button
                            </button></div>

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

    <script>
    // Get the modal
    var modal = document.getElementsByClassName("modal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByClassName("modalopener");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("modal-close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
    modal.style.display = "none";
    }
    </script>


</body>
</html>
