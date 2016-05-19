
<?php
    $recipe_name = 'Grilled Cheese';

    $ingredients = ['2 tbl spns of butter', '2 slices of bread', '2 slice of cheese'];

    $prep_steps = ['Butter on each side of the bread', 'Cook'];

    $date = date("l jS \of F Y", strtotime('2016-04-28'));
?>


<!DOCTYPE html>
<html>

<head>
    <!-- Boostrap CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-aNUYGqSUL9wG/vP7+cWZ5QOM4gsQou3sBfWRr/8S3R1Lv0rysEmnwsRKMbhiQX/O" crossorigin="anonymous">
    <!--  -->
    <title>Making Grilled Cheese</title>
</head>

<body>

<div class="container">
    <h1 class="page-header">Lesson 01 Example<small> - Grilled Static Pages</small></h1>
<div class="panel panel-default">
    <div class="pull-left">
        <img class="img-responsive thumbnail" src="http://www.blogto.com/upload/2014/01/2014131-grilled-cheese.jpg" alt="truck" />
    </div>
    <div class="pull-right">
        <h3>Recipe Ingredients</h3>
        <ul>
            <?php foreach ($ingredients as $ingredient) {
                echo '<li>' . $ingredient . '</li>';
            } ?>
        </ul>

        <h3>Recipe Prep Method</h3>
        <ol>
            <?php foreach ($prep_steps as $prep_step): ?>
                <li>
                    <?php echo $prep_step ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>
</div>

<div class="panel-footer">
    <small><strong>Preparation Date: <?= $date ?></strong></small>
</div>

<!-- jQuery/Javascript -->
<script src="http://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--  -->
</body>

</html>
