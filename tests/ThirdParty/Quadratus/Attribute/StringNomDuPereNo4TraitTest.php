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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomDuPereNo4Trait;

/**
 * Nom du pere no4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomDuPereNo4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomDuPereNo4() method.
     *
     * @return void
     */
    public function testSetNomDuPereNo4() {

        $obj = new TestStringNomDuPereNo4Trait();

        $obj->setNomDuPereNo4("nomDuPereNo4");
        $this->assertEquals("nomDuPereNo4", $obj->getNomDuPereNo4());
    }
}
