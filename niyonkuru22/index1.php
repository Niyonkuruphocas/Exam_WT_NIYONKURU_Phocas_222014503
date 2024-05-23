<?php  include("logout.php")  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric vehicle rental service</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>

  <header>
    <nav>
      <h1>NIYONKURU Phocas</h1>
      <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#About us">About us</a></li>
        <li><a href="#gallery">gallery</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
      <div class="logout">
        <p> <?php echo $_SESSION['email'] ?>  </p>
        <form action="" method="post">
                <button class="btn" type="submit" name="logout">Logout</button>
        </form>
      </div>
    </nav>
  </header>

  <!-- Home Section -->
      <section id="home">
        <div class="container home">
          <h1>ELECTRIC VEHICLE RENTAL   <br /> SERVICES</h1>
          <p>Promoting sustainable transportation and provide accessble,ecofriendlly vehcle options for users.</p>
          <div class="buttons">
            <button class="btn"> <a href="#program">Get <details></details></a> </button>
            <button class="btn xx"> <a href="#contact">Connect with us</a> </button>
          </div>
        </div>
      </section>

<!-- Program Section -->

    <section id="program">
      <div class="container pro_wraper">
        <h1>About Our Program</h1>
        <div class="pro_container">
          <div class="pro_card">
            <h2>Thorough Program</h2>
            <p>Our program covers all aspect of electric vehcle operations including charging, safety procedures and vehicle mintenance, ensuring renters have acomplele of our service.</p>
          </div>
          <div class="pro_card">
            <h2>Applied Methodology</h2>
            <p>with Our applied method, renters have the opportunity to directly involve with our electric vehicles, experiancing their operation in gaining confidence in driving electric vehicle.</p>
          </div>
          <div class="pro_card">
            <h2>Community Involvement</h2>
            <p>We collaborate with local organisation and event to promote electric vehicle adoption sustainability and well transportation solutions.</p>
          </div>

        </div>
      </div>
    </section>
<!-- Gallery Section -->

    <section id="gallery">
      <div class="container gallery_wraper">
        <h1>Rental vehicle Gallery</h1>
        <div class="gallery_container">
            <img src="./images/bg7.jpg" alt="">
            <img src="./images/bg1.jpg" alt="">
            <img src="./images/bg2.jpg" alt="">
            <img src="./images/bg3.jpg" alt="">
            <img src="./images/bg4.jpg" alt="">
            <img src="./images/bg5.jpg" alt="">
            <img src="./images/bg6.jpg" alt="">
            <img src="./images/bg7.jpg" alt="">
        </div>
      </div>
    </section>
    <div>
    
    <!-- Contact Section -->

    <section id="contact">
      <div class="container contact_wraper">
        <h2>Contact us </h2>
        <div class="contact_FormWraper">
          <div class="contact_card">
          <h1>Data Presentation Table</h1>

<table border="1" cellspacing="0" cellpadding="0" width="80%">
    <tr>
      <th>No</th>
      <th>Names</th>
      <th>Email</th>
      <th>Message</th>
      <th colspan="2">Action</th>
    </tr>
    <?php
    $count = 1;
      include("connection.php");
      $sql = "SELECT * FROM contact ";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)){?>
    
    <tr>
      <td> <?php  echo $count++;  ?> </td>
      <td> <?php echo $row['name']  ?> </td>
      <td><?php echo $row['email']  ?> </td>
      <td><?php echo $row['message']  ?> </td>
      <td> <a href="delete.php?id=<?php echo $row['id'] ?>"> Delete </a> </td>
      <td> <a href="edit.php?id=<?php echo $row['id'] ?>"> Update </a> </td>
    </tr>
    <?php } ?>
</table>
          </div>
            <div class="contact_card">
                    
                    <form action="contact.php" method="post">
                      <div class="inpu-container">
                        <label for="">Your Names</label>
                        <input type="text" name="name" placeholder="Full Name" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Email" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Message</label>
                        <textarea name="message" id="" rows="15" cols="30"></textarea>
                      </div>
                      <input type="submit" value="Submit" name="contact">
                    </form>
                
            </div>
        </div>
       
      </div>
    </section>
    <footer>
      <div class="container footer">
        <p>&copy;This website was created by NIYONKURU Phocas</p>
      </div>
    </footer>

  </body>
</html>
