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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque2Trait;

/**
 * Code risque2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque2() method.
     *
     * @return void
     */
    public function testSetCodeRisque2() {

        $obj = new TestStringCodeRisque2Trait();

        $obj->setCodeRisque2("codeRisque2");
        $this->assertEquals("codeRisque2", $obj->getCodeRisque2());
    }
}
