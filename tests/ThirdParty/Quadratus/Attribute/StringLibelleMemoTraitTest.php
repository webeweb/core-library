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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibelleMemoTrait;

/**
 * Libelle memo trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibelleMemoTraitTest extends AbstractTestCase {

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo() {

        $obj = new TestStringLibelleMemoTrait();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }
}
