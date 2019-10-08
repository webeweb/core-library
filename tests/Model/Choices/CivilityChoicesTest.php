<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Choices;

use WBW\Library\Core\Model\Choices\CivilityChoices;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Civility choices test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 */
class CivilityChoicesTest extends AbstractTestCase {

    /**
     * Tests the getChoices() method.
     *
     * @return void
     */
    public function testGetChoices() {

        $res = [
            -1 => "choices.civility.empty",
            60 => "choices.civility.miss",
            50 => "choices.civility.mrs",
            84 => "choices.civility.mister",
        ];
        $this->assertEquals($res, CivilityChoices::getChoices());
    }

}
