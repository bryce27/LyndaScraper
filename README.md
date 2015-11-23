<h1>LyndaScraper</h1>

Use the included files and instructions to download the videos of any Lynda Course.

<h3>Resources/Materials</h3>
<ul>
<li>”Trace HTTP” chrome extension</li>
<li>”DownloadThemAll” firefox extension</li>
<li>A Lynda.com account</li>
</ul>

<h3>Instructions:</h3>

<ul>
<li>This is still in its early stages. It needs some TLC to work.</li>
<li>If you have not already, navigate to the Lynda course that contains all the videos you want to download.</li>
<li>Open the chrome extension "HTTP Trace" and leave it open in the background.</li>
<li>Run the included script (clickVideos.js) on the page using the console tab in chrome developer tools. (You can just copy and paste the script)</li>
<li>This will play every video on the page so that HTTP Trace can capture the GET requests.</li>
<li>If it goes to slow or too fast, adjust the time interval in the script. (currently set to 5 seconds). It is safer to keep the time long. The request for the actual video file can take a few seconds to show up in HTTP Trace.</li>
<li>Once every video has played, copy all of the output in the HTTP Trace window with Cmd->A and paste it into requests.txt.</li>
<li>Make sure that "requests.txt" and "urls.txt" are in the same directory as “RequestParser.py”.</li>
<li>Run the python script “RequestParser.py”.</li>
<li>Open firefox and open the extension "DownloadThemAll!". Open the DownloadThemAll Manager. </li>
<li>Right click in the window. Click Advanced->Import from File. Choose urls.txt. Check all of the files and start the download.</li>
</ul>