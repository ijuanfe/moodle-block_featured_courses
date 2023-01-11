<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Allows mobile Moodle App support.
 *
 * @package     block_featured_courses
 * @author      2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$addons = [
    'block_featured_courses' => [
        'handlers' => [
            'get_block_content' => [
                'delegate' => 'CoreBlockDelegate',
                'method' => 'core_block_get_dashboard_blocks',
                'displaydata' => [
                    'type' => 'prerendered'
                ],
                'styles' => [
                    'url' => $CFG->wwwroot . '/blocks/featured_courses/styles.css',
                    'version' => '2023011100'
                ]
            ]
        ],
        'lang' => [
            ['pluginname', 'block_featured_courses']
        ]
    ]
];
