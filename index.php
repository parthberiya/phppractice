<!doctype html>
<html lang="en">
  <head>
      <title>Contact Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  rel="stylesheet" type="text/css" href="css/style_form.css">
  </head>
  
  <body>
    <section>
      <div class="main-div">
        <div class="container">
          <h2>Contact Form</h2>
          <form id="form" method="post" action="insert.php" enctype="multipart/form-data">
            <ul>
              <li>
                <div class="form_field">
                  <label for="name">Name :</label><br>
                  <input type="text" name="name" placeholder="Enter Your Name" required>
                </div>
              </li>
              <li>
                <div class="form_field">
                  <label for="email">E-mail Id :</label><br>
                  <input type="email" name="email" placeholder="Enter Your E-mail Id" required>
                </div> 
              </li>
              <li>
                <div class="form_field">
                  <label for="phone_number">Mobile Number :</label><br>
                  <input type="tel" name="phone_number" placeholder="Enter Your Mobile Number" required>
                </div>
              </li>
              <li>
                <div class="form_field">
                  <label for="address">Address :</label><br>
                  <input type="text" name="address" placeholder="Enter Your Address" required>
                </div>
              </li>
              <li>
                <div class="form_field">
                  <label for="profile_image">Profile Picture :</label><br>
                  <input type="file" name="profile_image[]" accept="image/*" multiple>
                </div>
              </li>
              <li>    
                <div class="btn">
                  <input type="submit" name="submit" value="SUBMIT">
                  <input type="reset" name="reset" value="Reset">
                </div>
                <div class="link">
                  <a href="view.php">List</a>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
