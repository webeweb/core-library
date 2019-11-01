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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemun31Trait;

/**
 * Type remun31 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemun31TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemun31() method.
     *
     * @return void
     */
    public function testSetTypeRemun31() {

        $obj = new TestStringTypeRemun31Trait();

        $obj->setTypeRemun31("typeRemun31");
        $this->assertEquals("typeRemun31", $obj->getTypeRemun31());
    }
}
