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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaires1Trait;

/**
 * Commentaires1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaires1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaires1() method.
     *
     * @return void
     */
    public function testSetCommentaires1() {

        $obj = new TestStringCommentaires1Trait();

        $obj->setCommentaires1("commentaires1");
        $this->assertEquals("commentaires1", $obj->getCommentaires1());
    }
}
