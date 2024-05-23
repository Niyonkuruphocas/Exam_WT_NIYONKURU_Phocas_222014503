<?php
session_start();
if (!$_SESSION['email'])
 {
	header("location:index1.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Environmental Education Consultancy</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>


    <section id="edit">
        <form class="container" action="update.php" method="POST">
<?php
    include("connection.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM contact WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)){?>

                        <div class="inpu-container">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                        
                        <label for="">Your Names</label>
                        <input type="text" name="name" value="<?php echo $row['name'] ?>"  placeholder="Full Name" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Email" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Message</label>
                        <textarea name="message" id="" value="<?php echo $row['message'] ?>" rows="15" cols="30"><?php echo $row['message'] ?></textarea>
                      </div>
                      <input type="submit" value="Update" name="contact">
           

<?php } ?>
        </form>

    </section>

  
    
</body>
</html>