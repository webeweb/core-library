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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMotifFinContratTrait;

/**
 * Motif fin contrat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMotifFinContratTraitTest extends AbstractTestCase {

    /**
     * Tests the setMotifFinContrat() method.
     *
     * @return void
     */
    public function testSetMotifFinContrat() {

        $obj = new TestStringMotifFinContratTrait();

        $obj->setMotifFinContrat("motifFinContrat");
        $this->assertEquals("motifFinContrat", $obj->getMotifFinContrat());
    }
}
