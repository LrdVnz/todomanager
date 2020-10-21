<?php

class Connection
{

  public static function make($config)
  {
      return new mysqli(

      $config['connection'],

      $config['user'],

      $config['password'],

      $config['name']

    );
  }
}
