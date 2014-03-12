<?php
/**
 * Created by PhpStorm.
 * User: arjunbhargava
 * Date: 3/11/14
 * Time: 6:01 PM
 */

class YelpController extends BaseController {

    public function index() {
        $reviews = Restaurant::getAllRestaurants();

        return View::make('reviews/index', [
            'reviews' => $reviews
        ]);
    }

    public function findReviews($id) {
        $reviews = Review::getReviews($id);
        $name = Review::getName($id);


        return View::make('reviews/review', [
            'reviews' => $reviews,
            'name' => $name
        ]);
    }
}