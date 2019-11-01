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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire6Trait;

/**
 * Lib critere affaire6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire6() {

        $obj = new TestStringLibCritereAffaire6Trait();

        $obj->setLibCritereAffaire6("libCritereAffaire6");
        $this->assertEquals("libCritereAffaire6", $obj->getLibCritereAffaire6());
    }
}
