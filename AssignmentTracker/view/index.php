<?php
require('model/database.php');
require('model/assignmentsDB.php');


$assignmentID = filter_input(INPUT_POST, 'assignment_id', FILTER_VALIDATE_INT);
$desc = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$courseName = filter_input(INPUT_POST, 'courseName', FILTER_SANITIZE_STRING);

$courseID = filter_input(INPUT_POST, 'courseID', FILTER_VALIDATE_INT);

if (!$courseID) {
    $courseID = filter_input(INPUT_GET, 'courseID', FILTER_VALIDATE_INT);
}

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_VALIDATE_INT);
    if (!$action) {
        $action = 'listAssignments';
    }
}

switch ($action) {
    default:
        //$courseName = getCourseName($courseID);
        //$courses = getCourses();
        //$assignments = getAssignmentsByCourse($courseID);
        include('view/assignmentList.php');
}
