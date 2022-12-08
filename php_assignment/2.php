<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<?php
include('header.php')
?>

  <body>
    <div class="wrapper">
      <!-- =========== Header Area Start ============ -->
      <header>
        <div class="container-fluid">
          <div class="row">
            <div class="content1">
              <nav id="navigation6" class="navigation tt-nav navbar navbar-inverse navigation-portrait">
                <div class="nav-header"><a class="nav-logo" href="#/"><img src="images/login_logo.png" alt="better"></a>
                  <div class="nav-toggle"></div>
                </div>

                <div class="welcome-box"><span>Welcome better</span><span class="divider-l"></span> <a href="logout.php">Logout</a></div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <div id="page">
        <div class="container-fluid">
          <div id="top1" class="clearfix">
            <?php
            include('sidebar.php');
            include('db_conn.php');
            ?>
            <!-- START CONTAINER -->
            <div class="container-padding">
              <!-- Start Row -->
              <div class="row">
                <!-- Start Panel -->
                <div class="col-md-12">
                  <div class="panel-body table-responsive">
                    <table class="table leaders-table">
                      <colgroup>
                        <col width="10%">
                        <col width="25%">
                        <col width="15%">
                        <col width="20%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                      </colgroup>
                      <thead>
                        <tr class="first last">
                          <th class="first_gray" title="Name">Name</th>
                          <th title="Address">Address</th>
                          <th title="Email">Email</th>
                          <th title="Number">Number</th>
                          <th title="Department">Department</th>
                          <th title="Working Type">Working Type</th>
                          <th title="Hobbies">Hobbies</th>
                          <th title="Action">Action</th>
                        </tr>
                      </thead>
                      <?php
                      $sql = "select * from tb_employee ";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                      ?>
                      <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                        <tr ng-repeat="page in pages">
                          <td><?= $row["name"]  ?></td>
                          <td><?= $row["adress"]  ?></td>
                          <td><?= $row["email"]  ?></td>
                          <td><?= $row["number"]  ?></td>
                          <td><?= $row["department"]  ?></td>
                          <td><?= $row["working"]  ?></td>
                          <td><?= $row["hobbies"]  ?></td>
                          <td><a href="edit_process.php?id=<?= $row['id']?>" class="edit-i" >E</a>
                          <a href="delete.php?&id=<?= $row['id'] ?>" class="edit-i">D</a></td>
                        </tr>
                        <?php }
                      } else {
                        echo "0 results";
                      };?>
                      </tbody>
                    </table>
                    <div class="pagination">
                      <div class="pagination" style="margin:8px;float:right;">
                        <div class="col-sm-12 text-left">
                          <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="#/admin/leaders-list/&amp;page=2">2</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=3">3</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=4">4</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=5">5</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=6">6</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=7">7</a></li>
                            <li><a href="#/admin/leaders-list/&amp;page=2">»</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Panel -->
              </div>
              <!-- End Row -->

            </div>
          </div>

          <!-- New Post Modal -->
          <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display:none;">
            <div class="modal-dialog modal-md" style="width:900px;max-width:900px;">
              <div class="modal-content">
                <div class="modal-header">
                  <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="top_header_text">Add New Employee</h4>
                </div>
                <div class="modal-body">
                  <form action='add_process.php' method='POST' id="stories_form" class="stories_form">
                    <div class="">
                      <div class="form-group">
                        <input type="text" placeholder="Name" name="name" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Address" name="adress" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Email" name="email" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Phone Number" name="number" class="form-control" required>
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
                        <input class="save-bnt" value="add" name="add" title="Submit" style="cursor:pointer;" align="absmiddle" type="submit">
                        <span id="update_loader_img" style="display:none;"><img src="#/admin/assets/images/loader.gif" alt="Loader">&nbsp;Processing ... </span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>



          <!-- Edit Post Modal -->
          <br>
          <br>
          <style type="text/css">
            .chosen-container.chosen-container-multi {
              width: 100% !important;
            }
          </style>
        </div>
      </div>
      <script src="js/navigation.js"></script>
      <script src="js/common.js"></script>
  </body>

  </html>
<?php
} else {
  header("Location: index.php");
  exit();
}
?>