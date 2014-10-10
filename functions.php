<?php
/*======================================================================*\
|| #################################################################### ||
|| # PHP Utilities Alpha 2                                            # ||
|| # ---------------------------------------------------------------- # ||
|| #         Useful Everyday PHP classes, that work as one!           # ||
|| # ---------------------------------------------------------------- # ||
|| #     All PHP code in this file is ©2014 VisionWare Studios        # ||
|| #        This script is released under The MIT License.            # ||
|| #                                                                  # ||
|| #  --------------- PHP VERSION 5.5.0 OR GREATER -----------------  # ||
|| #                                                                  # ||
|| #                  http://visionware-studios.com                   # ||
|| #################################################################### ||
\*======================================================================*/

function redirect_to($location)
{
    header('Location: ' . $location);
}

function refValues($arr)
{
    if (strnatcmp(phpversion(),'5.3') >= 0)
    {
        $refs = array();

        foreach ($arr as $key => $value)
        {
            $refs[$key] = &$arr[$key];
        }
        return $refs;
    }
    return $arr;
}

function arr_vals($array)
{
  return array_values($array);
}

function arr_keys($array)
{
  return array_keys($array);
}

/**
* This is a future feature that is currently still being developed.
*/
function gen_key_string()
{
  $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $seg_chars = 5;
  $num_segs = 4;
  $key_string = '';

  for ($i = 0; $i < $num_segs; $i++)
  {
    $segment = '';
    for ($j = 0; $j < $seg_chars; $j++)
    {
      $segment .= $tokens[rand(0, 35)];
    }

    $key_string .= $segment;
    if ($i < ($num_segs - 1))
    {
      $key_string .= '-';
    }
  }

  return $key_string;
}
