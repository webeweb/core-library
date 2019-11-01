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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolResultatDucsTrait;

/**
 * Resultat ducs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolResultatDucsTraitTest extends AbstractTestCase {

    /**
     * Tests the setResultatDucs() method.
     *
     * @return void
     */
    public function testSetResultatDucs() {

        $obj = new TestBoolResultatDucsTrait();

        $obj->setResultatDucs(true);
        $this->assertEquals(true, $obj->getResultatDucs());
    }
}
