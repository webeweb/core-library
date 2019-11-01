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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle2Trait;

/**
 * Lib critere article2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle2() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle2() {

        $obj = new TestStringLibCritereArticle2Trait();

        $obj->setLibCritereArticle2("libCritereArticle2");
        $this->assertEquals("libCritereArticle2", $obj->getLibCritereArticle2());
    }
}
