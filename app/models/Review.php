<?php
/**
 * Created by PhpStorm.
 * User: arjunbhargava
 * Date: 3/11/14
 * Time: 6:41 PM
 */

class Review {

    public static function getReviews($id) {
        $query = DB::table('reviews')
            ->select('reviews.id','restaurant_id','review_description', 'rating', 'restaurants.facebook_page', 'restaurants.restaurant_name')
            ->join('restaurants', 'restaurants.id', '=', 'reviews.restaurant_id')
            ->where('restaurants.id', '=' , $id);

        return $query->get();
    }

    public static function getName($id) {

        $query = DB::table('restaurants')
            ->select('id','restaurant_name', 'type', 'city', 'facebook_page')
            ->where('id', '=', $id );

    return $query->get();
    }


}