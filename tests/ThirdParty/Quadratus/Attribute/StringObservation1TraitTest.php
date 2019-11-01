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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringObservation1Trait;

/**
 * Observation1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringObservation1TraitTest extends AbstractTestCase {

    /**
     * Tests the setObservation1() method.
     *
     * @return void
     */
    public function testSetObservation1() {

        $obj = new TestStringObservation1Trait();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }
}
