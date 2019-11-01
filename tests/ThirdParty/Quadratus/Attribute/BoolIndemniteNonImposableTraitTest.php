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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolIndemniteNonImposableTrait;

/**
 * Indemnite non imposable trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolIndemniteNonImposableTraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemniteNonImposable() method.
     *
     * @return void
     */
    public function testSetIndemniteNonImposable() {

        $obj = new TestBoolIndemniteNonImposableTrait();

        $obj->setIndemniteNonImposable(true);
        $this->assertEquals(true, $obj->getIndemniteNonImposable());
    }
}
