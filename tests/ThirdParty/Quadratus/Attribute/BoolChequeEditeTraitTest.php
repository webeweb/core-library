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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolChequeEditeTrait;

/**
 * Cheque edite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolChequeEditeTraitTest extends AbstractTestCase {

    /**
     * Tests the setChequeEdite() method.
     *
     * @return void
     */
    public function testSetChequeEdite() {

        $obj = new TestBoolChequeEditeTrait();

        $obj->setChequeEdite(true);
        $this->assertEquals(true, $obj->getChequeEdite());
    }
}
