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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringVilleNaissanceTrait;

/**
 * Ville naissance trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringVilleNaissanceTraitTest extends AbstractTestCase {

    /**
     * Tests the setVilleNaissance() method.
     *
     * @return void
     */
    public function testSetVilleNaissance() {

        $obj = new TestStringVilleNaissanceTrait();

        $obj->setVilleNaissance("villeNaissance");
        $this->assertEquals("villeNaissance", $obj->getVilleNaissance());
    }
}
