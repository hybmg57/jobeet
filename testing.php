<?php
$search = "jobeet_affiliate";
$search = "jobeet_category_affiliate";
$search = "jobeet_job";

$replacePairs = Array(
"[#/(.?)#e]" => "'::'.strtoupper('\1')",
"[/(^|_|-)+(.)/e]" => "strtoupper('\2')"
);

function pregtr($search, $replacePairs)
{
  $newReplacePairs = array_combine(array_map(function($key) {
    return rtrim($key, 'e');
  }, array_keys($replacePairs)), $replacePairs);

  return preg_replace_callback(array_keys($newReplacePairs), function($matches) use ($newReplacePairs){
    array_values($newReplacePairs);
  }, $search);
}

//$replaceResults = preg_match("#e", array_keys($replacePairs));
//var_dump($replaceResults);
 echo pregtr($search, $replacePairs);