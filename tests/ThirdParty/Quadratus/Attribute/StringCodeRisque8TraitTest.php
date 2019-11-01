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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque8Trait;

/**
 * Code risque8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque8() method.
     *
     * @return void
     */
    public function testSetCodeRisque8() {

        $obj = new TestStringCodeRisque8Trait();

        $obj->setCodeRisque8("codeRisque8");
        $this->assertEquals("codeRisque8", $obj->getCodeRisque8());
    }
}
