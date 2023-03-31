<?php

    include './server/config.php';
    include './include/header.php';
    $query="SELECT * FROM articles";
    $result=mysqli_query($conn, $query);
?>
    <section>
        <div class="container pt-5">
           <div class="d-flex flex-wrap">
                <?php
                while($row=mysqli_fetch_array($result))     
                {
                    echo '<div class="col-lg-4 col-12 pb-5">
                            <div class="card h-100"> 
                                <a href="./article.php?id='.$row['id'].'">
                                    <img src='.$row['thumbnail'].' class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['heading'].'</h5>
                                    <p class="card-text" style="color:#7A7D80">'.$row['subheading'].'</p>
                                    <a href="./article.php?id='.$row['id'].'" class="btn btn-primary">Read Article</a>
                                </div>
                            </div>
                        </div>';
                }
                ?>
           </div>
        </div>
    </section>
<?php
    include './include/footer.php';
?>