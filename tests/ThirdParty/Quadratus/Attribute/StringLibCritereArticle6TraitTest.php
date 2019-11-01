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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle6Trait;

/**
 * Lib critere article6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle6() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle6() {

        $obj = new TestStringLibCritereArticle6Trait();

        $obj->setLibCritereArticle6("libCritereArticle6");
        $this->assertEquals("libCritereArticle6", $obj->getLibCritereArticle6());
    }
}
