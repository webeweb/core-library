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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFsSocialYaAlerteTrait;

/**
 * F s_ social ya alerte trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFsSocialYaAlerteTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsSocialYaAlerte() method.
     *
     * @return void
     */
    public function testSetFsSocialYaAlerte() {

        $obj = new TestBoolFsSocialYaAlerteTrait();

        $obj->setFsSocialYaAlerte(true);
        $this->assertEquals(true, $obj->getFsSocialYaAlerte());
    }
}
