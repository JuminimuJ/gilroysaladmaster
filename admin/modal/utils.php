<!-- MODAL UPD LOGO -->
<div class="modal fade" id="modalupdLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content rounded-0">
      <form method="post" action="update_logo.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-image"></i> Update logo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Current Logo:</label><br/>
            <?php 
              $sql_logo = "SELECT * FROM `acc_logo` WHERE 1";
              $query_logo = $conn->query($sql_logo);
              $row_logo = $query_logo->fetch_array();
            ?>
            <img src="../uploads/logo/<?php echo $row_logo[1];?>" style="max-width:300px;">
        </div>

        <div class="form-group">
            <label>Upload:</label>
            <input type="file" name="upd_logo" class="form-control" />
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
        <button type="submit" name="btnuploadlogo" class="btn btn-primary rounded-0"><i class="fas fa-upload"></i> Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- MODAL UPD COLOR THEME -->
<div class="modal fade" id="modalupdColorTheme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content rounded-0">
      <form method="post" action="update_logo.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-palette"></i> Change Color Theme</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Current:</label><br/>
            <?php 
              $sql_color = "SELECT * FROM `acc_color_theme` WHERE 1";
              $query_color = $conn->query($sql_color);
              $row_color = $query_color->fetch_array();
            ?>
            #444444
            <i class="fas fa-cirle fa-3x" style="color:<?php echo $row_color[1];?>;"></i>
        </div>

        <div class="form-group">
            <label>Select Color Theme:</label>
            <input type="color" id="colorpicker" value="#444444" class="form-control">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
        <button type="submit" name="btnupdcolor" class="btn btn-primary rounded-0"><i class="fas fa-save"></i> Save Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- MODAL UPD COLOR THEME -->
<div class="modal fade" id="modalSettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content rounded-0">
      <form method="post" action="update_logo.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Settings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <?php 
              $sql_color = "SELECT * FROM `acc_user` WHERE 1";
              $query_color = $conn->query($sql_color);
              $row_color = $query_color->fetch_array();
            ?>
            <i class="fas fa-cirle fa-3x" style="color:<?php echo $row_color[1];?>;"></i>
        </div>

        <div class="form-group">
            <label>Change Admin Password:</label>
            <input type="password" placeholder="Current Password" class="form-control rounded-0">
            <label>New Password:</label>
            <input type="password" placeholder="Your new Password" class="form-control rounded-0">
            <input type="password" placeholder="Re-type Password" class="form-control rounded-0">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
        <button type="submit" name="btnupdcolor" class="btn btn-success rounded-0"><i class="fas fa-save"></i> Save Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>