<?php 
require_once __DIR__.'/vendor/autoload.php';
use Ramsey\Uuid\Uuid;

session_start();
$myuuid = Uuid::uuid4();

if(!isset($_SESSION['u_user']))
{
    $_SESSION['u_user'] = $myuuid;
}

//Success message function
function SuccessMsg()
{
    $status = '';
    if(isset($_SESSION['SuccessMsg']))
    {
        $status = '<div class="alert alert-success">'.htmlentities($_SESSION['SuccessMsg']).'</div>';
    }

    return $status;

}
//Error message function
function ErrorMsg()
{
    $status = '';
    if(isset($_SESSION['ErrorMsg']))
    {
        $status = '<div class="alert alert-danger">'.htmlentities($_SESSION['ErrorMsg']).'</div>';
    }

    return $status;

}