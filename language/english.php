<?php
/*	Project:	EQdkp-Plus
 *	Package:	Asherons Call II game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Alchemist',
		2	=> 'Berserker',
		3	=> 'Bounty Hunter',
		4	=> 'Claw Bearer',
		5	=> 'Defender',
		6	=> 'Drudge',
		7	=> 'Elementalist',
		8   => 'Enchanter',
		9   => 'Feral Intendant',
		10  => 'Healer',
		11  => 'Hieromancer',
		12	=> 'Hive Keeper',
		13  => 'Invoker',
		14  => 'Juggernaut',
		15	=> 'Mentalist',
		16	=> 'Raider',
		17	=> 'Ranger',
		18	=> 'Sage',
		19	=> 'Sorcerer',
		20	=> 'Tactician',
		21	=> 'Templar',
		22	=> 'Zealot',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Drudge',
		2	=> 'Empyrean',
		3	=> 'Human',
		4	=> 'Lugian',
		5	=> 'Tumerok',
	),
	'lang' => array(
		'ac2'							=> 'Asherons Call 2',

		// Profile information
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Asherons Call 2 Settings',
	),
);

?>