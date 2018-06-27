<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details for WIIRIS Quizzes local plugin.
 * This plugin declares all the dependencies on all Wiris Quizzes question types.
 *
 * @package    local
 * @subpackage moodlemootbehattest
 * @author  Diana Vallverdú
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2018062000;
$plugin->requires = 2011060313;
$plugin->maturity = MATURITY_STABLE;
$plugin->component = 'local_custombehattests';