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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFamille10Trait;

/**
 * Famille10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFamille10TraitTest extends AbstractTestCase {

    /**
     * Tests the setFamille10() method.
     *
     * @return void
     */
    public function testSetFamille10() {

        $obj = new TestStringFamille10Trait();

        $obj->setFamille10("famille10");
        $this->assertEquals("famille10", $obj->getFamille10());
    }
}
