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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire4Trait;

/**
 * Lib critere affaire4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire4() {

        $obj = new TestStringLibCritereAffaire4Trait();

        $obj->setLibCritereAffaire4("libCritereAffaire4");
        $this->assertEquals("libCritereAffaire4", $obj->getLibCritereAffaire4());
    }
}
