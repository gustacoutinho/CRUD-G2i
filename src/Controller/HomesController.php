<?php
declare(strict_types=1);

namespace App\Controller;

class HomesController extends AppController
{
     public function home()
     {
        $this->viewBuilder()->setLayout('blog');
     }
}