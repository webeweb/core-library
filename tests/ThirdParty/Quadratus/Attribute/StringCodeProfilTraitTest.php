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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeProfilTrait;

/**
 * Code profil trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeProfilTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeProfil() method.
     *
     * @return void
     */
    public function testSetCodeProfil() {

        $obj = new TestStringCodeProfilTrait();

        $obj->setCodeProfil("codeProfil");
        $this->assertEquals("codeProfil", $obj->getCodeProfil());
    }
}
