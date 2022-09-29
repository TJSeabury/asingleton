<?php

namespace ArdentIntent\Asingleton;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Extend this class to add singleton-ness to your desired class.
 */
abstract class AbstractSingleton
{
  private static $_instances = array();

  public static function getInstance()
  {
    $class = get_called_class();
    if (!isset(self::$_instances[$class])) {
      self::$_instances[$class] = new $class();
    }
    return self::$_instances[$class];
  }

  abstract protected function __construct();
}
