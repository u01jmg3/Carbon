<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class NlTest extends LocalizationTestCase
{
    const LOCALE = 'nl'; // Dutch

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'gisteren om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'afgelopen zaterdag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'afgelopen zondag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'afgelopen maandag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'afgelopen dinsdag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'afgelopen woensdag om 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'afgelopen donderdag om 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'zondag om 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'morgen om 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'vandaag om 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'vandaag om 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'gisteren om 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'afgelopen dinsdag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'morgen om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'dinsdag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'maandag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'zondag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'zaterdag om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'vrijdag om 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'donderdag om 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'vrijdag om 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1ste 1ste 1ste 1ste 1ste',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2de 1ste',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3de 1ste',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4de 1ste',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5de 1ste',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6de 1ste',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7de 2de',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11de 2de',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40ste',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41ste',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100ste',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0de',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'een paar seconden geleden',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1s geleden',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 seconden geleden',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2s geleden',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'één minuut geleden',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1mi geleden',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuten geleden',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2mi geleden',
        // Carbon::now()->subHours(1)->diffForHumans()
        'één uur geleden',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1u geleden',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 uur geleden',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2u geleden',
        // Carbon::now()->subDays(1)->diffForHumans()
        'één dag geleden',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1d geleden',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dagen geleden',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2d geleden',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 week geleden',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1w geleden',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 weken geleden',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2w geleden',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'één maand geleden',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1ma geleden',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 maanden geleden',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2ma geleden',
        // Carbon::now()->subYears(1)->diffForHumans()
        'één jaar geleden',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1j geleden',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 jaar geleden',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2j geleden',
        // Carbon::now()->addSecond()->diffForHumans()
        'over een paar seconden',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'over 1s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'een paar seconden later',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1s later',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'een paar seconden eerder',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1s eerder',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'een paar seconden',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1s',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 seconden',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2s',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'over 1s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'één minuut een paar seconden',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2j 3ma 1d 1s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 week 10 uur',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 week 6 dagen',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 week 6 dagen',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 weken één uur',
    ];
}
