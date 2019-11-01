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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommuneNaissanceTrait;

/**
 * Commune naissance trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommuneNaissanceTraitTest extends AbstractTestCase {

    /**
     * Tests the setCommuneNaissance() method.
     *
     * @return void
     */
    public function testSetCommuneNaissance() {

        $obj = new TestStringCommuneNaissanceTrait();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }
}
