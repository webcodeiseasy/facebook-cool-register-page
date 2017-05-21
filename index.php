<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/fav.png" sizes="32x32" />
    <meta name = "viewport" content = "width=device-width,initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <title>Facebook Cool</title>
  </head>
  <body>


    <header>

    <h1>facebook cool</h1>

    </header>

    <div class = 'container'>

    <aside>

     <h3>Facebook helps you connect and share with the people in your life.</h3>
     <img src = "images/logo.png">

    </aside>


    <section>
      <form>
        <input class = 'inline' type="text" placeholder = "First name">
        <input class = 'inline' type="text" placeholder = "Last name">
        <input class = 'block' type="text" placeholder = "Mobile number or email address">
        <input  class = 'block' type="text" placeholder = "New password">

        <h4> Birthday</h4>
        <select id = 'day'>



          <option>Day</option>
          <?php for($i = 1; $i < 32;$i++): ?>
          <option> <?php echo $i;  ?>  </option>
          <?php endfor;  ?>

        </select>

        <select id = 'month'>
          <option>Month</option>
          <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Aug</option>
          <option>Sept</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>

        </select>

        <select id = 'year'>
          <option>Year</option>
          <?php for($i = 1905; $i < 2018;$i++):  ?>
       <option><?php echo $i; ?></option>
        <?php endfor;  ?>

        </select>

       
        <span>
        Male <input name = 'radio' type = 'radio'>
        Female <input name = 'radio' type = 'radio'>
        </span>




        <small>

        By clicking Create an account, you agree to our Terms and confirm that
         you have read our Data Policy, including our Cookie Use Policy. You may
        receive SMS message notifications from Facebook and can opt out at any time.


      </small>

        <button id = 'btn'>Create an account</button>
      </form>
    </section>

  </div>

  <script>

  document.querySelector('#btn').onclick = function(e){
    e.preventDefault();
  }

  </script>

  </body>
</html>
