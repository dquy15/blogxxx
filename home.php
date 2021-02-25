<?php
            $sql = "SELECT * FROM `postIT` ORDER BY `postIT`.`Date` DESC";
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    echo "<div class='container'>";
                          echo "<div class='row''>";
                    while($row = $result->fetch_assoc()) {
                        /*  echo   "<div class='col-sm-3'>";
                          echo "<div class='card' style='width: 18rem;'>";
                          echo "<img class='card-img-top' src=". $row['Image']." alt='Card image cap'>";
                          echo "<div class='card-body'>";
                          echo "<h2 class='card-title'>".utf8_encode($row["Title"])."</h2>";
                          echo "<h6 class='card-title'>". $row["Date"]."</h6>";
                          
                          echo "<p class='card-text' style ='margin-top: 20px; margin-bottom: 20px;'>".utf8_encode(substr($row["Post"],0,200))."...</p>";
                          
                        
                          echo "<form class='form-inline' action='action.php' method='post' >";
                          echo " <button class='btn btn-primary mx-2' name='name' id='name'>mehr</botton>";
                          echo "</form>";
                          echo "</div>";
                          echo "</div>";
                        echo "</div>";
                        */
                    
                        echo "<img class='card-img-top' src=". $row['Image']." alt='Card image cap'>";
                        
                        echo"<section class='py-5'>";
                        echo "<div class='container'>";
                        echo "<h1>".utf8_encode($row["Title"])."</h1>";
                        echo "<p class='lead'>".utf8_encode($row["Date"])."</p>";
                        echo "<p>".utf8_encode($row["Post"])."</p>";
                        echo "</div>";
                        echo "</section>";
                     
                    }
                          echo "</div>";
                          echo "</div>";
                } else {
                        echo "0 results";
                }
            $conn->close();
        ?>