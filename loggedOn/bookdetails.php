<?php

    require_once("usernavbar.php");
    require_once ("../Model/displaybooks.php");
    $Bid=$_GET['bid'];
    $curbook="";
?>

<div class="container container-xl container-fluid text-center row m-auto" style="min-width: 400px">

    <?php

        foreach($res as $book):{
            if($book['bookid'] == $Bid){
                $curbook = $book;
                break;
            }
        }
        endforeach;

    ?>

    <div class="container card p-3 col-lg-6 text-left m-auto bg-white text-dark">
        <h4>Book Details</h4><br>
        <img class="card-img-top" class="img-fluid" src="../Images/bookcover.png" alt="<?php echo $curbook['title'];?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $curbook['title'];?></h5>
            <p class="card-text">
                <b>Language: </b><?php echo $curbook['lang'];?><br>
                <b>Author: </b><?php echo $curbook['authors'];?><br>
                <b>Publisher: </b><?php echo $curbook['publisher'];?><br>
                <b>ISBN: </b><?php echo $curbook['isbn'];?><br>
                <b>ISBN-13: </b><?php echo $curbook['isbn13'];?><br>
                <b>Avg Rating: </b><?php echo $curbook['avgrating'];?><br>

            </p>
        </div>
    </div>

</div>



<?php include("../View/footer.html")?>
