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


/** File for GetTaskStoryTasksAction
 *
 *  This file just contains {@link GetUserTasksAction}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage facade
 * @author Jorge López Fernández <jlopez@igalia.com>
 */

include_once('phpreport/model/facade/action/Action.php');
include_once('phpreport/model/dao/DAOFactory.php');
include_once('phpreport/model/vo/TaskStoryVO.php');


/** Get Task Story Tasks Action
 *
 *  This action is used for retrieving all Tasks related to a Task Story.
 *
 * @package PhpReport
 * @subpackage facade
 * @author Jorge López Fernández <jlopez@igalia.com>
 */
class GetTaskStoryTasksAction extends Action{

    /** The Task Story Id
     *
     * This variable contains the id of the Task Story whose Tasks we want to retieve.
     *
     * @var int
     */
    private $taskStoryId;

    /** GetTaskStoryTasksAction constructor.
     *
     * This is just the constructor of this action.
     *
     * @param int $taskStoryId the id of the Task Story whose Tasks we want to retieve.
     */
    public function __construct($taskStoryId) {
        $this->taskStoryId=$taskStoryId;
        $this->preActionParameter="GET_TASK_STORY_REPORTS_PREACTION";
        $this->postActionParameter="GET_TASK_STORY_REPORTS_POSTACTION";

    }

    /** Specific code execute.
     *
     * This is the function that contains the code that retrieves the Tasks from persistent storing.
     *
     * @return array an array with value objects {@link TaskVO} with their properties set to the values from the rows
     * and ordered ascendantly by their database internal identifier.
     */
    protected function doExecute() {

    $dao = DAOFactory::getTaskDAO();

        return $dao->getByTaskStoryId($this->taskStoryId);

    }

}


/*//Test code;

$action= new GetTaskStoryTasksAction(1);
var_dump($action);
$result = $action->execute();
var_dump($result);
*/
