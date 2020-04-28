<div class="row">
<div class="comments" style="margin-top:120px;">
    <h2>Комментарии:</h2>
    <hr>
    <?php 
            $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $query = "SELECT * FROM users WHERE `url` = '$url'";
             
                    if ($result = $db->query("SELECT * FROM comments WHERE `url` = '$url'")) {                        
                        while ($row = $result->fetch_row()) {
                       
                        echo '<div class="row"><div class="block">';
                            echo '<div class="col-lg-2">';
                                echo '<h3>';
                                echo '<a href="'."profile/?id=".$row[1].'">';
                                    echo $row[2];
                                echo '</a>';
                                echo '</h3>';
                                echo '<i>';
                                    echo $row[3];
                                echo '</i>';
                                echo '<br>';                                
                            echo '</div>';
                            echo '</div></div>';
                        }
                    }
         ?>
    <div class="add" style="margin-top: 40px;">
        <form method="post" action="comment/comments-add.php">
            <textarea type="text" name="text" required></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="submit">
        </form>
    </div>
    </div>
    </div>