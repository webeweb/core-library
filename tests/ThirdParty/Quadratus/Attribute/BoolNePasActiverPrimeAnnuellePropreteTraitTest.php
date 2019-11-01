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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNePasActiverPrimeAnnuellePropreteTrait;

/**
 * Ne pas activer prime annuelle proprete trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNePasActiverPrimeAnnuellePropreteTraitTest extends AbstractTestCase {

    /**
     * Tests the setNePasActiverPrimeAnnuelleProprete() method.
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete() {

        $obj = new TestBoolNePasActiverPrimeAnnuellePropreteTrait();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }
}
