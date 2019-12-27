# Get-Twitch
A Twitch API Wrapper for gathering information about a users live stream.

Make sure to include your Twitch ClientID in checkTwitch.php.

Reference: https://www.twitch.tv/settings/connections

# Functions
checkLive(string username)	|	 Returns 1 if live and 0 if not live.

getViewers(string username)	|	 Returns concurrent number of viewers.

getGame(string username)	|	 Returns current game.

getFollowers(string username)	|	 Returns total number of followers.

totalViews(string username)	|	 Returns total view count.

getStatus(string username)	|	 Returns stream title.

isPartner(string username)	|	 Returns 1 if Twitch Partner and 0 if not Twitch Partner.

# Example
<?php
	include 'checkTwitch.php';
	
	$online = checkLive(lirik);
	echo $online;
	
	echo "<br>";
	
	$viewCount = getViewers(lirik);
	echo $viewCount;
	
	echo "<br>";
	
	$gameName = getGame(lirik);
	echo $gameName;
	
	echo "<br>";
	
	$followCount = getFollowers(lirik);
	echo $followCount;
	
	echo "<br>";
	
	$status = getStatus(lirik);
	echo $status;
	
	echo "<br>";
	
	$partner = isPartner(lirik);
	echo $partner;
	
	echo "<br>";
	
	$totalViews = totalViews(lirik);
	echo $totalViews;
?>
