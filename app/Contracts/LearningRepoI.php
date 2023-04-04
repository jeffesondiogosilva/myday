<?php

namespace App\Contracts;


interface LearningRepoI {

    public function getAll();
    public function find($id);
    public function create($id);
    public function update($data);


}