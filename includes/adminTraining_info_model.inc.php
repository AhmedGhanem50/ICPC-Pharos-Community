<?php
declare(strict_types=1);

function get_problems_names(object $pdo, $training_id)
{
    $query = "SELECT problems.problemname FROM problems INNER JOIN training_content ON problems.id = training_content.problemid WHERE training_content.trainingid=:training_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_id", $training_id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_students(object $pdo, $training_id)
{
    $query = "SELECT users.username FROM users INNER JOIN students ON users.id = students.userid WHERE students.trainingid=:training_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_id", $training_id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}