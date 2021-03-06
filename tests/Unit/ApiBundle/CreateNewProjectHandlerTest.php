<?php

namespace Tests\Unit\ApiBundle;

use ApiBundle\Command\CreateNewProjectCommand;
use ApiBundle\Command\Handler\CreateNewProjectHandler;
use ApiBundle\Event\CreatedNewProjectEvent;
use PHPUnit\Framework\TestCase;
use Tests\Common\Mock\EventBusMock;
use Tests\Common\Mock\ProjectInMemoryRepository;

class CreateNewProjectHandlerTest extends TestCase
{
    /**
     * @test
     */
    public function raiseCreatedNewProjectEvent()
    {
        $eventBus = new EventBusMock();
        $projectRepository = new ProjectInMemoryRepository();
        $handler = new CreateNewProjectHandler($eventBus, $projectRepository);
        $command = new CreateNewProjectCommand('Project name');

        $handler->handle($command);

        $this->assertInstanceOf(CreatedNewProjectEvent::class, $eventBus->getRaised()[0]);
        $this->assertEquals('Project name', $eventBus->getRaised()[0]->name());
    }
}