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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHaDernierPxAchatTrait;

/**
 * H a_ dernier px achat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHaDernierPxAchatTraitTest extends AbstractTestCase {

    /**
     * Tests the setHaDernierPxAchat() method.
     *
     * @return void
     */
    public function testSetHaDernierPxAchat() {

        $obj = new TestFloatHaDernierPxAchatTrait();

        $obj->setHaDernierPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getHaDernierPxAchat());
    }
}
