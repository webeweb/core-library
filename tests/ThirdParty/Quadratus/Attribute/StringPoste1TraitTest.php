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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPoste1Trait;

/**
 * Poste1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPoste1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPoste1() method.
     *
     * @return void
     */
    public function testSetPoste1() {

        $obj = new TestStringPoste1Trait();

        $obj->setPoste1("poste1");
        $this->assertEquals("poste1", $obj->getPoste1());
    }
}
