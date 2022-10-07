<?php
$title="|Edit Employee Details";
    require_once('common_files/header.php');
?>
<?php
    require_once('common_files/sidebar.php');
?>

 <section class="editContainer">
 <h2>Edit User</h2>
        <div class="editWrapper">
           
            <form autocomplete ="off" class="editform">
              <?php 
                include('dbconn.php');
                $id =$_GET["id"];
                $rows=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users_details WHERE user_Id=$id"))
              ?>
                  <input type="hidden"  id="id" value="<?php echo $rows['user_Id']; ?>"> </label><br><br>
                   <div class="form-element">
                   <label for="name">Name</label>
                    <input type="text"  id="name" value="<?php echo $rows['user_name']; ?>">
                   </div>
                    <div class="form-element">
                    <label for="email">Email</label>
                     <input type="email"  id="email" value="<?php echo $rows['user_email']; ?>">
                    </div>
                    <div class="form-element">
                    <label for="password">Password</label>
                     <input type="password"   id="password" value="<?php echo $rows['user_password']; ?>">
                    </div>
                    <div class="form-element">
                    <label for="phone">Phone</label>
                    <input type="tel"  id="phone" value="<?php echo $rows['user_phone']; ?>">
                    </div>
                    <div class="form-element">
                    <label for="address">Address </label>
                    <input type="text" id="address" value="<?php echo $rows['user_address']; ?>">
                    </div>
                    <button type="button"  onclick="submitData('edit');">Edit</button>    
            </form>
            </div>
        </section>
  
    <?php 
        require 'js/callbacks/script.php';
    ?>
    </body>
    </html>