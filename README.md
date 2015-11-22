<h1>LyndaScraper</h1>

Use the included files and instructions to download the videos of any Lynda Course.


<h3>Instructions:</h3>

<ul>
<li>This is still in its early stages. It needs some TLC to work.</li>
<li>If you have not already, navigate to the lynda page that contains all the videos you want to download.</li>
<li>Open the chrome extension "HTTP Trace" and leave it open in the background.</li>
<li>Run the included script (clickVideos.js) on the page using the console tab in chrome developer tools.</li>
<li>This will play every video on the page so that HTTP Trace can capture the GET requests.</li>
<li>If it goes to slow or too fast, adjust the time interval in the script.</li>
<li>Once every video has played, copy all of the output in the HTTP Trace window with Cmd->A and paste it into requests.txt.</li>
<li>Make sure that two text files exist in the same directory of this file: "requests.txt" and "urls.txt".</li>
<li>Run the python script “RequestParser.py”.</li>
<li>Open firefox and open the extention "DownloadThemAll!". Open the DownloadThemAll Manager. Right click in the window.</li>
<li>Right click in the window. Advanced->Import from File. Choose urls.txt. Check all of the files and start the download.</li>
</ul>
