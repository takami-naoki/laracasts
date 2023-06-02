<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Facades\Tests\Setup\ProjectFactory;
use Tests\TestCase;

class ActivityFeedTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function creating_a_project_generates_activity() {
        $project = ProjectFactory::create();

        $this->assertCount(1, $project->activity);
        $this->assertEquals('created', $project->activity[0]->description);
    }

    /** @test */
    function updating_a_project_generates_activity() {
        $project = ProjectFactory::create();

        $project->update(['title' => 'Changed']);
        $this->assertCount(2, $project->activity);
        $this->assertEquals($project->activity->last()->description, 'updated');
    }
}
