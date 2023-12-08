<?php
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();

// $id=$_GET['cid'];

$searchq = $_GET['q'];
$cid = $_GET['cid'];
// $catid=$_GET['catid'];
//select values from empInfo table
// $stmt="SELECT * FROM product where pname like '".$searchq."%' or description like '".$searchq."%'" ;
 
$stmt=$admin->ret("SELECT * FROM product where pname like '".$searchq."%' or description like '".$searchq."%'");    

     while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
<div class="col-lg-6" >
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
           <div class="pic"><img src="Controller/<?php echo $row['pimage'];?>" class="img-fluid" alt=""></div>
              <div class="member-info">
              <form action="Controller/cart.php" method="POST" enctype="multipart/form-data">
                <h8>Name: <?php echo $row['pname'];?></h8><br>
                <span>MRP: ₹<?php echo $row['cost'];?></span>
                <p>Description: <?php echo $row['description'];?></p><br>
                <input type="hidden" name="prid" value="<?php echo $row['pid'];?>">
                <input type="hidden" name="cost" value="<?php echo $row['cost'];?>">

                <input type="hidden" name="vb" value="<?php echo $id;?>">

<?php
                      if($row['stock'] == 0){ ?>

               <button class="btn btn-primary">Out Of Stock</button>

                    <?php  }else{ ?>
    <p>Quantity:<input type="number" step="1" min="1" max="<?php echo $row['stock'];?>" name="qty" value="1" title="Qty" class="input-text qty text" size="2"/></p><br>
               <input type="submit" name="add" class="btn btn-primary" value="Add to Cart">
                    <?php  }

                  ?>
              </form>
              </div>
            </div>
        
          <?php } ?>
            </div>
            
         
