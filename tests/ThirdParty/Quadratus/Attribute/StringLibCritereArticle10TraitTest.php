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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle10Trait;

/**
 * Lib critere article10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle10TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle10() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle10() {

        $obj = new TestStringLibCritereArticle10Trait();

        $obj->setLibCritereArticle10("libCritereArticle10");
        $this->assertEquals("libCritereArticle10", $obj->getLibCritereArticle10());
    }
}
