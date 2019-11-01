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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteEscompteSoumisTvaTrait;

/**
 * Compte escompte soumis t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteEscompteSoumisTvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteEscompteSoumisTva() method.
     *
     * @return void
     */
    public function testSetCompteEscompteSoumisTva() {

        $obj = new TestStringCompteEscompteSoumisTvaTrait();

        $obj->setCompteEscompteSoumisTva("compteEscompteSoumisTva");
        $this->assertEquals("compteEscompteSoumisTva", $obj->getCompteEscompteSoumisTva());
    }
}
