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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPrudTypeDadsuTrait;

/**
 * Prud type d a d s u trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPrudTypeDadsuTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrudTypeDadsu() method.
     *
     * @return void
     */
    public function testSetPrudTypeDadsu() {

        $obj = new TestStringPrudTypeDadsuTrait();

        $obj->setPrudTypeDadsu("prudTypeDadsu");
        $this->assertEquals("prudTypeDadsu", $obj->getPrudTypeDadsu());
    }
}
