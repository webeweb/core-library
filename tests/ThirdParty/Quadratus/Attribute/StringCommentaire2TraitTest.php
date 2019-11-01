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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaire2Trait;

/**
 * Commentaire2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaire2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaire2() method.
     *
     * @return void
     */
    public function testSetCommentaire2() {

        $obj = new TestStringCommentaire2Trait();

        $obj->setCommentaire2("commentaire2");
        $this->assertEquals("commentaire2", $obj->getCommentaire2());
    }
}
