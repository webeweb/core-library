<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use DateTime;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\DateUtility;

/**
 * Date utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility
 * @final
 */
final class DateUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the translateWeekday() method.
     *
     * @return void
     */
    public function testTranslateWeekday() {

        $arg = [];
        for ($i = 0; $i < 7; ++$i) {
            $arg[] = new DateTime("2018-04-" . ($i + 8));
        }

        $res   = [];
        $res[] = "Dimanche, 2018-04-08";
        $res[] = "Lundi, 2018-04-09";
        $res[] = "Mardi, 2018-04-10";
        $res[] = "Mercredi, 2018-04-11";
        $res[] = "Jeudi, 2018-04-12";
        $res[] = "Vendredi, 2018-04-13";
        $res[] = "Samedi, 2018-04-14";

        for ($i = 0; $i < 7; ++$i) {
            $this->assertEquals($res[$i], DateUtility::translateWeekDay($arg[$i]->format("l, Y-m-d"), DateUtility::getWeekdayFR()));
        }
    }

}
