<?php
final class Model{
  static $model;

  public static function get(){
    if(!isset($model)){
      $model = new MyModel();
    }
    return $model;
  }
}
