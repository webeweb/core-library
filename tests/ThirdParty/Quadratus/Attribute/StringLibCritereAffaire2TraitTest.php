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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire2Trait;

/**
 * Lib critere affaire2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire2() {

        $obj = new TestStringLibCritereAffaire2Trait();

        $obj->setLibCritereAffaire2("libCritereAffaire2");
        $this->assertEquals("libCritereAffaire2", $obj->getLibCritereAffaire2());
    }
}
