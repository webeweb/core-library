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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4250NbETrait;

/**
 * Az4250 nb e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4250NbETraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4250NbE() method.
     *
     * @return void
     */
    public function testSetAz4250NbE() {

        $obj = new TestIntAz4250NbETrait();

        $obj->setAz4250NbE(10);
        $this->assertEquals(10, $obj->getAz4250NbE());
    }
}
