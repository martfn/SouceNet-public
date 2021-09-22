<div id="chatbox"><?php
setInterval (loadLog, 1500);	//Reload file every 2500 ms or x ms if you wish to change the second parameter
?></div>
if(file_exists("log.html") && filesize("log.html") > 0){
    
	$contents = file_get_contents("log.html");         
    echo $contents;
}
