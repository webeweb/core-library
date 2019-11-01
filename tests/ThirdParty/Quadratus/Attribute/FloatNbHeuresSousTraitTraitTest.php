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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHeuresSousTraitTrait;

/**
 * Nb heures sous trait trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHeuresSousTraitTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHeuresSousTrait() method.
     *
     * @return void
     */
    public function testSetNbHeuresSousTrait() {

        $obj = new TestFloatNbHeuresSousTraitTrait();

        $obj->setNbHeuresSousTrait(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresSousTrait());
    }
}
