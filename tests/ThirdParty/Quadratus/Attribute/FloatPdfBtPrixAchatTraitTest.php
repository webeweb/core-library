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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPdfBtPrixAchatTrait;

/**
 * Pdf b t_ prix achat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPdfBtPrixAchatTraitTest extends AbstractTestCase {

    /**
     * Tests the setPdfBtPrixAchat() method.
     *
     * @return void
     */
    public function testSetPdfBtPrixAchat() {

        $obj = new TestFloatPdfBtPrixAchatTrait();

        $obj->setPdfBtPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtPrixAchat());
    }
}
