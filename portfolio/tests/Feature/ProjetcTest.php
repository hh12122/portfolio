<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProjetcTest extends TestCase
{

    public function test_project_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/projects');

        $response->assertOk();
    }
public function test_can_update_project(): void
{
    $skill = Skill::factory()->create();
    $project = Project::factory()->create(['skill_id'=>$skill->id]);
    $this->assertNotEmpty($project->project_url);
    $this->assertDatabaseHas('projects', [
        'id' => $project->id,
        'project_url' => $project->project_url,
    ]);
  // Create and authenticate a user
  $user = User::factory()->create();
  $this->actingAs($user);
    $data = [
        'name'=>'test project',
        'skill_id'=>$skill->id
    ];
    $response = $this->putJson("/projects/{$project->id}", $data);
    $this->assertDatabaseHas('projects', ['skill_id' => $skill->id]);
}
public function test_can_delete_project(): void
{
    $project = Project::factory()->create();
  // Create and authenticate a user
  $user = User::factory()->create();
  $this->actingAs($user);
    $response = $this->deleteJson("/projects/{$project->id}");

    $this->assertDatabaseMissing('projects', ['id' => $project->id]);
}
}
