<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;

class NutcrackerTicketLaunchTest extends TestCase
{
    protected function tearDown(): void
    {
        Carbon::setTestNow();
        parent::tearDown();
    }

    /** @dataProvider launchTimes */
    public function testTicketPromotionFollowsMichiganTime($time, $popupVisible, $ticketsAvailable)
    {
        // UTC inputs verify the launch independently of the server's timezone.
        Carbon::setTestNow(Carbon::parse($time, 'UTC'));

        $home = $this->get('/')->assertOk()->assertDontSee('Nutcracker Auditions');
        $page = $this->get('/nutcracker')->assertOk()
            ->assertDontSee('Nutcracker Auditions')
            ->assertDontSee('OpeningsJS')
            ->assertSee('/images/nutcracker-2026-poster.jpg');

        if ($popupVisible) {
            $home->assertSee('id="nutcrackerPopupLabel"', false);
        } else {
            $home->assertDontSee('id="nutcrackerPopupLabel"', false);
        }

        foreach ([$home, $page] as $response) {
            if ($ticketsAvailable) {
                $response->assertSee(config('nutcracker.ticket_url'))
                    ->assertSee('Get Tickets Now');
            } else {
                $response->assertSee(config('nutcracker.ticket_url'))
                    ->assertSee('Visit Ticket Sales Page')
                    ->assertDontSee('Get Tickets Now');
            }
        }

        if (!$ticketsAvailable) {
            foreach ([$home, $page] as $response) {
                $response->assertSee('Nutcracker tickets go on sale Saturday, October 3, 2026 at 12:00pm Eastern.');
            }
        }
    }

    public static function launchTimes(): array
    {
        return [
            'October 2 advance links' => ['2026-10-02 16:00:00', true, false],
            'before October 3 in Michigan' => ['2026-10-03 03:59:59', true, false],
            'October 3 midnight in Michigan' => ['2026-10-03 04:00:00', true, false],
            'one second before sales open' => ['2026-10-03 15:59:59', true, false],
            'sales open at noon in Michigan' => ['2026-10-03 16:00:00', true, true],
            'after launch' => ['2026-10-04 16:00:00', true, true],
        ];
    }
}
