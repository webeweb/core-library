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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePaysResidenceTrait;

/**
 * Code pays residence trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePaysResidenceTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePaysResidence() method.
     *
     * @return void
     */
    public function testSetCodePaysResidence() {

        $obj = new TestStringCodePaysResidenceTrait();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }
}
