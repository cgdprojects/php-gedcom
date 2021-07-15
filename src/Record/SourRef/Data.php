<?php
/**
 * php-gedcom.
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @license         MIT
 *
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace Record\SourRef;

class Data extends \Gedcom\Record
{
    /**
     * string entry_recording_date.
     */
    protected $_date = null;
    /**
     * string text_from_source.
     */
    protected $_text = null;
}