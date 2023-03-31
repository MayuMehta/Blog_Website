<?php
    include './server/config.php';
    include './include/header.php';
    $query="SELECT * FROM articles where id=".$_GET['id'];
    $result=mysqli_query($conn, $query);

    $SgggestedQuery="SELECT * FROM articles order by RAND() limit 3";
    $SuggestedResult=mysqli_query($conn, $SgggestedQuery);
?>
<section>
    <div class="container">
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo '<div class="text-center pb-5">
                        <div class="col-10 mx-auto">
                            <h1>'.$row['heading'].'</h1>
                        </div>
                        <div class="my-5">
                            <img src="'.$row['thumbnail'].'" width="60%" >
                        </div>
                        <div class="col-10 mx-auto read-desc">
                            <p>'.$row['description'].'</p>
                        </div>
                    </div>';
            }
        ?>  
    </div>
    <div class="container pt-5">
        <h2 class="text-center pb-3">Suggested Articles</h2>
           <div class="d-flex flex-wrap">
                <?php
                while($row=mysqli_fetch_array($SuggestedResult))     
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