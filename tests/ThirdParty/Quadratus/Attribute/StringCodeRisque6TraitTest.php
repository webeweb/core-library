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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRisque6Trait;

/**
 * Code risque6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRisque6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRisque6() method.
     *
     * @return void
     */
    public function testSetCodeRisque6() {

        $obj = new TestStringCodeRisque6Trait();

        $obj->setCodeRisque6("codeRisque6");
        $this->assertEquals("codeRisque6", $obj->getCodeRisque6());
    }
}
