<?php

namespace ApiBundle\Repository;

use ApiBundle\Entity\ProjectEntity;

interface ProjectRepositoryInterface
{
    public function getById(int $id) : ProjectEntity;

    public function add(ProjectEntity $project) : ProjectEntity;
}