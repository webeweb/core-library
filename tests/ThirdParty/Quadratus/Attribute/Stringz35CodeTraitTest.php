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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringz35CodeTrait;

/**
 * z35 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringz35CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz35Code() method.
     *
     * @return void
     */
    public function testSetz35Code() {

        $obj = new TestStringz35CodeTrait();

        $obj->setz35Code("z35Code");
        $this->assertEquals("z35Code", $obj->getz35Code());
    }
}
