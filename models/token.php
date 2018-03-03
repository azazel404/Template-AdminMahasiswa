<?php

class token{

  public static function generate(){
    return session::set('token',sha1(uniqid(rand(), true)));
  }

  public static function show($token){
    if ($token === session::get('token')) {
      return true;
    }else {
      return false;
    }
  }


}



 ?>
