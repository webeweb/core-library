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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolEmailRedirAutoTrait;

/**
 * E mail redir auto trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolEmailRedirAutoTraitTest extends AbstractTestCase {

    /**
     * Tests the setEmailRedirAuto() method.
     *
     * @return void
     */
    public function testSetEmailRedirAuto() {

        $obj = new TestBoolEmailRedirAutoTrait();

        $obj->setEmailRedirAuto(true);
        $this->assertEquals(true, $obj->getEmailRedirAuto());
    }
}
