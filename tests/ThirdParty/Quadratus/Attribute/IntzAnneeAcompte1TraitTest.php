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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntzAnneeAcompte1Trait;

/**
 * z annee acompte1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntzAnneeAcompte1TraitTest extends AbstractTestCase {

    /**
     * Tests the setzAnneeAcompte1() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte1() {

        $obj = new TestIntzAnneeAcompte1Trait();

        $obj->setzAnneeAcompte1(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte1());
    }
}
