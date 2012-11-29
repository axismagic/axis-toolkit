<?php
/**
 * @author Ivan Voskoboynyk
 */

namespace Axis\Toolkit;

class ArrayUtils
{
  /**
   * Tells if an array is associative
   *
   * @param $array array
   * @return bool
   */
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