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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptAcqIntraComTrait;

/**
 * Tva cpt acq intra com trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptAcqIntraComTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptAcqIntraCom() method.
     *
     * @return void
     */
    public function testSetTvaCptAcqIntraCom() {

        $obj = new TestStringTvaCptAcqIntraComTrait();

        $obj->setTvaCptAcqIntraCom("tvaCptAcqIntraCom");
        $this->assertEquals("tvaCptAcqIntraCom", $obj->getTvaCptAcqIntraCom());
    }
}
