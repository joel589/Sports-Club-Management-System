<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TeamController
 */
class TeamControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function delete_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $teams = \App\Models\Teams::factory()->create();

        $response = $this->get(route('delete.team', ['id' => $id]));

        $response->assertRedirect(route('view.team'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $teams = \App\Models\Teams::factory()->create();

        $response = $this->get(route('edit.team', ['id' => $id]));

        $response->assertOk();
        $response->assertViewIs('admin.teams.edit_team');
        $response->assertViewHas('editData');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function new_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('new.team'));

        $response->assertOk();
        $response->assertViewIs('admin.teams.add_team');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function save_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('save.team'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(route('view.team'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $teams = \App\Models\Teams::factory()->create();

        $response = $this->post(route('update.team', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(route('view.team'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function view_team_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $teams = \App\Models\Teams::factory()->times(3)->create();

        $response = $this->get(route('view.team'));

        $response->assertOk();
        $response->assertViewIs('admin.teams.view_team');

        // TODO: perform additional assertions
    }

    // test cases...
}
