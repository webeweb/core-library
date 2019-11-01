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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteDebutBailTrait;

/**
 * Compte debut bail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteDebutBailTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteDebutBail() method.
     *
     * @return void
     */
    public function testSetCompteDebutBail() {

        $obj = new TestStringCompteDebutBailTrait();

        $obj->setCompteDebutBail("compteDebutBail");
        $this->assertEquals("compteDebutBail", $obj->getCompteDebutBail());
    }
}
