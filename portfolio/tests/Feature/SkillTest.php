<?php

namespace Tests\Feature;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SkillTest extends TestCase
{

    public function test_skill_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/skills');

        $response->assertOk();
    }
public function test_can_update_skill(): void
{
    $skill = Skill::factory()->create();
  // Create and authenticate a user
  $user = User::factory()->create();
  $this->actingAs($user);
    $data = [
        'name' => 'Updated skill',
    ];
    $response = $this->putJson("/skills/{$skill->id}", $data);
    $this->assertDatabaseHas('skills', ['name' => 'Updated skill']);
}
public function test_can_delete_skill(): void
{
    $skill = Skill::factory()->create();
  // Create and authenticate a user
  $user = User::factory()->create();
  $this->actingAs($user);
    $response = $this->deleteJson("/skills/{$skill->id}");

    $this->assertDatabaseMissing('skills', ['id' => $skill->id]);
}
}
