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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAnnexe7MutationTrait;

/**
 * Annexe7 mutation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAnnexe7MutationTraitTest extends AbstractTestCase {

    /**
     * Tests the setAnnexe7Mutation() method.
     *
     * @return void
     */
    public function testSetAnnexe7Mutation() {

        $obj = new TestBoolAnnexe7MutationTrait();

        $obj->setAnnexe7Mutation(true);
        $this->assertEquals(true, $obj->getAnnexe7Mutation());
    }
}
