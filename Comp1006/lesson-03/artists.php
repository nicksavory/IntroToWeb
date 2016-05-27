<?php

    $dbh = new PDO("mysql:host=localhost;dbname=artists", "root", "root");
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    //Build the SQL statement
    $sql = 'SELECT * FROM artists';

//    $sth = $dbh->prepare( $sql );
//    $sth->execute();
//    $results = $sth->fetchAll();

    $results = $dbh->query( $sql );
    $row_count = $results->rowCount();

    $dbh = null;

?>

<!DOCTYPE HTML>
<html lang="en">

  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-aNUYGqSUL9wG/vP7+cWZ5QOM4gsQou3sBfWRr/8S3R1Lv0rysEmnwsRKMbhiQX/O" crossorigin="anonymous">
    <title>List Artists</title>
  </head>

  <body>
    <!-- This is a Bootstrap container. Get more info at http://getbootstrap.com/ -->
    <div class="container">
        <header>
            <h1 class="page-header">
                List Artists
            </h1>
        </header>

        <section>
            <?php if ( $row_count > 0 ): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Artist Name</th>
                        <th>Artist Bio Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result): ?>
                        <tr>
                            <td><?= $result['name'] ?></td>
                            <td><a href="<?= $result['bio_link'] ?>" target="_blank"><?= $result['bio_link'] ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
             <?php else: ?>
                <div classs="alert alert-info">
                    There's no artists available.
                </div>
            <?php endif ?>
        </section>
    </div>
    
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
  
</html>