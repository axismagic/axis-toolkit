<?php
/**
 * @author Ivan Voskoboynyk
 */

namespace Axis\Toolkit;

use Axis\Toolkit\StringTransliterator;

class StringUtils
{
  /**
   * Replaces non-english letters by their ascii analogues
   *
   * @param string $string
   * @return string
   */
  static public function transliterize($string)
  {
    return StringTransliterator::transliterize($string);
  }

  /**
   * Replaces all url-unsafe symbols with '-'
   *
   * @param string $text
   * @param string $replacement
   * @return string
   */
  static public function slugify($text, $replacement = '-')
  {
    // replace non letter or digits by "-"
    $text = preg_replace('#[^\\pL\d]+#u', $replacement, $text);

    // trim
    $text = trim($text, $replacement);

    // transliterate
    $text = static::transliterize($text);

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('#[^-\w]+#', '', $text);

    return $text;
  }
}
