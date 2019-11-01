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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle1Trait;

/**
 * Lib critere article1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle1() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle1() {

        $obj = new TestStringLibCritereArticle1Trait();

        $obj->setLibCritereArticle1("libCritereArticle1");
        $this->assertEquals("libCritereArticle1", $obj->getLibCritereArticle1());
    }
}
