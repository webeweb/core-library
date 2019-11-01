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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaire5Trait;

/**
 * Commentaire5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaire5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaire5() method.
     *
     * @return void
     */
    public function testSetCommentaire5() {

        $obj = new TestStringCommentaire5Trait();

        $obj->setCommentaire5("commentaire5");
        $this->assertEquals("commentaire5", $obj->getCommentaire5());
    }
}
