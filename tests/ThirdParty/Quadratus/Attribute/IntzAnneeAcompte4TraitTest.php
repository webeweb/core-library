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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntzAnneeAcompte4Trait;

/**
 * z annee acompte4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntzAnneeAcompte4TraitTest extends AbstractTestCase {

    /**
     * Tests the setzAnneeAcompte4() method.
     *
     * @return void
     */
    public function testSetzAnneeAcompte4() {

        $obj = new TestIntzAnneeAcompte4Trait();

        $obj->setzAnneeAcompte4(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte4());
    }
}
