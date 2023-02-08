<?php

function getAssignmentsByCourseID($courseID)
{
    global $db;
    if ($courseID) {
        $query = "SELECT assignments.id, assignments.description, 
        (SELECT courses.courseName FROM courses WHERE courses.courseID = assignments.courseID) as courseName
        FROM assignments
        WHERE EXISTS (SELECT 1 FROM courses WHERE courses.courseID = assignments.courseID AND courses.courseID = ?)";
    } else {
        $query = "SELECT assignments.id, assignments.description, 
        (SELECT courses.courseName FROM courses WHERE courses.courseID = assignments.courseID) as courseName
        FROM assignments
        WHERE EXISTS (SELECT 1 FROM courses WHERE courses.courseID = assignments.courseID)";
    }
    $statement = $db->prepare($query);
    $statement->bind_param("i", $courseID);
    $statement->execute();
    $assignments = $statement->fetch();
    $statement->close();
    return $assignments;
}

function deleteAssignment($assignmentID)
{
    global $db;
    $query = "DELETE FROM assignments WHERE id = ?";
    $statement = $db->prepare($query);
    $statement->bind_param("i", $assignmentID);
    $statement->execute();
    $statement->close();
}

function addAssignment($description, $courseID)
{
    global $db;
    $query = "INSERT INTO assignments (description, courseID) VALUES (?, ?)";
    $statement = $db->prepare($query);
    $statement->bind_param("si", $description, $courseID);
    $statement->execute();
    $statement->close();
}
