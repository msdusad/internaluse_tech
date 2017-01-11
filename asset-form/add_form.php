<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
           <?php require_once("../classes/Include_all.php");?>
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <button  class="btn btn-round btn-default"  data-dismiss="modal" onclick="window.history.back();" >Cancel</button>
        <!--   <input type="submit"    class="btn btn-round btn-dark"  data-dismiss="modal" value="Update"> -->
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Add Form</h1>
          <!-- start table -->
<?php
// Connect to the DB
// store in the DB 
if(!empty($_POST['ok'])) {  
  // first delete the records marked for deletion. Why? Because we don't want to process them in the code below
  if( !empty($_POST['delete_ids']) and is_array($_POST['delete_ids'])) {
    // you can optimize below into a single query, but let's keep it simple and clear for now:
    foreach($_POST['delete_ids'] as $id) {
      $sql = "DELETE FROM assets_form WHERE id=$id && assets_type_id='".$_GET['id']."' ";
      $link->query($sql);
    }
  }

  // now, to edit the existing data, we have to select all the records in a variable.
  $sql="SELECT * FROM assets_form where assets_type_id='".$_GET['id']."' ORDER BY id";
  $result = $link->query($sql);
  
  // now edit them
  while($product = mysqli_fetch_array($result)) {
    // remember how we constructed the field names above? This was with the idea to access the values easy now
    $sql = "UPDATE assets_form SET assets_type_id='".$_GET['id']."' , name='".$_POST['name'.$product['id']]."'
    WHERE id='$product[id]' && assets_type_id='".$_GET['id']."'";   
    $link->query($sql);
  }
  // (feel free to optimize this so query is executed only when a product is actually changed)
  
  // adding new products
  if(!empty($_POST['name'])) {
    foreach($_POST['name'] as $cnt => $qty) {
      $sql = "INSERT INTO assets_form (assets_type_id,name) VALUES ('".$_GET['id']."','".$_POST['name'][$cnt]."');";
      $link->query($sql);
    }
  } 
}

// select existing products here
$sql="SELECT * FROM assets_form where assets_type_id='".$_GET['id']."' ORDER BY id";
$result = $link->query($sql);
?>


<div> 
  <form method="post">

<input type="hidden" name="cat_id" value="<?php echo $_GET['id']; ?>" />
  <div id="itemRows">

<input type="hidden" name="add_name" /> <input onclick="addRow(this.form);" type="button" value="Add row" class="btn btn-info" style="float:right"  />
  
   
  <?php
  // let's assume you have the product data from the DB in variable called $products
  while($product = mysqli_fetch_array($result)): 

    ?>


                 <div class="row">

                    <div class="col-sm-12 col-xs -12 padding-bottom-10">

                      <div class="form-group" id="oldRow<?=$product['id']?>">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12"><b><?=$product['name']?> </b></label>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      <input type="text" name="name<?=$product['id']?>" value="<?=$product['name']?>" class="form-control" />
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12 padding-top-5">
                      <input type="checkbox" name="delete_ids[]" value="<?=$product['id']?>"> Mark to delete
                      </div>
                      <div class="clearfix"></div>
                      </div>

                      

                    <div class="clearfix"></div>
                    </div>

                 </div>

  <?php endwhile;?>

  </div>
<script type="text/javascript">
var rowNum = 0;
function addRow(frm) {
  rowNum ++;
  var row = '<div class="row"> <div class="col-sm-12  col-xs-12 padding-bottom-10"><div class="form-group" id="rowNum'+rowNum+'"><label class="control-label col-md-2 col-sm-2 col-xs-12">Filed Name:</label><div class="col-md-7 col-sm-7 col-xs-12"><input type="text" name="name[]" class="form-control" value="'+frm.add_name.value+'"></div><div class="col-md-3 col-sm-3 col-xs-12 padding-top-5"><input type="button" value="Remove" onclick="removeRow('+rowNum+');"></div><div class="clearfix"></div></div></div> </div>';
  jQuery('#itemRows').append(row);
  frm.add_qty.value = '';
  frm.add_name.value = '';
}

function removeRow(rnum) {
  jQuery('#rowNum'+rnum).remove();
}

</script>
   <p><input type="submit" name="ok" value="Save Changes" class="btn btn-round btn-dark"></p>

  </form>
</div>

</div>
</div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>

</body>
</html>



