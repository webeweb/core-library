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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringVilleRcTrait;

/**
 * Ville r c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringVilleRcTraitTest extends AbstractTestCase {

    /**
     * Tests the setVilleRc() method.
     *
     * @return void
     */
    public function testSetVilleRc() {

        $obj = new TestStringVilleRcTrait();

        $obj->setVilleRc("villeRc");
        $this->assertEquals("villeRc", $obj->getVilleRc());
    }
}
