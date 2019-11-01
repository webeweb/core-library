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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroCarteTravailTrait;

/**
 * Numero carte travail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroCarteTravailTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroCarteTravail() method.
     *
     * @return void
     */
    public function testSetNumeroCarteTravail() {

        $obj = new TestStringNumeroCarteTravailTrait();

        $obj->setNumeroCarteTravail("numeroCarteTravail");
        $this->assertEquals("numeroCarteTravail", $obj->getNumeroCarteTravail());
    }
}
