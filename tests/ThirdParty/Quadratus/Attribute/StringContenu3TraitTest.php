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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringContenu3Trait;

/**
 * Contenu3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringContenu3TraitTest extends AbstractTestCase {

    /**
     * Tests the setContenu3() method.
     *
     * @return void
     */
    public function testSetContenu3() {

        $obj = new TestStringContenu3Trait();

        $obj->setContenu3("contenu3");
        $this->assertEquals("contenu3", $obj->getContenu3());
    }
}
