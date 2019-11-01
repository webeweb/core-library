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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolInterdirePubliDocWebTrait;

/**
 * Interdire publi doc web trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolInterdirePubliDocWebTraitTest extends AbstractTestCase {

    /**
     * Tests the setInterdirePubliDocWeb() method.
     *
     * @return void
     */
    public function testSetInterdirePubliDocWeb() {

        $obj = new TestBoolInterdirePubliDocWebTrait();

        $obj->setInterdirePubliDocWeb(true);
        $this->assertEquals(true, $obj->getInterdirePubliDocWeb());
    }
}
