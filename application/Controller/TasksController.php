<?php
namespace Mini\Controller;

class TasksController
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/tasks/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
