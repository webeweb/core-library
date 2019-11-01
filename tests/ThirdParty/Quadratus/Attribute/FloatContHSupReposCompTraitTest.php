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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatContHSupReposCompTrait;

/**
 * Cont h sup repos comp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatContHSupReposCompTraitTest extends AbstractTestCase {

    /**
     * Tests the setContHSupReposComp() method.
     *
     * @return void
     */
    public function testSetContHSupReposComp() {

        $obj = new TestFloatContHSupReposCompTrait();

        $obj->setContHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContHSupReposComp());
    }
}
