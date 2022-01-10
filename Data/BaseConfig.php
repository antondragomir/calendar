<?php
namespace Data;
class BaseConfig {
   
   static $db = [
      "host" => "database",
      "user" => "docker",
      "password" => "docker"
   ];

   static $main = [
      "defaultlang" => "RU",
      "datapath" => "/var/www/datery/data",
      "daytime_start" => "7",
      "daytime_stop" => "20",
      "cookies_hash" => '_datery_h',
      "vendorpath" => "/var/www/datery/vendor"
   ];

   static $vendor = [
      // Smarty - the compiling PHP template engine
      "smarty" => "/var/www/datery/vendor/smarty/"
   ];
}
