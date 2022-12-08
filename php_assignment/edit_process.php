<?php
include('sidebar.php');
include('db_conn.php');
include('header.php');
if(isset($_GET['id']) && $_GET['id']!=''){
    $blog_id = $_GET['id'];
    $sql = "select * from tb_employee where id = {$_GET['id']}";
	$res = mysqli_query($conn,$sql) or die("Error in editing ".mysqli_error($conn));
    $resp = mysqli_fetch_assoc($res);
    extract($resp);
}
?>
<form action='' method='POST' id="stories_form" class="stories_form">
                    <div class="">
                      <div class="form-group">
                        <input type="text" placeholder="Name" name="name"  value = "<?= $name?>"class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Address" name="adress" value = "<?= $adress?>" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Email" name="email" value = "<?= $email?>" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Phone Number" name="number" value = "<?= $number?>" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Department</label>
                        <div class="radio-bnt-new-box">
                          <label class="radio-inline">
                            <input type="radio" name="department" value="Marketing">
                            Marketing </label>
                          <label class="radio-inline">
                            <input type="radio" name="department" value="HR">
                            HR </label>
                          <label class="radio-inline">
                            <input type="radio" name="department" value="Finance">
                            Finance </label>
                          <label class="radio-inline">
                            <input type="radio" name="department" value="Sales">
                            Sales </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Working Type</label>
                        <select name="working" id="Working Type">
                          <option value="Full time">Full time</option>
                          <option value="Part time">Part time</option>
                          <option value="Remote">Remote</option>
                        </select>
                      </div>
                      <label>Hobbies</label>
                      <div class="form-group checkbox-box">
                        <input type="checkbox" name="hobbies" id="veg1" value="Dancing" onclick="return">
                        <label for="veg1">Dancing</label>
                        <input type="checkbox" name="hobbies" id="veg2" value="onion" onclick="return ValidateSelection();">
                        <label for="veg2">Acting</label>
                        <input type="checkbox" name="hobbies" id="veg3" value="lettuce" onclick="return ValidateSelection();">
                        <label for="veg3">Reading</label>
                        <input type="checkbox" name="hobbies" id="hobbies" value="capsicum">
                        <label for="veg4">Exercising</label>
                      </div>
                      <div class="form-group">
                        <input type="file" placeholder="Image Name" id="Imagepath" name="file" class="form-control">
                      </div>
                      <div class="form-group">
                        <button data-dismiss="modal" class="cancel-bnt" type="button">Cancel</button>
                        <input class="save-bnt" value="edit" name="edit" title="Submit" style="cursor:pointer;" align="absmiddle" type="submit">
                        <span id="update_loader_img" style="display:none;"><img src="#/admin/assets/images/loader.gif" alt="Loader">&nbsp;Processing ... </span>
                      </div>
                    </div>
                  </form>