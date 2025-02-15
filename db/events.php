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
 * Collapsed Topics Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    format_topcoll
 * @copyright  &copy; 2017-onwards G J Barnard based upon work done by Marina Glancy.
 * @author     G J Barnard - {@link https://moodle.org/user/profile.php?id=442195}
 * @link       https://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// List of observers.
$observers = [
    [
        'eventname' => '\core\event\course_content_deleted',
        'callback' => '\format_topcoll\observer::course_content_deleted',
    ],
    [
        'eventname' => '\core\event\role_allow_view_updated',
        'callback' => '\format_topcoll\observer::role_allow_view_updated',
    ],
    [
        'eventname' => '\core\event\role_updated',
        'callback' => '\format_topcoll\observer::role_updated',
    ],
    [
        'eventname' => '\core\event\role_deleted',
        'callback' => '\format_topcoll\observer::role_deleted',
    ],
    [
        'eventname' => '\core\event\user_enrolment_created',
        'callback' => '\format_topcoll\observer::user_enrolment_created',
    ],
    [
        'eventname' => '\core\event\user_enrolment_updated',
        'callback' => '\format_topcoll\observer::user_enrolment_updated',
    ],
    [
        'eventname' => '\core\event\user_enrolment_deleted',
        'callback' => '\format_topcoll\observer::user_enrolment_deleted',
    ],
    [
        'eventname' => '\core\event\course_module_created',
        'callback' => '\format_topcoll\observer::course_module_created',
    ],
    [
        'eventname' => '\core\event\course_module_updated',
        'callback' => '\format_topcoll\observer::course_module_updated',
    ],
    [
        'eventname' => '\core\event\course_module_deleted',
        'callback' => '\format_topcoll\observer::course_module_deleted',
    ],
];
