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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleCritere1Trait;

/**
 * Libelle critere1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleCritere1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleCritere1() method.
     *
     * @return void
     */
    public function testSetLibelleCritere1() {

        $obj = new TestStringLibelleCritere1Trait();

        $obj->setLibelleCritere1("libelleCritere1");
        $this->assertEquals("libelleCritere1", $obj->getLibelleCritere1());
    }
}
