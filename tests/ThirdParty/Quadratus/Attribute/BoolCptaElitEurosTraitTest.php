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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCptaElitEurosTrait;

/**
 * Cpta elit euros trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCptaElitEurosTraitTest extends AbstractTestCase {

    /**
     * Tests the setCptaElitEuros() method.
     *
     * @return void
     */
    public function testSetCptaElitEuros() {

        $obj = new TestBoolCptaElitEurosTrait();

        $obj->setCptaElitEuros(true);
        $this->assertEquals(true, $obj->getCptaElitEuros());
    }
}
