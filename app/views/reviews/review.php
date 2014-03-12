<!doctype html>
<html>
<head>
    <title>Yelp</title>

    <style>
        body {

        }
        table {
            margin: auto;
        }
        div {
            border-bottom: 1px solid black;
            margin: 5px;
            padding-bottom: 5px;
        }

    </style>
</head>
<body>

<h1>Yelp</h1>


<h2>Reviews for <?php echo $name[0]->restaurant_name; ?></h2>
<div>

<h3>Facebook Activity</h3>
    <?php if($name[0]->facebook_page != NULL) {
        $fbpage = new \Yelp\Facebook\FacebookPage($name[0]->facebook_page);
        $fbpage = $fbpage->get();
        echo "<ul><li>Likes: $fbpage->likes</li><li>Checkins: $fbpage->checkins</li></ul>";
    }
    else {
        echo "Not on Facebook";
    }?>

</div>

<?php foreach ($reviews as $review) : ?>
<div>
    <?php
    $count = $review->rating;
    for ($i = 0; $i < $count ; $i++) {
        echo "<img src='https://bbpress.org/wp-content/themes/bb-base/images/star.png'>";
    }
    ?>
    <br />
    <br />
    <?php
    echo $review->review_description;
    ?>

</div>
<?php endforeach; ?>




</body>
</html>