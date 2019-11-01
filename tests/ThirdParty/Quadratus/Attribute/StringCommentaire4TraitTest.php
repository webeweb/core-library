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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaire4Trait;

/**
 * Commentaire4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaire4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaire4() method.
     *
     * @return void
     */
    public function testSetCommentaire4() {

        $obj = new TestStringCommentaire4Trait();

        $obj->setCommentaire4("commentaire4");
        $this->assertEquals("commentaire4", $obj->getCommentaire4());
    }
}
