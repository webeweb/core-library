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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle7Trait;

/**
 * Lib critere article7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle7() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle7() {

        $obj = new TestStringLibCritereArticle7Trait();

        $obj->setLibCritereArticle7("libCritereArticle7");
        $this->assertEquals("libCritereArticle7", $obj->getLibCritereArticle7());
    }
}
