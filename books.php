<?php
require_once('partials/header.php')
?>

<div>
    <section class="w3l-breadcrumb">
        <div class="container">
            
            <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Books</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="home.php">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Books</li><br>        
                <li>
                    <a type="submit" class = "btn" href = "index_books.php">Add</a>
                </li>
            </ul>
        </div>  
    </section>
</div>

<?php
        
        require_once("db_users.php");
        $query = "Select * from `books` where is_active = 1";
        $result = mysqli_query($conn, $query);
    ?>



<div class="menu-w3ls py-1" id="">
    <div class="container py-md-4 py-3">
        <div class="row menu-body">
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="col-lg-6 menu-section">
                <div class="row menu-item">    
                    <div class="col-3 p-0 position-relative">
                        <img src="assets/images/<?=$row['photo'];?>" class="shadow-lg p-4 mb-6 bg-white rounded" alt="">
                        <a class = "btn button-style button-style-2"  target="_blank" href ="assets/books/<?=$row['file']?>">Read</a>
                    </div>
                   
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6><?=$row['name'];?> <?=$row['year'];?></h6>
                                <div class="align-text">
                                    <p><?=$row['author'];?></p>
                                </div>
                                </div>
                        </div>
                        <div class="menu-item-description">
                            <p><?=$row['about'];?></p>
                        </div>
                        <div class="align-text-bottom">
                            <h6><?=$row['add_date'];?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>  
    </div>
</div>

<?php require_once('partials/footer.php') ?>