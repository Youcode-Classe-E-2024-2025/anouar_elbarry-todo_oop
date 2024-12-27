<?php

class Task
{
    protected $id ;
    protected $taskname;
    protected $taskdesc;
    protected $taskstatus;
    protected $taskpriority;
    protected $taskstart; // date debut d'une tache
    protected $taskfin; // date fin d'une tache

    public function __construct($name, $desc, $status, $priority, $start, $fin)
    {
        $this->setTaskName($name);
        $this->setTaskDesc($desc);
        $this->setTaskStatus($status);
        $this->setTaskPriority($priority);
        $this->setTaskStart($fin);
        $this->setTaskFin($start);
    }
    public static function getAllTask($db){
return $db->query("select * from task ")->fetchAll();
    }

    public static function getTaskById($id,$db){
        return $db->query("select * from task where id = :id ",['id'=>$id])->fetch();
    }

    public static function updateTask($id,$task,$db){
        // $db->
    }
    // SET
    public function setTaskName($name)
    {
        $this->taskname = $name;
    }
    public function setTaskDesc($desc)
    {
        $this->taskdesc = $desc;
    }
    public function setTaskStatus($status)
    {
        $this->taskstatus = $status;
    }
    public function setTaskPriority($priority)
    {
        $this->taskpriority = $priority;
    }
    public function setTaskStart($start)
    {
        $this->taskstart = $start;
    }
    public function setTaskFin($fin)
    {
        $this->taskfin = $fin;
    }

    // GET
    public function getTaskName()
    {
        return $this->taskname;
    }
    public function getTaskDesc()
    {
        return $this->taskdesc;
    }
    public function getTaskStatus()
    {
        return $this->taskstatus;
    }
    public function getTaskPriority()
    {
        return $this->taskpriority;
    }
    public function getTaskStart()
    {
        return $this->taskstart;
    }
    public function getTaskFin()
    {
        return $this->taskfin;
    }



}