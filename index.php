<!doctype html>

<head>
    <title>Home</title>
</head>

<?php include ('head.php'); ?>
<?php cookie(); ?> 
        <div id="page-content">
        <div class="grid-block nobg">
            <div class="flex row">
                <div class="col-6">
                    <h2 class="left" id="page-title">Hey na</h2>
                    <h1 class="">Du auch hier?</h1>
                    <p class=" copy--large">Wie mit dir am Telefon besprochen, ist das hier eigentlich alles noch in Entwicklung aber es läuft schonmal ganz gut.</p>
                </div>


            </div>
            <div class="blocker">
                


            </div>
        </div>
        <?php include ('footer.php'); ?>
        </div>

    </div>
    <!--< Page Wrapper End>-->


    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
    </script>

</body>
</html>
