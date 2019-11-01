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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActiviteNouvelleTrait;

/**
 * Activite nouvelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActiviteNouvelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setActiviteNouvelle() method.
     *
     * @return void
     */
    public function testSetActiviteNouvelle() {

        $obj = new TestBoolActiviteNouvelleTrait();

        $obj->setActiviteNouvelle(true);
        $this->assertEquals(true, $obj->getActiviteNouvelle());
    }
}
