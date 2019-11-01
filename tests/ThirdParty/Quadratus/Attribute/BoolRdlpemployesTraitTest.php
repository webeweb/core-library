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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRdlpemployesTrait;

/**
 * R d l p_ e m p l o y e s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRdlpemployesTraitTest extends AbstractTestCase {

    /**
     * Tests the setRdlpemployes() method.
     *
     * @return void
     */
    public function testSetRdlpemployes() {

        $obj = new TestBoolRdlpemployesTrait();

        $obj->setRdlpemployes(true);
        $this->assertEquals(true, $obj->getRdlpemployes());
    }
}
