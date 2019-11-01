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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPdfBtReprendreLibelleDateTrait;

/**
 * Pdf b t_ reprendre libelle date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPdfBtReprendreLibelleDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setPdfBtReprendreLibelleDate() method.
     *
     * @return void
     */
    public function testSetPdfBtReprendreLibelleDate() {

        $obj = new TestBoolPdfBtReprendreLibelleDateTrait();

        $obj->setPdfBtReprendreLibelleDate(true);
        $this->assertEquals(true, $obj->getPdfBtReprendreLibelleDate());
    }
}
