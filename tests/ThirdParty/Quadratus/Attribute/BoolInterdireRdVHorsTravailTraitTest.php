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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolInterdireRdVHorsTravailTrait;

/**
 * Interdire rd v hors travail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolInterdireRdVHorsTravailTraitTest extends AbstractTestCase {

    /**
     * Tests the setInterdireRdVHorsTravail() method.
     *
     * @return void
     */
    public function testSetInterdireRdVHorsTravail() {

        $obj = new TestBoolInterdireRdVHorsTravailTrait();

        $obj->setInterdireRdVHorsTravail(true);
        $this->assertEquals(true, $obj->getInterdireRdVHorsTravail());
    }
}
