<?php
// Show PHP errors
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once 'classes/user.php';

$objUser = new User();
// GET
if(isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $stmt = $objUser->runQuery("SELECT * FROM crud_users WHERE id=:id");
    $stmt->execute(array(":id" => $id));
    $rowUser = $stmt->fetch(PDO::FETCH_ASSOC);
}else{
  $id = null;
  $rowUser = null;
}

// POST
if(isset($_POST['btn_save'])){
  $name   = strip_tags($_POST['name']);
  $email  = strip_tags($_POST['email']);
  $startdate  = strip_tags($_POST['startdate']);
	$enddate  = strip_tags($_POST['enddate']);
	$paymentmode  = strip_tags($_POST['paymentmode']);
	$paid  = strip_tags($_POST['paid']);

  try{
     if($id != null){
       if($objUser->update($name, $email,$startdate,$enddate,$paymentmode,$paid, $id)){
         $objUser->redirect('index.php?updated');
       }
     }else{
       if($objUser->insert($name, $email,$startdate,$enddate,$paymentmode,$paid,$id)){
         $objUser->redirect('index.php?inserted');
       }else{
         $objUser->redirect('index.php?error');
       }
     }
  }catch(PDOException $e){
    echo $e->getMessage();
  }
}

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Head metas, css, and title -->
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <!-- Header banner -->
        <?php require_once 'includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar menu -->
                <?php require_once 'includes/sidebar.php'; ?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                  <h1 style="margin-top: 10px">Add / Edit Users</h1>
                  <p>Required fields are in (*)</p>
                  <form  method="post">
                    <div class="form-group">
                        <label for="id">ID </label>
                        <input class="form-control" type="text" name="id" id="id" placeholder="type" value="<?php print($rowUser['id']); ?>" >
                    </div>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input  class="form-control" type="text" name="name" id="name" placeholder="First Name and Last Name" value="<?php print($rowUser['name']); ?>" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone No *</label>
                        <input  class="form-control" type="text" name="email" id="email" placeholder="type your number" value="<?php print($rowUser['email']); ?>" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="startdate">Email *</label>
                        <input  class="form-control" type="text" name="startdate" id="startdate" placeholder="type your email" value="<?php print($rowUser['startdate']); ?>" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="enddate">Aadhar No *</label>
                        <input  class="form-control" type="text" name="enddate" id="email" placeholder="type your number" value="<?php print($rowUser['enddate']); ?>" required maxlength="100">
                    </div>



                    <div class="book-pag wow agileits w3layouts slideInLeft">
            					<h4>Select Date</h4>
            					<div class="book-pag-frm1 agileits w3layouts wow slideInLeft">
            						<label>Check In</label>
            						<input class="date agileits w3layouts" id="datepicker1" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

            					</div>
            					<div class="book-pag-frm2 wow agileits w3layouts slideInLeft">
            						<label>Check Out</label>
            						<input class="date agileits w3layouts" id="datepicker2" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">

            					</div>

            				<div class="clearfix"></div>
            				<p style="color: white;">Check-in/check-out time: 11:00 AM and 01:00 PM</p>
            			</div>

                  <div class="form-group">
                      <label for="paymentmode">Paymentmode *</label>
                      <input  class="form-control" type="text" name="paymentmode" id="paymentmode" placeholder="type" value="<?php print($rowUser['paymentmode']); ?>" required maxlength="100">
                  </div>

                  <div class="form-group">
                      <label for="paid">Paid *</label>
                      <input  class="form-control" type="text" name="paid" id="paid" placeholder="type" value="<?php print($rowUser['paid']); ?>" required maxlength="100">
                  </div>




                    <input class="btn btn-primary mb-2" type="submit" name="btn_save" value="Save">
                  </form>
                </main>
            </div>
        </div>
        <!-- Footer scripts, and functions -->
        <?php require_once 'includes/footer.php'; ?>
    </body>
</html>
