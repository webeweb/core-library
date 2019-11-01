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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptAPayerGTrait;

/**
 * Tva cpt a payer g trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptAPayerGTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptAPayerG() method.
     *
     * @return void
     */
    public function testSetTvaCptAPayerG() {

        $obj = new TestStringTvaCptAPayerGTrait();

        $obj->setTvaCptAPayerG("tvaCptAPayerG");
        $this->assertEquals("tvaCptAPayerG", $obj->getTvaCptAPayerG());
    }
}
