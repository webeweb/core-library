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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRepartitionAnaTrait;

/**
 * Repartition ana trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRepartitionAnaTraitTest extends AbstractTestCase {

    /**
     * Tests the setRepartitionAna() method.
     *
     * @return void
     */
    public function testSetRepartitionAna() {

        $obj = new TestStringRepartitionAnaTrait();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }
}
