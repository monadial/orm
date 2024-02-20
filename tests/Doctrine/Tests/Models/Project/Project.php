<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\Project;

class Project
{
    /**
     * @var ProjectId
     */
    private $id;

    /**
     * @var ProjectName
     */
    private $name;

    public function __construct(ProjectId $id, ProjectName $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
}
