<?php
require_once("usernavbar.php");
require_once("../Model/userDashboard.php");
$fullName="";
if(isset($_SESSION["fullname"])){
        $fullName = $_SESSION["fullname"];
}


?>

    <br>
    <table class="ml-3 table table-bordered table-dark table-responsive-md float-left m-auto"  style="margin-bottom: 10px;" >
        <caption style="caption-side: top"><u>Rental Details for <?php echo $fullName?></u></caption>
        <thead>
         <tr style="white-space: nowrap">
             <th scope="col">#</th>
             <th scope="col">Title</th>
             <th scope="col">Rented Date</th>
             <th scope="col">Return Date</th>
             <th scope="col">Late Fees</th>
         </tr>
        </thead>

        <tbody>
        <?php
        $counter=0;
        foreach($res as $book):
            $counter++;?>
        <tr style="white-space: nowrap">
            <th scope="row"><?php echo $counter?></th>
            <td><?php echo $book['title'];?></td>
            <td><?php echo $book['rentDate'];?></td>
            <td style="<?php if($book['returnDate'] == null){
                        echo "background:red;";

            }?>"><?php if($book['returnDate'] == null){
                    echo "N/A";
                }else{
                    echo $book['returnDate'];}?></td>

            <td><?php if( $book['returnDate'] != null){
                    $interval = date_diff(date_create($book['returnDate']), date_create($book['rentDate']));
                    if($interval->days > 30) {

                        echo "$".($interval->days-30);
                    }else{
                        echo "$0";
                    }
                }else {
                    $interval = date_diff(date_create(date('Y-m-d')), date_create($book['rentDate']));
                    if ($interval->days > 30) {
                        echo "$" . ($interval->days - 30);
                    } else {
                        echo "$0";
                    }
                }
                ?></td>
        </tr>




        </tbody>
        <?php endforeach; ?>
    </table>


<?php include "../View/footer.html";?>

