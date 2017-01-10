<?php  
/**
 * 
 * PHP versions 3, 4 and 5
 *
 * LICENSE:
 * 
 * This file is part of PhotoLight.
 *
 * PhotoLight is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhotoLight is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhotoLight.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Website
 * @package   Photolight
 * @author    Thibaud Rohmer <thibaud.rohmer@gmail.com>
 * @copyright 2011 Thibaud Rohmer
 * @license   http://www.gnu.org/licenses/
 * @link      http://github.com/thibaud-rohmer/PhotoLight
 */

/*
	Configuration array
*/
$config = array(
	"path" => "photos",
	"thumbs_path" => "thumbs"
);


defined("LIBRARY_PATH")	 
	or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));  
defined("TEMPLATES_PATH")  
	or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));  

ini_set("error_reporting", "true");	 
error_reporting(E_ALL|E_STRCT);	 
?>