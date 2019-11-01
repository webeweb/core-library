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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque5Trait;

/**
 * Code risque5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque5() method.
     *
     * @return void
     */
    public function testSetCodeRisque5() {

        $obj = new TestStringCodeRisque5Trait();

        $obj->setCodeRisque5("codeRisque5");
        $this->assertEquals("codeRisque5", $obj->getCodeRisque5());
    }
}
