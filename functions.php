<?php 
    //Verbindung mit Datenbanksystem herstellen	   
    $servername = "127.0.0.1:3306";
    $username = "Web";
    $password = "W_9bdb23";
    $database = "mainstage"; 
    $connection = new PDO("mysql:host=$servername; dbname=$database; charset=utf8", $username, $password);
    
    function getmenu() {
			global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT title, link, functions FROM cms_sites WHERE active = 1 AND footer = 0;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $name = $row['title'];
                $link = $row['link'];
                $function	= $row['functions'];


                echo "
                <li><a class=\"\" href='$link'>$name</a></li>
                ";
            }

        }; //Ende dope WHILE-Schleife

        function footerold() {
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT title, link, functions FROM cms_sites WHERE active = 1 AND footer = 1;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $title = $row['title'];
                $link = $row['link'];
                $function = $row['functions'];

                echo "
                <li><a onclick='$functions' href='$link'>$title</a></li>
                ";
            }
        }

        function footer() {
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT * FROM cms_footer WHERE active = 1;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $title = $row['name'];
                $link = $row['link'];
                $function = $row['function'];

                echo "
                <li><a onclick='$functions' href='$link'>$title</a></li>
                ";
            }
        }
   


        function getfootercontent() {
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT content FROM cms_content WHERE pagetitle = 6 AND active = 1;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $content = $row['content'];

                echo "
                <p class='content'>$content</p>
                ";
            }
        }

        function getprivacycontent() {
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT content FROM cms_content WHERE pagetitle = 7 AND active = 1;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $content = $row['content'];

                echo "
                <p class='content'>$content</p>
                ";
            }
        }

        function getaboutcontent() {
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT content FROM cms_content WHERE pagetitle = 2 AND active = 1;");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $content = $row['content'];

                echo "
                <div class='copy--large about flex row'>$content</div>
                ";
            }
        }
   

        function products() {
			global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT cms_projects.id AS id, cms_projects.path, cms_projects.cover, cms_projects.cover, cms_projects.headline, cms_projects.subheadline, T_Types.name AS 'type', T_Clients.name AS 'client' FROM cms_projects, T_Clients, T_Types WHERE cms_projects.client = T_Clients.p_client_nr AND cms_projects.type = T_Types.p_type_nr AND cms_projects.active = 1");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $headline = $row['headline'];
                $subheadline		= $row['subheadline'];
                $type		= $row['type'];
                $path		= $row['path'];
                $cover		= $row['cover'];
                $client		= $row['client'];
                $id         = $row['id'];

                echo "
                    <div onclick=\"location.href='project.php?id=$id'\" class='box'>
                        <div class='box-inner'>
                            <div class='text'>    
                                <h3>$headline</h3>
                                <h2>$subheadline</h2>
                                <span>$type</span>
                                <p>Im Auftrag für: $client</p>
                            </div>
                            <div class='arrow'>
                                <i class='icon'>arrow_forward_ios</i>
                            </div>
                        </div>

                        <div class='box-background' style=\"background-image: url('$path$cover');\"></div>

                    </div>
                ";
            }

        }; //Ende der WHILE-Schleife

        function productsnew() {
			global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT cms_projects.id AS id, cms_projects.path, cms_projects.cover, cms_projects.cover, cms_projects.headline, cms_projects.subheadline, T_Types.name AS 'type', T_Clients.name AS 'client' FROM cms_projects, T_Clients, T_Types WHERE cms_projects.client = T_Clients.p_client_nr AND cms_projects.type = T_Types.p_type_nr AND cms_projects.active = 1");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){

                $headline = $row['headline'];
                $subheadline		= $row['subheadline'];
                $type		= $row['type'];
                $path		= $row['path'];
                $cover		= $row['cover'];
                $client		= $row['client'];
                $id         = $row['id'];

                echo "
                        <div title='$headline' onclick=\"location.href='project.php?id=$id'\" class='box--new'>
                            <div class='box-inner-new'>
                                <img src='$path$cover' alt='$headline'>
                            </div>
                            <strong>$headline</strong> <br> <small>$subheadline</small>
                        </div>

                ";
            }

        }; //Ende der WHILE-Schleife


        function cookie() {
            echo "
            <div class=\"cookie-fix col-7 flex row\" id=\"cookie\">
                <i onclick=\"closer()\" class=\"icon closer\">close</i>          
                <p class=\"col-7\"><strong>Hinweis</strong>Diese Seite nutzt übrigens keine Cookies. Feine Sache oder? Daher wird dir der Hinweis auch immer wieder angezeigt. Weitere Informationen über den Umgang mit deinen Daten findest du unter <a href=\"privacy.php\">Datenschutz</a>.</p>
            </div>
        <script>
        function closer() {
            document.getElementById(\"cookie\").style.left = \"-500%\";
        }
        </script>
            ";
        }

        function comments (){
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT cms_comments.headline AS headline, cms_comments.id AS cid, cms_comments.creator AS creator, cms_comments.name AS ctext, cms_comments.link AS link, cms_comments.project AS projectname FROM cms_comments, cms_projects WHERE cms_comments.project = cms_projects.id AND cms_comments.active = 1 ");
            
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $query->fetch()){
        
                $headline = $row['headline'];   
                $creator = $row['creator'];
                $text = $row['ctext'];
                $link = $row['link'];
                $project = $row['projectname'];


            echo " 

                    <li class=\"hint col-5\">
                        <strong>$headline</strong>
                        <strong class=\"subheadline \" >$creator</strong>
                        <p class=\"contenttext nocols grey\">$text</p>


                    </li>

            ";}
        }


        function viewer (string $projectid){
            global $connection;
            //SQL-Zugriff auf Datensaetze
            $query = $connection->prepare("SELECT cms_projects.cover AS coverimg, cms_projects.headline, cms_projects.subheadline, T_Clients.name AS pclient, T_Types.name AS ptype, cms_projects.onlinedate, cms_projects.projecttext, cms_projects.hint, cms_projects.path, cms_projects.path, cms_projects.img1, cms_projects.img2, cms_projects.img3, cms_projects.img4, cms_projects.img5, cms_projects.img6 FROM cms_projects, T_Types, T_Clients WHERE cms_projects.type = T_Types.p_type_nr AND cms_projects.client = T_Clients.p_client_nr AND cms_projects.id = $projectid;");
            
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC); 
        
            while ($row = $query->fetch()){
        
                $headline = $row['headline'];
                $subheadline = $row['subheadline'];
                $type		= $row['ptype'];
                $path		= $row['path'];
                $cover		= $row['coverimg'];
                $client		= $row['pclient'];
                $date		= $row['onlinedate'];
                $text = $row['projecttext'];
                $hint = $row['hint'];
                $img1 = $row['img1'];
                $img2 = $row['img2'];
                $img3 = $row['img3'];
                $img4 = $row['img4'];
                $img5 = $row['img5'];
                $img6 = $row['img6'];

        
                echo "

                <head>
                    <title>$headline</title>
                </head>";

                echo "
                <div class=\"coverimage\">
                    <img src=\"$path$img1\" alt='$headline'>
                </div>
                <h1 class='headline'>$headline</h1>
                <h2 class='subheadline'>$subheadline</h2>
                <span class='type'>Typ: $type</span>
                <span class='type'>Klient: $client</span>
                <span class='type'>$date</span>
                <p class='contenttext projecttext'>$text</p>";


                

                if($img2 == "0") 
                {
                echo "";
                } 
                else 
                {
                echo "<img class='projectimage' src='$path$img2' alt='$headline'>";
                }

                if($img3 == "0") 
                {
                echo "";
                } 
                else 
                {
                echo "<img class='projectimage' src='$path$img3' alt='$headline'>";
                }

                if($img4 == "") 
                {
                echo "";
                } 
                else 
                {
                echo "<img class='projectimage' src='$path$img4' alt='$headline'>";
                }

                if($img5 == "") 
                {
                echo "";
                } 
                else 
                {
                echo "<img class='projectimage' src='$path$img5' alt='$headline'>";
                }

                if($img6 == "") 
                {
                echo "";
                } 
                else 
                {
                echo "<img class='projectimage' src='$path$img6' alt='$headline'>";
                }

                if($hint == "") 
                {
                echo "";
                } 
                else {
                echo "<p class='hint'><strong>Hinweis</strong>$hint</p>";
                }

                echo "
                    <div class='project-question'>
                        <p>Du hast Interesse dein Projekt zusammen mit mir zu verwirklichen? Schreib mir doch eine E-Mail oder Frage nach einer unverbindlichen Preisanfrage.</p>
                        <a class='link' href='mailto:hello@fabianr.de?subject=Projektanfrage: Dein Betreff hier'>Projekt anfragen</a>
                        <a href='index.php' class='link'>Mehr Projekte ansehen</a>
                    </div>
                ";
               
            }
        
        
            };

            function footerlinks() {
                global $connection;
                //SQL-Zugriff auf Datensaetze
                $query = $connection->prepare("SELECT title, link, functions FROM cms_sites WHERE active = 1 AND footer = 1");
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
    
                while ($row = $query->fetch()){
                    $name		= $row['footername'];
                    $link		= $row['link'];
                    $function	= $row['functions'];

                    echo "
                        <li><a onclick='$function' href='$link'>$name</a></li>
                    ";
                }
    
            }; //Ende der WHILE-Schleife

            function getconntactinformation() {
                global $connection;
                //SQL-Zugriff auf Datensaetze
                $query = $connection->prepare("SELECT content FROM cms_content WHERE pagetitle = 5 AND active = 1;");
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC);
    
                while ($row = $query->fetch()){
                    $content	= $row['content'];

                    echo "

                           
                            $content
  
                    ";
                }
    
            }; //Ende der WHILE-Schleife









            function viewernew (string $projectid){
                global $connection;
                //SQL-Zugriff auf Datensaetze
                $query = $connection->prepare("SELECT cms_projects.cover AS coverimg, cms_projects.headline, cms_projects.subheadline, T_Clients.name AS pclient, T_Types.name AS ptype, cms_projects.onlinedate, cms_projects.projecttext, cms_projects.hint, cms_projects.path, cms_projects.path, cms_projects.img1, cms_projects.img2, cms_projects.img3, cms_projects.img4, cms_projects.img5, cms_projects.img6 FROM cms_projects, T_Types, T_Clients WHERE cms_projects.type = T_Types.p_type_nr AND cms_projects.client = T_Clients.p_client_nr AND cms_projects.id = $projectid;");
                
                $query->execute();
                $query->setFetchMode(PDO::FETCH_ASSOC); 
            
                while ($row = $query->fetch()){
            
                    $headline = $row['headline'];
                    $subheadline = $row['subheadline'];
                    $type		= $row['ptype'];
                    $path		= $row['path'];
                    $cover		= $row['coverimg'];
                    $client		= $row['pclient'];
                    $date		= $row['onlinedate'];
                    $text = $row['projecttext'];
                    $hint = $row['hint'];
                    $img1 = $row['img1'];
                    $img2 = $row['img2'];
                    $img3 = $row['img3'];
                    $img4 = $row['img4'];
                    $img5 = $row['img5'];
                    $img6 = $row['img6'];
    
                    echo "
    
                    <head>
                        <title>$headline</title>
                    </head>";


                    echo "
                    <div class=\"flex row rowrewerse\">
                        <div class=\"col-6\">
                            <div class=\"coverimage\">
                                <img src=\"$path$img1\" alt='$headline'>
                            </div>";

                            if($img2 == "0") 
                            {
                            echo "";
                            } 
                            else 
                            {
                            echo "<img class='projectimage' src='$path$img2' alt='$headline'>";
                            }

                            if($img3 == "0") 
                            {
                            echo "";
                            } 
                            else 
                            {
                            echo "<img class='projectimage' src='$path$img3' alt='$headline'>";
                            }

                            if($img4 == "0") 
                            {
                            echo "";
                            } 
                            else 
                            {
                            echo "<img class='projectimage' src='$path$img4' alt='$headline'>";
                            }

                            if($img5 == "0") 
                            {
                            echo "";
                            } 
                            else 
                            {
                            echo "<img class='projectimage' src='$path$img5' alt='$headline'>";
                            }

                            if($img6 == "0") 
                            {
                            echo "";
                            } 
                            else 
                            {
                            echo "<img class='projectimage' src='$path$img6' alt='$headline'>";
                            }

                        echo "
                        </div>

                        <div class=\"col-4\">

                            <ul class=\"vita copy--large \">
                                <li><strong>$headline</strong></li>

                                <li class=\"darkgrey\">$subheadline
                                    <p class=\"grey contenttext nocols margin0\">
                                    $text
                                    </p>
                                </li>
                                <li>
                                    <p class=\"darkgrey contenttext nocols margin0\">
                                        <strong>Typ: </strong>$type <br>
                                        <strong>Klient: </strong>$client <br>
                                        <strong> $date</strong>";  
                                        echo"
                                        <br>
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    "; 

                    if($hint == "") 
                    {
                    echo "";
                    } 
                    else {
                    echo "<p class='hint'><strong>Hinweis</strong>$hint</p>";
                    }
    
                    echo "
                        <div class='project-question'>
                            <p>Du hast Interesse dein Projekt zusammen mit mir zu verwirklichen? Schreib mir doch eine E-Mail oder Frage nach einer unverbindlichen Preisanfrage.</p>
                            <a class='link' href='mailto:hello@fabianr.de?subject=Projektanfrage: Dein Betreff hier'>Projekt anfragen</a>
                            <a href='index.php' class='link'>Mehr Projekte ansehen</a>
                        </div>
                    ";
    

                   
                }
            
            
                };









?>