<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Choices;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Model\Choices\CivilityChoices;

/**
 * Civility choices test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 * @final
 */
final class CivilityChoicesTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getChoices() method.
     *
     * @return void
     */
    public function testGetChoices() {

        $res = [-1 => "choices.civility.empty", 60 => "choices.civility.miss", 50 => "choices.civility.mrs", 84 => "choices.civility.mister"];
        $this->assertEquals($res, CivilityChoices::getChoices());
    }

}
