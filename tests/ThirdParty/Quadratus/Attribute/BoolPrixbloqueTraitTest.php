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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPrixbloqueTrait;

/**
 * Prixbloque trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPrixbloqueTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixbloque() method.
     *
     * @return void
     */
    public function testSetPrixbloque() {

        $obj = new TestBoolPrixbloqueTrait();

        $obj->setPrixbloque(true);
        $this->assertEquals(true, $obj->getPrixbloque());
    }
}
