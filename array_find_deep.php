<?php
  function array_find_deep($array, $search, $keys = array())
  {
    foreach($array as $key => $value) {
      if (is_array($value)) {
        $sub = array_find_deep($value, $search, array_merge($keys, array($key)));
        if (count($sub)) {
          return $sub;
        }
      } elseif ($value === $search) {
        return array_merge($keys, array($key));
      }
    }
  
    return array();
  }
