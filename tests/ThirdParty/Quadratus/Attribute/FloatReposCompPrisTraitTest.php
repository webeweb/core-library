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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatReposCompPrisTrait;

/**
 * Repos comp pris trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatReposCompPrisTraitTest extends AbstractTestCase {

    /**
     * Tests the setReposCompPris() method.
     *
     * @return void
     */
    public function testSetReposCompPris() {

        $obj = new TestFloatReposCompPrisTrait();

        $obj->setReposCompPris(10.092018);
        $this->assertEquals(10.092018, $obj->getReposCompPris());
    }
}
