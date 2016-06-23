<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * @Script Runescape Stats Image Generator                             *
 * @Author Tuxedo                                                      *
 * @Description You call the file like "file.php?user=(Username)" and  *
 * it looks up and formats the users levels of OSRS into a picture as  *
 * like how it shows it in the game.                                   *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
 Get the font here http://www.fonts101.com/fonts/view/Standard/57559/Rupee_Foradian 
 and store it in the same directory as the class and get the base image here 
 http://i.imgur.com/Xm5vS8y.png and store it in a folder named img/ and name it
 base.png and you're all good to go :)
*/

class stats
{
	/* * * * * * * * * * * * * * * *\
	 * @Class stats                *
	 * @Author Tuxedo              *
	 * @Description fetch a users  *
	 * stats and format them into  *
	 * a pretty little picture.    *
	\* * * * * * * * * * * * * * * */
	public function statPic( $user ) {
		# fetch the base image and create a resource from it
		$img = imagecreatefrompng('img/base.png');
		
		#create the color for the text
		$yellow = imagecolorallocate($img, 255, 255, 51);
		
		# fetch users levels
		$level = $this->highScore($user);
		
		# Row 1
		//attack
		imagettftext($img, 9, 0, 72, 22, $yellow, './font.ttf', $level['attack']['level']);
		imagettftext($img, 9, 0, 88, 35, $yellow, './font.ttf', $level['attack']['level']);
		//hitpoints
		imagettftext($img, 9, 0, 155, 22, $yellow, './font.ttf', $level['hitpoints']['level']);
		imagettftext($img, 9, 0, 172, 35, $yellow, './font.ttf', $level['hitpoints']['level']);
		//mining
		imagettftext($img, 9, 0, 235, 22, $yellow, './font.ttf', $level['mining']['level']);
		imagettftext($img, 9, 0, 252, 35, $yellow, './font.ttf', $level['mining']['level']);
		# Row 2
		//strength
		imagettftext($img, 9, 0, 72, 60, $yellow, './font.ttf', $level['strength']['level']);
		imagettftext($img, 9, 0, 88, 73, $yellow, './font.ttf', $level['strength']['level']);
		//agility
		imagettftext($img, 9, 0, 155, 60, $yellow, './font.ttf', $level['agility']['level']);
		imagettftext($img, 9, 0, 172, 73, $yellow, './font.ttf', $level['agility']['level']);
		//smithing
		imagettftext($img, 9, 0, 235, 60, $yellow, './font.ttf', $level['smithing']['level']);
		imagettftext($img, 9, 0, 252, 73, $yellow, './font.ttf', $level['smithing']['level']);
		# Row 3
		//defence
		imagettftext($img, 9, 0, 72, 98, $yellow, './font.ttf', $level['defence']['level']);
		imagettftext($img, 9, 0, 88, 111, $yellow, './font.ttf', $level['defence']['level']);
		//herblore
		imagettftext($img, 9, 0, 155, 98, $yellow, './font.ttf', $level['herblore']['level']);
		imagettftext($img, 9, 0, 172, 111, $yellow, './font.ttf', $level['herblore']['level']);
		//fishing
		imagettftext($img, 9, 0, 235, 98, $yellow, './font.ttf', $level['fishing']['level']);
		imagettftext($img, 9, 0, 252, 111, $yellow, './font.ttf', $level['fishing']['level']);
		# Row 4
		//ranged
		imagettftext($img, 9, 0, 73, 136, $yellow, './font.ttf', $level['ranged']['level']);
		imagettftext($img, 9, 0, 88, 149, $yellow, './font.ttf', $level['ranged']['level']);
		//thieving
		imagettftext($img, 9, 0, 155, 136, $yellow, './font.ttf', $level['thieving']['level']);
		imagettftext($img, 9, 0, 172, 149, $yellow, './font.ttf', $level['thieving']['level']);
		//cooking
		imagettftext($img, 9, 0, 235, 136, $yellow, './font.ttf', $level['cooking']['level']);
		imagettftext($img, 9, 0, 252, 149, $yellow, './font.ttf', $level['cooking']['level']);
		# Row 5
		//prayer
		imagettftext($img, 9, 0, 72, 174, $yellow, './font.ttf', $level['prayer']['level']);
		imagettftext($img, 9, 0, 88, 187, $yellow, './font.ttf', $level['prayer']['level']);
		//crafting
		imagettftext($img, 9, 0, 155, 174, $yellow, './font.ttf', $level['crafting']['level']);
		imagettftext($img, 9, 0, 172, 187, $yellow, './font.ttf', $level['crafting']['level']);
		//firemaking
		imagettftext($img, 9, 0, 235, 174, $yellow, './font.ttf', $level['firemaking']['level']);
		imagettftext($img, 9, 0, 252, 187, $yellow, './font.ttf', $level['firemaking']['level']);
		# Row 6
		//magic
		imagettftext($img, 9, 0, 72, 211, $yellow, './font.ttf', $level['magic']['level']);
		imagettftext($img, 9, 0, 88, 224, $yellow, './font.ttf', $level['magic']['level']);
		//fletching
		imagettftext($img, 9, 0, 155, 211, $yellow, './font.ttf', $level['fletching']['level']);
		imagettftext($img, 9, 0, 172, 224, $yellow, './font.ttf', $level['fletching']['level']);
		//woodcutting
		imagettftext($img, 9, 0, 235, 211, $yellow, './font.ttf', $level['woodcutting']['level']);
		imagettftext($img, 9, 0, 252, 224, $yellow, './font.ttf', $level['woodcutting']['level']);
		# Row 7
		//runecraft
		imagettftext($img, 9, 0, 72, 248, $yellow, './font.ttf', $level['runecraft']['level']);
		imagettftext($img, 9, 0, 88, 261, $yellow, './font.ttf', $level['runecraft']['level']);
		//slayer
		imagettftext($img, 9, 0, 155, 248, $yellow, './font.ttf', $level['slayer']['level']);
		imagettftext($img, 9, 0, 172, 261, $yellow, './font.ttf', $level['slayer']['level']);
		//farming
		imagettftext($img, 9, 0, 235, 248, $yellow, './font.ttf', $level['farming']['level']);
		imagettftext($img, 9, 0, 252, 261, $yellow, './font.ttf', $level['farming']['level']);
		# Row 8
		//construction
		imagettftext($img, 9, 0, 72, 285, $yellow, './font.ttf', $level['construction']['level']);
		imagettftext($img, 9, 0, 88, 299, $yellow, './font.ttf', $level['construction']['level']);
		//hunter
		imagettftext($img, 9, 0, 155, 285, $yellow, './font.ttf', $level['hunter']['level']);
		imagettftext($img, 9, 0, 172, 299, $yellow, './font.ttf', $level['hunter']['level']);
		//total levels
		imagettftext($img, 9, 0, 201, 299, $yellow, './font.ttf', $level['overall']['level']);
		
		# return the image
		imagepng($img);
	}

	public function highScore( $user ) {
		$order = array(
			"Overall", "Attack", "Defence", 
			"Strength", "Hitpoints", "Ranged", 
			"Prayer", "Magic", "Cooking", "Woodcutting", 
			"Fletching", "Fishing", "Firemaking", 
			"Crafting", "Smithing", "Mining", 
			"Herblore", "Agility", "Thieving", 
			"Slayer", "Farming", "Runecraft", 
			"Hunter", "Construction", "Summoning"
		); 
		$get = file_get_contents("http://services.runescape.com/m=hiscore_oldschool/index_lite.ws?player={$user}");
		$get = explode("\n", $get);
		$i = 0;
		foreach ($order as $value)
		{
			$temp  = explode(",", $get[$i]);
			$rank  = (empty($temp[0]))?'':$temp[0];
			$level = (empty($temp[0]))?'':$temp[1];
			$exp   = (empty($temp[2]))?'':$temp[2];
			$stats[strtolower($value)] = array("rank" => $rank, "level" => $level, "exp" => $exp);
			$i++;
		}
		return $stats;
	}
}
?>
