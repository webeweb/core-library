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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere5Trait;

/**
 * Lib critere5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere5() method.
     *
     * @return void
     */
    public function testSetLibCritere5() {

        $obj = new TestStringLibCritere5Trait();

        $obj->setLibCritere5("libCritere5");
        $this->assertEquals("libCritere5", $obj->getLibCritere5());
    }
}
