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

class FyTest extends LocalizationTestCase
{
    const LOCALE = 'fy'; // WesternFrisian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'juster om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ôfrûne sneon om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ôfrûne snein om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ôfrûne moandei om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ôfrûne tiisdei om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ôfrûne woansdei om 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'ôfrûne tongersdei om 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'snein om 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'moarn om 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'hjoed om 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'hjoed om 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'juster om 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ôfrûne tiisdei om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'moarn om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'tiisdei om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'moandei om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'snein om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'sneon om 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'freed om 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'tongersdei om 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'freed om 00:00',
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
        'in pear sekonden lyn',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        's lyn',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 sekonden lyn',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        's lyn',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ien minút lyn',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'min lyn',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minuten lyn',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'min lyn',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ien oere lyn',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'h lyn',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 oeren lyn',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'h lyn',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ien dei lyn',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'd lyn',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 dagen lyn',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'd lyn',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'in wike lyn',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'w lyn',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 wiken lyn',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'w lyn',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ien moanne lyn',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'm lyn',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 moannen lyn',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'm lyn',
        // Carbon::now()->subYears(1)->diffForHumans()
        'ien jier lyn',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'y lyn',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 jierren lyn',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'y lyn',
        // Carbon::now()->addSecond()->diffForHumans()
        'oer in pear sekonden',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'oer s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'in pear sekonden',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekonden',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'oer s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'ien minút in pear sekonden',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'in wike 10 oeren',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'in wike 6 dagen',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'in wike 6 dagen',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 wiken ien oere',
    ];
}
