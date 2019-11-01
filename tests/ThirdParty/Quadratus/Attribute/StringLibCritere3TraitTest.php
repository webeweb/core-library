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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere3Trait;

/**
 * Lib critere3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere3() method.
     *
     * @return void
     */
    public function testSetLibCritere3() {

        $obj = new TestStringLibCritere3Trait();

        $obj->setLibCritere3("libCritere3");
        $this->assertEquals("libCritere3", $obj->getLibCritere3());
    }
}
