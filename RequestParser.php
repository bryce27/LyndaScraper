<?php

echo '<h1>Instructions: </h1>';
echo '<p>This script is still in its early stages. It needs some TLC to work.</p>';
echo '<p>Make sure that two text files exist in the same directory of this file: "requests.txt" and "urls.txt".</p>';
echo '<p>If you have not already, navigate to the lynda page that contains all the videos you want to download.</p>';
echo '<p>Open the chrome extension "HTTP Trace" and leave it open in the background.</p>';
echo '<p>Run the included script (clickVideos.js) on the page using the console tab in chrome developer tools.</p>';
echo '<p>This will play every video on the page so that HTTP Trace can capture the GET requests.</p>';
echo '<p>If it goes to slow or too fast, adjust the time interval in the script.</p>';
echo '<p>Once every video has played, copy all of the output in the HTTP Trace window with Cmd->A and paste it into requests.txt.</p>';
echo '<p>Refresh this page. It will parse requests.txt into a list of urls, which will be outputed to urls.txt.</p>';
echo '<p>Open firefox and open the extention "DownloadThemAll!". Open the DownloadThemAll Manager. Right click in the window.</p>';
echo '<p>Right click in the window. Advanced->Import from File. Choose urls.txt. Check all of the files and start the download.</p>';

$file = 'requests.txt';
$urls = array();

$output_string = '';

$handle = fopen($file, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if ((strpos($line,'GET https://files') !== false) || (strpos($line,'GET http://files') !== false)) {
    		$url = explode(" ", $line);
    		$urls[] = $url[1];
		}
    }
    foreach($urls as $url){
    	$output_string .= $url;
    }

    fclose($handle);
} else {
    echo '<h3>Problem opening the file</h3>';
}

$output_file = 'urls.txt';
file_put_contents($output_file, $output_string);

?>