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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz32CodeTrait;

/**
 * z32 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz32CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz32Code() method.
     *
     * @return void
     */
    public function testSetz32Code() {

        $obj = new TestStringz32CodeTrait();

        $obj->setz32Code("z32Code");
        $this->assertEquals("z32Code", $obj->getz32Code());
    }
}
