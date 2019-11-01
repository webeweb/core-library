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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPdfBtFacturerAlaValidationTrait;

/**
 * Pdf b t_ facturer ala validation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPdfBtFacturerAlaValidationTraitTest extends AbstractTestCase {

    /**
     * Tests the setPdfBtFacturerAlaValidation() method.
     *
     * @return void
     */
    public function testSetPdfBtFacturerAlaValidation() {

        $obj = new TestBoolPdfBtFacturerAlaValidationTrait();

        $obj->setPdfBtFacturerAlaValidation(true);
        $this->assertEquals(true, $obj->getPdfBtFacturerAlaValidation());
    }
}
