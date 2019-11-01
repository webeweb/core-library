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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroBsGenereTrait;

/**
 * Numero b s genere trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroBsGenereTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroBsGenere() method.
     *
     * @return void
     */
    public function testSetNumeroBsGenere() {

        $obj = new TestStringNumeroBsGenereTrait();

        $obj->setNumeroBsGenere("numeroBsGenere");
        $this->assertEquals("numeroBsGenere", $obj->getNumeroBsGenere());
    }
}
