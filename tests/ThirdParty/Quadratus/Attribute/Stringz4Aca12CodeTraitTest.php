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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz4Aca12CodeTrait;

/**
 * z4 a c a12 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz4Aca12CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz4Aca12Code() method.
     *
     * @return void
     */
    public function testSetz4Aca12Code() {

        $obj = new TestStringz4Aca12CodeTrait();

        $obj->setz4Aca12Code("z4Aca12Code");
        $this->assertEquals("z4Aca12Code", $obj->getz4Aca12Code());
    }
}
