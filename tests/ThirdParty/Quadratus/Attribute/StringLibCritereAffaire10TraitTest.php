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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereAffaire10Trait;

/**
 * Lib critere affaire10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereAffaire10TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire10() {

        $obj = new TestStringLibCritereAffaire10Trait();

        $obj->setLibCritereAffaire10("libCritereAffaire10");
        $this->assertEquals("libCritereAffaire10", $obj->getLibCritereAffaire10());
    }
}
