<?php 

namespace app\core\exception;

class NotFoundException extends \Exception
{
    protected $message = 'Page not fount';
    protected $code = 404;   
}