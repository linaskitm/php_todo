<?php

namespace TaskManager;
use Cassandra\Date;
use PDO;
class Task
{
    protected $pdo;
    private $subject;
    private $priority;
    private $duedate;
    private $status = 0;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTask($task)
    {
        $this->subject = $task['subject'];
        $this->priority = $task['priority'];
        $this->duedate = $task['duedate'];

        $this->insertTask();
        $_SESSION['new_task'] = [
            $this->subject,
            $this->priority
        ];
    }

    private function insertTask()
    {
        try {
            $query = 'INSERT INTO `tasks` (`subject`, `priority`, `duedate`, `status`,`modified`)
                                    VALUES (:subject, :priority, :duedate, :status, NOW())';
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':subject', $this->subject, PDO::PARAM_STR);
            $stmt->bindParam(':priority', $this->priority, PDO::PARAM_STR);
            $stmt->bindParam(':duedate', $this->duedate, PDO::PARAM_STR);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/php_todo1');

        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function allTasks() {
        $statement = $this->pdo->prepare("SELECT * FROM `tasks`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteTask($id){
        $statement = $this->pdo->prepare("DELETE FROM `tasks` WHERE id=$id");
        $statement->execute();
        header('Location:/php_todo1');

    }

    public function updateTask($id){
        $this->status = 1;
        try{
            $query = "UPDATE `tasks` SET `status` = :status WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
//            $this->modiefiedDate($id);
            $stmt->execute();
            header('Location:/php_todo1');
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $conn=null;
    }

//    private function modiefiedDate($id)
//    {   $date = new \DateTime();
//        try {
//            $query = "UPDATE `tasks` SET `modified` = $date WHERE id = :id";
//            $stmt = $this->pdo->prepare($query);
//            $stmt->execute();
//            } catch (PDOException $e){
//                echo $e->getMessage();
//                }
//    }
}



