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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringStatutCotisantBtpTrait;

/**
 * Statut cotisant b t p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringStatutCotisantBtpTraitTest extends AbstractTestCase {

    /**
     * Tests the setStatutCotisantBtp() method.
     *
     * @return void
     */
    public function testSetStatutCotisantBtp() {

        $obj = new TestStringStatutCotisantBtpTrait();

        $obj->setStatutCotisantBtp("statutCotisantBtp");
        $this->assertEquals("statutCotisantBtp", $obj->getStatutCotisantBtp());
    }
}
