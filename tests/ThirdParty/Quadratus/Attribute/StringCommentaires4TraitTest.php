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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaires4Trait;

/**
 * Commentaires4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaires4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaires4() method.
     *
     * @return void
     */
    public function testSetCommentaires4() {

        $obj = new TestStringCommentaires4Trait();

        $obj->setCommentaires4("commentaires4");
        $this->assertEquals("commentaires4", $obj->getCommentaires4());
    }
}
