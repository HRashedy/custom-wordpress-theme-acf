<?php
add_action('rest_api_init', function () {
    register_rest_route('ziyad/v1','/portfolio',[
        'methods'=>'GET',
        'callback'=>function(){
            return get_posts(['post_type'=>'portfolio']);
        }
    ]);
});
