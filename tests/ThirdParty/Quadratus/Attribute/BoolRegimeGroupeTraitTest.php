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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRegimeGroupeTrait;

/**
 * Regime groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRegimeGroupeTraitTest extends AbstractTestCase {

    /**
     * Tests the setRegimeGroupe() method.
     *
     * @return void
     */
    public function testSetRegimeGroupe() {

        $obj = new TestBoolRegimeGroupeTrait();

        $obj->setRegimeGroupe(true);
        $this->assertEquals(true, $obj->getRegimeGroupe());
    }
}
