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

class TaTest extends LocalizationTestCase
{
    const LOCALE = 'ta'; // Tamil

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'நேற்று 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'கடந்த வாரம் சனிக்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'கடந்த வாரம் ஞாயிற்றுக்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'கடந்த வாரம் திங்கட்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'கடந்த வாரம் செவ்வாய்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'கடந்த வாரம் புதன்கிழமை, 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'கடந்த வாரம் வியாழக்கிழமை, 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'ஞாயிற்றுக்கிழமை, 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'நாளை 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'இன்று 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'இன்று 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'நேற்று 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'கடந்த வாரம் செவ்வாய்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'நாளை 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'செவ்வாய்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'திங்கட்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ஞாயிற்றுக்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'சனிக்கிழமை, 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'வெள்ளிக்கிழமை, 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'வியாழக்கிழமை, 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'வெள்ளிக்கிழமை, 00:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        ':1வது :1வது :1வது :1வது :1வது',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        ':2வது :1வது',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        ':3வது :1வது',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        ':4வது :1வது',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        ':5வது :1வது',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        ':6வது :1வது',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        ':7வது :2வது',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        ':11வது :2வது',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        ':40வது',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        ':41வது',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        ':100வது',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00  யாமம், 12:00  யாமம்',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30  யாமம், 1:30  யாமம்',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00  வைகறை, 2:00  வைகறை',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00  காலை, 6:00  காலை',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00  நண்பகல், 10:00  நண்பகல்',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00  நண்பகல், 12:00  நண்பகல்',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00  எற்பாடு, 5:00  எற்பாடு',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00  யாமம், 11:00  யாமம்',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        ':0வது',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'ஒரு சில விநாடிகள் முன்',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        's முன்',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 விநாடிகள் முன்',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        's முன்',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ஒரு நிமிடம் முன்',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'min முன்',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 நிமிடங்கள் முன்',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'min முன்',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ஒரு மணி நேரம் முன்',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'h முன்',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 மணி நேரம் முன்',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'h முன்',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ஒரு நாள் முன்',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'd முன்',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 நாட்கள் முன்',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'd முன்',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'ஒரு வாரம் முன்',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'w முன்',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 வாரங்கள் முன்',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'w முன்',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ஒரு மாதம் முன்',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'm முன்',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 மாதங்கள் முன்',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'm முன்',
        // Carbon::now()->subYears(1)->diffForHumans()
        'ஒரு வருடம் முன்',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'y முன்',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 ஆண்டுகள் முன்',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'y முன்',
        // Carbon::now()->addSecond()->diffForHumans()
        'ஒரு சில விநாடிகள் இல்',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        's இல்',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'after',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'after',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'before',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'before',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'ஒரு சில விநாடிகள்',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        's',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 விநாடிகள்',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        's',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        's இல்',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'ஒரு நிமிடம் ஒரு சில விநாடிகள்',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'y m d s',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'ஒரு வாரம் 10 மணி நேரம்',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ஒரு வாரம் 6 நாட்கள்',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ஒரு வாரம் 6 நாட்கள்',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 வாரங்கள் ஒரு மணி நேரம்',
    ];
}
