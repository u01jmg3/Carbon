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

class RuTest extends LocalizationTestCase
{
    const LOCALE = 'ru'; // Russian

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Вчера, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В субботу, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В воскресенье, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В прошлый понедельник, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В прошлый вторник, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В прошлую среду, в 0:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'В прошлый четверг, в 0:00',
        // Carbon::now()->subDays(2)->calendar()
        'В следующее воскресенье, в 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Завтра, в 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Сегодня, в 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Сегодня, в 2:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Вчера, в 1:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'В прошлый вторник, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Завтра, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Во вторник, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В понедельник, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В следующее воскресенье, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В следующую субботу, в 0:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'В следующую пятницу, в 0:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'В следующий четверг, в 0:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'В пятницу, в 0:00',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1-й 1-й 1-го 1-я 1-я',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2-го 1-я',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3-го 1-я',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4-го 1-я',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5-го 1-я',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6-го 1-я',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7-го 2-я',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11-го 2-я',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40-й',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41-й',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100-й',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 ночи, 12:00 ночи',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 ночи, 1:30 ночи',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 ночи, 2:00 ночи',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 утра, 6:00 утра',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 утра, 10:00 утра',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 дня, 12:00 дня',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 вечера, 5:00 вечера',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 вечера, 11:00 вечера',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        '1 секунду назад',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        '1 секунду назад',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        '2 секунды назад',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        '2 секунды назад',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        '1 минуту назад',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        '1 минуту назад',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        '2 минуты назад',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        '2 минуты назад',
        // Carbon::now()->subHours(1)->diffForHumans()
        '1 час назад',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        '1 час назад',
        // Carbon::now()->subHours(2)->diffForHumans()
        '2 часа назад',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        '2 часа назад',
        // Carbon::now()->subDays(1)->diffForHumans()
        '1 день назад',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        '1 день назад',
        // Carbon::now()->subDays(2)->diffForHumans()
        '2 дня назад',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        '2 дня назад',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        '1 неделю назад',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        '1 неделю назад',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        '2 недели назад',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        '2 недели назад',
        // Carbon::now()->subMonths(1)->diffForHumans()
        '1 месяц назад',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        '1 месяц назад',
        // Carbon::now()->subMonths(2)->diffForHumans()
        '2 месяца назад',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        '2 месяца назад',
        // Carbon::now()->subYears(1)->diffForHumans()
        '1 год назад',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        '1 год назад',
        // Carbon::now()->subYears(2)->diffForHumans()
        '2 года назад',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        '2 года назад',
        // Carbon::now()->addSecond()->diffForHumans()
        'через 1 секунду',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'через 1 секунду',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 секунду после',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 секунду после',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 секунду до',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 секунду до',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 секунду',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 секунду',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 секунды',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 секунды',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'через 1 секунду',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 минуту 1 секунду',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 года 3 месяца 1 день 1 секунду',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 неделю 10 часов',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 неделю 6 дней',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 неделю 6 дней',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 недели 1 час',
    ];
}
