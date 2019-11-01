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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaires2Trait;

/**
 * Commentaires2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaires2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaires2() method.
     *
     * @return void
     */
    public function testSetCommentaires2() {

        $obj = new TestStringCommentaires2Trait();

        $obj->setCommentaires2("commentaires2");
        $this->assertEquals("commentaires2", $obj->getCommentaires2());
    }
}
