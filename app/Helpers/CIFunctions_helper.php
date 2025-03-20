<?php

use App\Libraries\CIAuth;
use App\Models\User;

if(!function_exists('get_user')) {
    function get_user(){
        if( CIAuth::check()) {
            $user = new User();
            return $user->asObject()->where('id',CIAuth::id())->first();
        }else{
            return null;
        }
    }
}

if(!function_exists('get_settings')) {
    function get_settings($key = null)
    {
        $settings = new \stdClass();
        
        // Blog settings
        $settings->blog_title = 'EGOBLOG';
        $settings->blog_tagline = 'Love, Travel & Cooking Adventures';
        $settings->blog_email = 'hello@egoblog.loc';
        $settings->blog_phone = '+1234567890';
        $settings->blog_address = 'Your Location';
        
        // Social media
        $settings->facebook = 'https://facebook.com/egoblog';
        $settings->instagram = 'https://instagram.com/egoblog';
        $settings->twitter = 'https://twitter.com/egoblog';
        $settings->pinterest = 'https://pinterest.com/egoblog';
        
        // Colors
        $settings->primary_color = '#ff6b9d';
        $settings->secondary_color = '#ffb6c1';
        $settings->accent_color = '#e84393';
        
        // SEO
        $settings->meta_description = 'A personal journey through love, travel, and culinary adventures.';
        $settings->meta_keywords = 'love, travel, cooking, blog, personal';
        
        // Return specific setting if key is provided
        if ($key !== null) {
            return isset($settings->$key) ? $settings->$key : null;
        }
        
        // Return all settings
        return $settings;
    }
}