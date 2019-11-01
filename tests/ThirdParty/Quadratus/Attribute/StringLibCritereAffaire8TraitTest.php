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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire8Trait;

/**
 * Lib critere affaire8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire8() {

        $obj = new TestStringLibCritereAffaire8Trait();

        $obj->setLibCritereAffaire8("libCritereAffaire8");
        $this->assertEquals("libCritereAffaire8", $obj->getLibCritereAffaire8());
    }
}
