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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle6Trait;

/**
 * Libelle6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle6() method.
     *
     * @return void
     */
    public function testSetLibelle6() {

        $obj = new TestStringLibelle6Trait();

        $obj->setLibelle6("libelle6");
        $this->assertEquals("libelle6", $obj->getLibelle6());
    }
}
