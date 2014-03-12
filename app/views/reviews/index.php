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
            border-bottom: 2px solid black;
            margin: 5px;
            padding-bottom: 5px;
        }

    </style>
</head>
<body>

<h1>Yelp</h1>


<?php foreach ($reviews as $review) : ?>
<div>
<h3><?php echo $review->restaurant_name; ?> (<?php echo $review->city; ?>)</h3>
<br />
<span><?php echo $review->type; ?></span>
<br />
    <br />
<?php if($review->facebook_page != NULL) {
    echo "Facebook Page: <a href='http://facebook.com/" . $review->facebook_page . "'>here</a>";
    }
    else {
        echo "Not on Facebook";
    }?>
<br />
<a href="/restaurants/<?php echo $review->id; ?>/reviews">View Reviews</a>
</div>
<?php endforeach; ?>


</body>
</html>