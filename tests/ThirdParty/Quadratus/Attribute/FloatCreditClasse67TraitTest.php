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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCreditClasse67Trait;

/**
 * Credit classe67 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCreditClasse67TraitTest extends AbstractTestCase {

    /**
     * Tests the setCreditClasse67() method.
     *
     * @return void
     */
    public function testSetCreditClasse67() {

        $obj = new TestFloatCreditClasse67Trait();

        $obj->setCreditClasse67(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClasse67());
    }
}
