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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle4Trait;

/**
 * Libelle4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle4() method.
     *
     * @return void
     */
    public function testSetLibelle4() {

        $obj = new TestStringLibelle4Trait();

        $obj->setLibelle4("libelle4");
        $this->assertEquals("libelle4", $obj->getLibelle4());
    }
}
