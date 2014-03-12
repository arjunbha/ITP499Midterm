<?php
/**
 * Created by PhpStorm.
 * User: arjunbhargava
 * Date: 3/11/14
 * Time: 6:08 PM
 */

class Restaurant {

    public static function getAllRestaurants() {
        $query = DB::table('restaurants')
            ->select('id','restaurant_name', 'type', 'city', 'facebook_page');

        return $query->get();
    }


}