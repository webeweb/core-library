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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeAssuranceTrait;

/**
 * Code type assurance trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeAssuranceTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeAssurance() method.
     *
     * @return void
     */
    public function testSetCodeTypeAssurance() {

        $obj = new TestStringCodeTypeAssuranceTrait();

        $obj->setCodeTypeAssurance("codeTypeAssurance");
        $this->assertEquals("codeTypeAssurance", $obj->getCodeTypeAssurance());
    }
}
