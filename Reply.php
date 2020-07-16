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

        file_put_contents('./log.txt',print_r([$_REQUEST,$_POST], true),FILE_APPEND);
    }
}
