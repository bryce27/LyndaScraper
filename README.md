<h1>LyndaScraper</h1>

Use the included files and instructions to download the videos of any Lynda Course.


<h3>Instructions:</h3>

This script is still in its early stages. It needs some TLC to work.

If you have not already, navigate to the lynda page that contains all the videos you want to download.

Open the chrome extension "HTTP Trace" and leave it open in the background.

Run the included script (clickVideos.js) on the page using the console tab in chrome developer tools.

This will play every video on the page so that HTTP Trace can capture the GET requests.

If it goes to slow or too fast, adjust the time interval in the script.

Once every video has played, copy all of the output in the HTTP Trace window with Cmd->A and paste it into requests.txt.

Make sure that two text files exist in the same directory of this file: "requests.txt" and "urls.txt".

Run the python script “RequestParser.py”.

Open firefox and open the extention "DownloadThemAll!". Open the DownloadThemAll Manager. Right click in the window.

Right click in the window. Advanced->Import from File. Choose urls.txt. Check all of the files and start the download.
