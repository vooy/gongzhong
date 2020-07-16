<?php
/**
 * Created by PhpStorm.
 * User: songwenyao
 * Date: 2020/7/16
 * Time: 2:44 PM
 */

class Reply
{
    function __construct()
    {
        $post_data = file_get_contents("php://input");
        $xml = simplexml_load_string($post_data);

        file_put_contents('./log.txt',print_r([$_REQUEST, $post_data, $xml], true),FILE_APPEND);
    }
}
