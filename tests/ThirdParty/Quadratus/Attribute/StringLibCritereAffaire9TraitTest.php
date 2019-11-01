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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire9Trait;

/**
 * Lib critere affaire9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire9() {

        $obj = new TestStringLibCritereAffaire9Trait();

        $obj->setLibCritereAffaire9("libCritereAffaire9");
        $this->assertEquals("libCritereAffaire9", $obj->getLibCritereAffaire9());
    }
}
