function initializeAds($file) {
  $fcontents = file_get_contents($file);
  $ad_array = explode("~",$fcontents);
  shuffle($ad_array);
  return $ad_array;
}
