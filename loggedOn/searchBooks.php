<?php

    require_once("usernavbar.php");
    require_once("../Model/dbconnect.php");
    require_once("../Model/displaybooks.php");

    global $db;

    $searchAttr = $_POST["attr"];
    $value = $_POST["srch"];
    $resultArr = array();
    $sql="";
    $statement="";
    if($searchAttr == 1){

        foreach($res as $book){

            if(strcmp($book['title'],$value) == 0 || strpos($book['title'],$value) !== false){
                array_push($resultArr,$book);
            }
        }

    }else if($searchAttr == 2){

        foreach($res as $book){

            if($book['isbn'] == $value){
                array_push($resultArr,$book);
            }
        }



    }else if($searchAttr == 3){

        foreach($res as $book){

            if($book['isbn13'] == $value){
                array_push($resultArr,$book);
            }
        }

    }else if($searchAttr == 4){


        foreach($res as $book){

            if(strcmp($book['authors'],$value) == 0 || strpos($book['authors'],$value) !== false){
                array_push($resultArr,$book);
            }
        }

    }else if($searchAttr == 5){

        foreach($res as $book){

            if(strcmp($book['publisher'],$value) == 0 || strpos($book['publisher'],$value) !== false){
                array_push($resultArr,$book);
            }
        }

    }

?>

<div class="container container-fluid container-xl row">

    <?php foreach ($resultArr as $b):?>
        <div class="card p-3 col-lg-3">
            <img class="card-img-top" class="img-fluid" src="../Images/bookcover.png" alt="<?php echo $b['title'];?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $b['title'];?></h5>
                <p class="card-text">
                    <b>Author: </b><?php echo $b['authors'];?><br>
                    <b>Publisher: </b><?php echo $b['publisher'];?>
                </p>
                <a href="bookdetails.php?bid=<?php echo $b['bookid'];?>" class="btn btn-primary">More Details..</a>

            </div>
        </div>
    <?php endforeach;?>


</div>

<?php include("../View/footer.html") ?>