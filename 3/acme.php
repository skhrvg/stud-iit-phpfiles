<?PHP
$url = "http://acme.com";
$input = @file_get_contents($url) or die("Could not access file: $url");
$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
$input = str_replace("=\"//", "=\"http://", $input);
$input = str_replace("=\"/", "=\"" . $url . "/", $input);
if (preg_match_all("/$regexp/siU", $input, $matches, PREG_SET_ORDER)) {
  foreach ($matches as $match) {
    if (strpos($match[2], "http://") === false) {
      $input = str_replace($match[2], $url . "/" . $match[2], $input);
    }
    $input = str_replace($match[3], $match[2], $input);
    // echo $match[2] . "-" . $match[3] . "\n";
  }
}
echo $input;
