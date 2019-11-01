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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPositionPieceLettrageTrait;

/**
 * Position piece lettrage trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPositionPieceLettrageTraitTest extends AbstractTestCase {

    /**
     * Tests the setPositionPieceLettrage() method.
     *
     * @return void
     */
    public function testSetPositionPieceLettrage() {

        $obj = new TestIntPositionPieceLettrageTrait();

        $obj->setPositionPieceLettrage(10);
        $this->assertEquals(10, $obj->getPositionPieceLettrage());
    }
}
