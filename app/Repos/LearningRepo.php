<?php

namespace App\Repos;

use App\Contracts\LearningRepoI;
use App\Learning;

class LearningRepo implements LearningRepoI{

    protected $model;

    public function __construct(LearningRepo $model){

        $this->model = $model;
    }
}