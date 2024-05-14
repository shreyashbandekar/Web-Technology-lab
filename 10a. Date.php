<!DOCTYPE html>
   <html>
   <head>
      <title>Date</title>
   </head>
   <body>
      <?php
          echo "Today is ".date("d-m-Y")."<br>";
            echo "Today is ".date("l")."<br>";
            echo "Time is ".date("h:i:sa")."<br>";
            echo "Time is ".date("h:i:sa",strtotime("+ 5 hours + 30 minutes + 45 seconds"))."<br>";
      ?>
   </body>
</html>
