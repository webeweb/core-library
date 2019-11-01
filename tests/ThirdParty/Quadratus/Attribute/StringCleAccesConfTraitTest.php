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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAccesConfTrait;

/**
 * Cle acces conf trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAccesConfTraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAccesConf() method.
     *
     * @return void
     */
    public function testSetCleAccesConf() {

        $obj = new TestStringCleAccesConfTrait();

        $obj->setCleAccesConf("cleAccesConf");
        $this->assertEquals("cleAccesConf", $obj->getCleAccesConf());
    }
}
