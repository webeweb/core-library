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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere4Trait;

/**
 * Lib critere4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere4() method.
     *
     * @return void
     */
    public function testSetLibCritere4() {

        $obj = new TestStringLibCritere4Trait();

        $obj->setLibCritere4("libCritere4");
        $this->assertEquals("libCritere4", $obj->getLibCritere4());
    }
}
