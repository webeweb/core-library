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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPoste4Trait;

/**
 * Poste4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPoste4TraitTest extends AbstractTestCase {

    /**
     * Tests the setPoste4() method.
     *
     * @return void
     */
    public function testSetPoste4() {

        $obj = new TestStringPoste4Trait();

        $obj->setPoste4("poste4");
        $this->assertEquals("poste4", $obj->getPoste4());
    }
}
