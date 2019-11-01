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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntActivationLstRestriArtTrait;

/**
 * Activation lst restri art trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntActivationLstRestriArtTraitTest extends AbstractTestCase {

    /**
     * Tests the setActivationLstRestriArt() method.
     *
     * @return void
     */
    public function testSetActivationLstRestriArt() {

        $obj = new TestIntActivationLstRestriArtTrait();

        $obj->setActivationLstRestriArt(10);
        $this->assertEquals(10, $obj->getActivationLstRestriArt());
    }
}
