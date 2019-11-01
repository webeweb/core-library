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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMotifExclusionDsnTrait;

/**
 * Motif exclusion d s n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMotifExclusionDsnTraitTest extends AbstractTestCase {

    /**
     * Tests the setMotifExclusionDsn() method.
     *
     * @return void
     */
    public function testSetMotifExclusionDsn() {

        $obj = new TestStringMotifExclusionDsnTrait();

        $obj->setMotifExclusionDsn("motifExclusionDsn");
        $this->assertEquals("motifExclusionDsn", $obj->getMotifExclusionDsn());
    }
}
