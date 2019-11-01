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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolArchImp3519TvaTrait;

/**
 * Arch imp3519 t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolArchImp3519TvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setArchImp3519Tva() method.
     *
     * @return void
     */
    public function testSetArchImp3519Tva() {

        $obj = new TestBoolArchImp3519TvaTrait();

        $obj->setArchImp3519Tva(true);
        $this->assertEquals(true, $obj->getArchImp3519Tva());
    }
}
