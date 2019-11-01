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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatArt151MontantDejaEtaleTrait;

/**
 * Art151 montant deja etale trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatArt151MontantDejaEtaleTraitTest extends AbstractTestCase {

    /**
     * Tests the setArt151MontantDejaEtale() method.
     *
     * @return void
     */
    public function testSetArt151MontantDejaEtale() {

        $obj = new TestFloatArt151MontantDejaEtaleTrait();

        $obj->setArt151MontantDejaEtale(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantDejaEtale());
    }
}
