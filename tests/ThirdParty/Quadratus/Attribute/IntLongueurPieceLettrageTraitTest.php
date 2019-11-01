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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLongueurPieceLettrageTrait;

/**
 * Longueur piece lettrage trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLongueurPieceLettrageTraitTest extends AbstractTestCase {

    /**
     * Tests the setLongueurPieceLettrage() method.
     *
     * @return void
     */
    public function testSetLongueurPieceLettrage() {

        $obj = new TestIntLongueurPieceLettrageTrait();

        $obj->setLongueurPieceLettrage(10);
        $this->assertEquals(10, $obj->getLongueurPieceLettrage());
    }
}
