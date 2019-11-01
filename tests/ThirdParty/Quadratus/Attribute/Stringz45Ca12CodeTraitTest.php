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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz45Ca12CodeTrait;

/**
 * z45 c a12 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz45Ca12CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz45Ca12Code() method.
     *
     * @return void
     */
    public function testSetz45Ca12Code() {

        $obj = new TestStringz45Ca12CodeTrait();

        $obj->setz45Ca12Code("z45Ca12Code");
        $this->assertEquals("z45Ca12Code", $obj->getz45Ca12Code());
    }
}
