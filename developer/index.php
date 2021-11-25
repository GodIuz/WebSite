<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;

if($var_country_code == "GR"||($var_country_code == "CY"))
{
header('Location: http://dev.notyez.com/gr/');
}
else
{
header('Location: http://dev.notyez.com/en/');
}
?>
