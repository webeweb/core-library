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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptAImputerGTrait;

/**
 * Tva cpt a imputer g trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptAImputerGTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptAImputerG() method.
     *
     * @return void
     */
    public function testSetTvaCptAImputerG() {

        $obj = new TestStringTvaCptAImputerGTrait();

        $obj->setTvaCptAImputerG("tvaCptAImputerG");
        $this->assertEquals("tvaCptAImputerG", $obj->getTvaCptAImputerG());
    }
}
