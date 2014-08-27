<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('ac2')) {
	class ac2 extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.1';
		protected $this_game		= 'ac2';
		protected $types			= array('classes', 'races', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		protected $filters			= array();
		public $langs				= array('english');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false,
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Alchemist
						2 	=> 'all',		// Berserker
						3 	=> 'all',		// Bounty Hunter
						4 	=> 'all',		// Claw Bearer
						5 	=> 'all',		// Defender
						6 	=> 'all',		// Drudge
						7 	=> 'all',		// Elementalist
						8 	=> 'all',		// Enchanter
						9 	=> 'all',		// Feral Intendant
						10 	=> 'all',		// Healer
						11 	=> 'all',		// Hieromancer
						12 	=> 'all',		// Hive Keeper
						13 	=> 'all',		// Invoker
						14 	=> 'all',		// Juggernaut
						15 	=> 'all',		// Mentalist
						16 	=> 'all',		// Raider
						17 	=> 'all',		// Ranger
						18 	=> 'all',		// Sage
						19 	=> 'all',		// Sorcerer
						20 	=> 'all',		// Tactician
						21 	=> 'all',		// Templar
						22 	=> 'all',		// Zealot
					),
				),
			),
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
	}
}
?>