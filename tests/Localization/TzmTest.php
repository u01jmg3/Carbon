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

class TzmTest extends LocalizationTestCase
{
    const LOCALE = 'tzm';

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵚⴰⵏⵜ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⴹⵢⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴰⵎⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵢⵏⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⴽⵔⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'ⴰⴽⵡⴰⵙ ⴴ 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'ⴰⵙⴰⵎⴰⵙ ⴴ 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴽⴰ ⴴ 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'ⴰⵙⴷⵅ ⴴ 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴷⵅ ⴴ 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'ⴰⵚⴰⵏⵜ ⴴ 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴽⴰ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⵏⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵢⵏⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⴰⵎⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⴹⵢⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ⴰⵙⵉⵎⵡⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'ⴰⴽⵡⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ⴰⵙⵉⵎⵡⴰⵙ ⴴ 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        'ordinal ordinal ordinal ordinal ordinal',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        'ordinal ordinal',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        'ordinal',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        'ordinal',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        'ordinal',
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
        'ordinal',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'ⵢⴰⵏ ⵉⵎⵉⴽ',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ s',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵉⵎⵉⴽ',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ s',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ⵢⴰⵏ ⵎⵉⵏⵓⴺ',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ min',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵎⵉⵏⵓⴺ',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ min',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ⵢⴰⵏ ⵙⴰⵄⴰ',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ h',
        // Carbon::now()->subHours(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵜⴰⵙⵙⴰⵄⵉⵏ',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ h',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ⵢⴰⵏ ⴰⵙⵙ',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ d',
        // Carbon::now()->subDays(2)->diffForHumans()
        'ⵢⴰⵏ 2 oⵙⵙⴰⵏ',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ d',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'ⵢⴰⵏ 1 ⵉⵎⴰⵍⴰⵙⵙ',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ w',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵉⵎⴰⵍⴰⵙⵙ',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ w',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ⵢⴰⵏ ⴰⵢoⵓⵔ',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ m',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵉⵢⵢⵉⵔⵏ',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ m',
        // Carbon::now()->subYears(1)->diffForHumans()
        'ⵢⴰⵏ ⴰⵙⴳⴰⵙ',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'ⵢⴰⵏ y',
        // Carbon::now()->subYears(2)->diffForHumans()
        'ⵢⴰⵏ 2 ⵉⵙⴳⴰⵙⵏ',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'ⵢⴰⵏ y',
        // Carbon::now()->addSecond()->diffForHumans()
        'ⴷⴰⴷⵅ ⵙ ⵢⴰⵏ ⵉⵎⵉⴽ',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'ⴷⴰⴷⵅ ⵙ ⵢⴰⵏ s',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'ⵉⵎⵉⴽ',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 ⵉⵎⵉⴽ',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'ⴷⴰⴷⵅ ⵙ ⵢⴰⵏ s',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'ⵎⵉⵏⵓⴺ ⵉⵎⵉⴽ',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 ⵉⵎⴰⵍⴰⵙⵙ 10 ⵜⴰⵙⵙⴰⵄⵉⵏ',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 ⵉⵎⴰⵍⴰⵙⵙ 6 oⵙⵙⴰⵏ',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 ⵉⵎⴰⵍⴰⵙⵙ 6 oⵙⵙⴰⵏ',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 ⵉⵎⴰⵍⴰⵙⵙ ⵙⴰⵄⴰ',
    ];
}
