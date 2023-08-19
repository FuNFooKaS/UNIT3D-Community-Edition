<?php
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

use App\Http\Controllers\Staff\ModerationController;
use App\Http\Requests\Staff\UpdateModerationRequest;
use App\Models\Torrent;
use App\Models\User;

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrents = Torrent::factory()->times(3)->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.moderation.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.moderation.index');
    $response->assertViewHas('current');
    $response->assertViewHas('pending');
    $response->assertViewHas('postponed');
    $response->assertViewHas('rejected');

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        ModerationController::class,
        'update',
        UpdateModerationRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('staff.moderation.update', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
