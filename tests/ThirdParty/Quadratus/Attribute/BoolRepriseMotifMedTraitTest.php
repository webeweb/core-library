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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRepriseMotifMedTrait;

/**
 * Reprise motif med trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRepriseMotifMedTraitTest extends AbstractTestCase {

    /**
     * Tests the setRepriseMotifMed() method.
     *
     * @return void
     */
    public function testSetRepriseMotifMed() {

        $obj = new TestBoolRepriseMotifMedTrait();

        $obj->setRepriseMotifMed(true);
        $this->assertEquals(true, $obj->getRepriseMotifMed());
    }
}
