<?php
	// CLIENT ID
	$clientID = "YOUR TWITCH CLIENT ID";

	// FUNCTIONS
	function checkLive($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$check = $json["stream"];
		if($check == "")
		{
			$check = 0;
		}
		else
		{
			$check = 1;
		}
		return $check;
	}
	
	function getViewers($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$viewers = $json["stream"]["viewers"];
		return $viewers;
	}
	
	function getGame($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$game = $json["stream"]["game"];
		return $game;
	}
	
	function getFollowers($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$followers = $json["stream"]["channel"]["followers"];
		return $followers;
	}
	
	function totalViews($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$views = $json["stream"]["channel"]["views"];
		return $views;
	}
	
	function getStatus($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$status = $json["stream"]["channel"]["status"];
		return $status;
	}
	
	function isPartner($username)
	{
		$api_url = "https://api.twitch.tv/kraken/streams/$username?client_id=$clientID";
		$json = json_decode(file_get_contents($api_url), true);
		$partner = $json["stream"]["channel"]["partner"];
		return $partner;
	}
?>