<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSalariesDeTrait;

/**
 * Salaries de trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSalariesDeTraitTest extends AbstractTestCase {

    /**
     * Tests the setSalariesDe() method.
     *
     * @return void
     */
    public function testSetSalariesDe() {

        $obj = new TestStringSalariesDeTrait();

        $obj->setSalariesDe("salariesDe");
        $this->assertEquals("salariesDe", $obj->getSalariesDe());
    }
}
