<?php

    require_once("usernavbar.php");
    require_once("../Model/displaybooks.php");

    $numitems = count($res);
    $numpages = $numitems%20 +1;

?>

<div class="container container-fluid container-xl row">

    <?php foreach ($res as $book):?>
    <div class="card p-3 col-lg-3" style="width: 15rem;">
        <img class="card-img-top" class="img-fluid" src="../Images/bookcover.png" alt="<?php echo $book['title'];?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $book['title'];?></h5>
            <p class="card-text">
               <b>Author: </b><?php echo $book['authors'];?><br>
                <b>Publisher: </b><?php echo $book['publisher'];?>
            </p>
            <a href="bookdetails.php?bid=<?php echo $book['bookid']?>" class="btn btn-primary">More Details..</a>

        </div>
    </div>
    <?php endforeach;?>


</div>
<?php include("../View/footer.html")?>