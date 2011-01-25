<?php
/*
 * Copyright (C) 2009 Igalia, S.L. <info@igalia.com>
 *
 * This file is part of PhpReport.
 *
 * PhpReport is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhpReport is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhpReport.  If not, see <http://www.gnu.org/licenses/>.
 */


/** File for SQLIncorrectTypeException
 *
 *  This file just contains {@link SQLIncorrectTypeException}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage Exception
 * @author Jorge López Fernández <jlopez@igalia.com>
 */

include_once('phpreport/util/IncorrectTypeException.php');

/** Exception for SQL query incorrect types
 *
 *  This is the exception thrown when an invalid value is passed to a SQL query.
 *
 * @package PhpReport
 * @subpackage Exception
 * @author Jorge López Fernández <jlopez@igalia.com>
 */

class SQLIncorrectTypeException extends IncorrectTypeException {

    /**#@+
     *  @ignore
     */

  public function __construct($message, $code = 0) {

    parent::__construct($message, $code);

    $this->message = "The value " . $message . " is not valid";
  }

    /**#@-*/

}
