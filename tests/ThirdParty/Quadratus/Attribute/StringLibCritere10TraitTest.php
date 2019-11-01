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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere10Trait;

/**
 * Lib critere10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere10TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere10() method.
     *
     * @return void
     */
    public function testSetLibCritere10() {

        $obj = new TestStringLibCritere10Trait();

        $obj->setLibCritere10("libCritere10");
        $this->assertEquals("libCritere10", $obj->getLibCritere10());
    }
}
