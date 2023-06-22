<?php

namespace App\Controller;

class HomeController extends AppController
{
    public function initialize(): void
    {
        $this->viewBuilder()->setLayout('myLayout');
    }

    public function index()
    {
        $log = "kew";
        $this->set("log", $log);
    }

    public function about()
    {

    }

    public function playground()
    {
        $counter = 0;
        $this->set("counter", $counter);
    }

}

?>