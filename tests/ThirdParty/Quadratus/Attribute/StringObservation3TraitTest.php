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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringObservation3Trait;

/**
 * Observation3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringObservation3TraitTest extends AbstractTestCase {

    /**
     * Tests the setObservation3() method.
     *
     * @return void
     */
    public function testSetObservation3() {

        $obj = new TestStringObservation3Trait();

        $obj->setObservation3("observation3");
        $this->assertEquals("observation3", $obj->getObservation3());
    }
}
