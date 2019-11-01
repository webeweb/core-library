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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCpteCollectifFrnTrait;

/**
 * Cpte collectif frn trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCpteCollectifFrnTraitTest extends AbstractTestCase {

    /**
     * Tests the setCpteCollectifFrn() method.
     *
     * @return void
     */
    public function testSetCpteCollectifFrn() {

        $obj = new TestStringCpteCollectifFrnTrait();

        $obj->setCpteCollectifFrn("cpteCollectifFrn");
        $this->assertEquals("cpteCollectifFrn", $obj->getCpteCollectifFrn());
    }
}
