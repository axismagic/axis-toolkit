<?php
/**
 * @author io
 */

namespace Axis\Toolkit;

class ArrayUtils
{
  public static function isAssociative($array)
  {
    foreach (array_keys($array) as $key)
    {
      if (!is_int($key))
      {
        return true;
      }
    }
    return false;
  }
}