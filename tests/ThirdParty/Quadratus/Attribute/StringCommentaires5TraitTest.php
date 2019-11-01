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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaires5Trait;

/**
 * Commentaires5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaires5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaires5() method.
     *
     * @return void
     */
    public function testSetCommentaires5() {

        $obj = new TestStringCommentaires5Trait();

        $obj->setCommentaires5("commentaires5");
        $this->assertEquals("commentaires5", $obj->getCommentaires5());
    }
}
