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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatArt151MontantEtaleAnneeTrait;

/**
 * Art151 montant etale annee trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatArt151MontantEtaleAnneeTraitTest extends AbstractTestCase {

    /**
     * Tests the setArt151MontantEtaleAnnee() method.
     *
     * @return void
     */
    public function testSetArt151MontantEtaleAnnee() {

        $obj = new TestFloatArt151MontantEtaleAnneeTrait();

        $obj->setArt151MontantEtaleAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantEtaleAnnee());
    }
}
