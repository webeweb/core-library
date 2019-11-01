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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAbonnementTrait;

/**
 * Type abonnement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAbonnementTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAbonnement() method.
     *
     * @return void
     */
    public function testSetTypeAbonnement() {

        $obj = new TestStringTypeAbonnementTrait();

        $obj->setTypeAbonnement("typeAbonnement");
        $this->assertEquals("typeAbonnement", $obj->getTypeAbonnement());
    }
}
