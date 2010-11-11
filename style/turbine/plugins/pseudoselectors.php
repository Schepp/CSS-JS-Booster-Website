<?php

/**
 * This file is part of Turbine
 * http://github.com/SirPepe/Turbine
 * 
 * Copyright Peter Kröner
 * Licensed under GNU LGPL 3, see license.txt or http://www.gnu.org/licenses/
 */


/**
 * CSS3 pseudo selectors
 * 
 * Usage: Nobrainer, just switch it on
 * Example: -
 * Status: Stable
 * Version: 1.0
 * 
 * 
 * @param array &$parsed
 * @return void
 */
function pseudoselectors(&$parsed){
	//if(ie){
		global $cssp;
		// Add the behavior
		$htc_path = rtrim(dirname($_SERVER['SCRIPT_NAME']),'/').'/plugins/pseudoselectors/pseudoselectors.htc';
		$parsed['global']['html']['behavior'][] = 'url(' . $htc_path . ')';
		// Regex matching the pseudo classes
		$pseudoselectorpattern = '/:(root|first-child)/i';
		// The list of pseudo class replacements
		$replacements = array(
			':root' => '.pseudoselectorroot',
			':first-child' => '.pseudoselectorfirstchild',
			':last-child' => '.pseudoselectorlastchild'
		);
		foreach($parsed as $block => $css){
			foreach($parsed[$block] as $selector => $styles){
				if($selector != '@font-face' && preg_match_all($pseudoselectorpattern, $selector, $matches)){
					// The new element will be inserted after $oldselector
					$oldselector = $selector;
					// Replace the pseudo classes with normal classes
					foreach($matches[0] as $pseudoselector){
						$selector = str_replace($pseudoselector, $replacements[$pseudoselector], $selector);
					}
					// Insert as a new element
					$cssp->insert(array(
						$selector => $styles
					), $block, $oldselector);
				}
			}
		}
	//}
}


/**
 * Register the plugin
 */
$cssp->register_plugin('before_compile', 0, 'pseudoselectors');


?>
