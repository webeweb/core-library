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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz47Ca12CodeTrait;

/**
 * z47 c a12 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz47Ca12CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz47Ca12Code() method.
     *
     * @return void
     */
    public function testSetz47Ca12Code() {

        $obj = new TestStringz47Ca12CodeTrait();

        $obj->setz47Ca12Code("z47Ca12Code");
        $this->assertEquals("z47Ca12Code", $obj->getz47Ca12Code());
    }
}
