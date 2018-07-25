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

class MsTest extends LocalizationTestCase
{
    const LOCALE = 'ms'; // Malay

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Kelmarin pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sabtu lepas pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ahad lepas pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Isnin lepas pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Selasa lepas pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Rabu lepas pukul 00.00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Khamis lepas pukul 00.00',
        // Carbon::now()->subDays(2)->calendar()
        'Ahad pukul 20.49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Esok pukul 22.00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Hari ini pukul 10.00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Hari ini pukul 02.00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Kelmarin pukul 01.00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Selasa lepas pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Esok pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Selasa pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Isnin pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Ahad pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sabtu pukul 00.00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Jumaat pukul 00.00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Khamis pukul 00.00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Jumaat pukul 00.00',
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
        '12:00 pagi, 12:00 pagi',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 pagi, 1:30 pagi',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 pagi, 2:00 pagi',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 pagi, 6:00 pagi',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 pagi, 10:00 pagi',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 tengahari, 12:00 tengahari',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 petang, 5:00 petang',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 malam, 11:00 malam',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        'ordinal',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'beberapa saat yang lepas',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 saat yang lepas',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 saat yang lepas',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 saat yang lepas',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'seminit yang lepas',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 minit yang lepas',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 minit yang lepas',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 minit yang lepas',
        // Carbon::now()->subHours(1)->diffForHumans()
        'sejam yang lepas',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 jam yang lepas',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 jam yang lepas',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 jam yang lepas',
        // Carbon::now()->subDays(1)->diffForHumans()
        'sehari yang lepas',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 hari yang lepas',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 hari yang lepas',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 hari yang lepas',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'seminggu yang lepas',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 minggu yang lepas',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 minggu yang lepas',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 minggu yang lepas',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'sebulan yang lepas',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 bulan yang lepas',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 bulan yang lepas',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 bulan yang lepas',
        // Carbon::now()->subYears(1)->diffForHumans()
        'setahun yang lepas',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 tahun yang lepas',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 tahun yang lepas',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 tahun yang lepas',
        // Carbon::now()->addSecond()->diffForHumans()
        'dalam beberapa saat',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'dalam 1 saat',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'beberapa saat selepas',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 saat selepas',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'beberapa saat sebelum',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 saat sebelum',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'beberapa saat',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 saat',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 saat',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 saat',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'dalam 1 saat',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'seminit beberapa saat',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 tahun 3 bulan 1 hari 1 saat',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'seminggu 10 jam',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'seminggu 6 hari',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'seminggu 6 hari',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 minggu sejam',
    ];
}
