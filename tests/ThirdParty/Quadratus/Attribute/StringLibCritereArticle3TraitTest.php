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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle3Trait;

/**
 * Lib critere article3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle3() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle3() {

        $obj = new TestStringLibCritereArticle3Trait();

        $obj->setLibCritereArticle3("libCritereArticle3");
        $this->assertEquals("libCritereArticle3", $obj->getLibCritereArticle3());
    }
}
