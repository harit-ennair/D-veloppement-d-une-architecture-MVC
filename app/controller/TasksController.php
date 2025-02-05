<?php

include $_SERVER['DOCUMENT_ROOT'].'../vendor/autoload.php';

use Database\Database;
use App\Models\Tasks;

class TaskController {

    private $db;
    private $task;

    public function __construct() {

        
        $this->db = new Database();
        $this->task = new Tasks($this->db->getConnection());
    }

    public function createTask($user_id, $title, $description, $status) {
        $this->task->user_id = $user_id;
        $this->task->title = $title;
        $this->task->description = $description;
        $this->task->status = $status;
        // $this->task->created_at = date('Y-m-d H:i:s');
        // $this->task->updated_at = date('Y-m-d H:i:s');

        if ($this->task->create()) {
            echo "Task created successfully!";
        } else {
            echo "Failed to create task.";
        }
    }

    public function updateTask($id, $title, $description, $status) {
        $this->task->id = $id;
        $this->task->title = $title;
        $this->task->description = $description;
        $this->task->status = $status;
        // $this->task->updated_at = date('Y-m-d H:i:s');

        if ($this->task->update()) {
            echo "Task updated successfully!";
        } else {
            echo "Failed to update task.";
        }
    }

    public function listTasks($user_id) {
        $this->task->user_id = $user_id;
        $tasks = $this->task->read();

        // include 'views/task_list.php';
    }
}
