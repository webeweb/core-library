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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringObservation2Trait;

/**
 * Observation2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringObservation2TraitTest extends AbstractTestCase {

    /**
     * Tests the setObservation2() method.
     *
     * @return void
     */
    public function testSetObservation2() {

        $obj = new TestStringObservation2Trait();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }
}
