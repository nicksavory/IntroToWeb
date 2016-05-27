<?php
  $band_name = 'Metallica';
  $band_members = ['James Hetfield', 'Kirk Hammett', 'Lars Ulrich', 'Robert Trujillo'];
  $date = date("l jS \of F Y", strtotime('1981-10-28'));
?>

<!DOCTYPE HTML>
<html lang="en">

  <head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Lesson 01 - Lab</title>
  </head>

  <body>
	  <div class="container">

      <header>
        <h1 class="page-header">Lesson 01 Lab<small>&nbsp;&mdash;&nbsp;Dynamic Pages</small></h1>
      </header>

      <section>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <?php echo $band_name ?>
            </h3>
          </div>

          <div class="panel-body">
            <div>
              <h3>Band Members</h3>
              <p>
                <ul>
                  <?php foreach ($band_members as $band_member): ?>
                  <li>
                    <?= $band_member; ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </p>
              <h3>Band Founded Date</h3>
              <p>
                <?= $date; ?>
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

</html>
