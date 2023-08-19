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

use App\Models\Torrent;
use App\Models\User;

test('bump torrent returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('bumpTorrent', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('bump torrent aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('bumpTorrent', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('freeleech token returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('freeleech_token', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('grant double up returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('torrent_doubleup', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('grant double up aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('torrent_doubleup', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('grant f l returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('torrent_fl', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('grant f l aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('torrent_fl', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('grant featured returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('torrent_feature', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('grant featured aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('torrent_feature', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('revoke featured returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('torrent_revokefeature', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('revoke featured aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('torrent_revokefeature', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('set refundable returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('refundable', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('set refundable aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('refundable', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

test('sticky returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('torrent_sticky', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('sticky aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $user = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($user)->post(route('torrent_sticky', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

// test cases...
