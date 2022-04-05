<?php
function error($errorText, $gobackURL) {
$htmlError="
<html><head><title>error</title></head><body><h1>an error occurred </h1><p>
".$errorText."
</p><a href=\"".$gobackURL."\">go back</a></body></html>
";
return $htmlError;
}
?>