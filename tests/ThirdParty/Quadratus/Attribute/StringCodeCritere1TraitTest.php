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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCritere1Trait;

/**
 * Code critere1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCritere1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCritere1() method.
     *
     * @return void
     */
    public function testSetCodeCritere1() {

        $obj = new TestStringCodeCritere1Trait();

        $obj->setCodeCritere1("codeCritere1");
        $this->assertEquals("codeCritere1", $obj->getCodeCritere1());
    }
}
