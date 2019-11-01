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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz4Cca12CodeTrait;

/**
 * z4 c c a12 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz4Cca12CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz4Cca12Code() method.
     *
     * @return void
     */
    public function testSetz4Cca12Code() {

        $obj = new TestStringz4Cca12CodeTrait();

        $obj->setz4Cca12Code("z4Cca12Code");
        $this->assertEquals("z4Cca12Code", $obj->getz4Cca12Code());
    }
}
