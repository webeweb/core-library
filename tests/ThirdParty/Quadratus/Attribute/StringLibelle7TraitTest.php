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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelle7Trait;

/**
 * Libelle7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelle7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelle7() method.
     *
     * @return void
     */
    public function testSetLibelle7() {

        $obj = new TestStringLibelle7Trait();

        $obj->setLibelle7("libelle7");
        $this->assertEquals("libelle7", $obj->getLibelle7());
    }
}
