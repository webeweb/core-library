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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCommentaire1Trait;

/**
 * Commentaire1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCommentaire1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCommentaire1() method.
     *
     * @return void
     */
    public function testSetCommentaire1() {

        $obj = new TestStringCommentaire1Trait();

        $obj->setCommentaire1("commentaire1");
        $this->assertEquals("commentaire1", $obj->getCommentaire1());
    }
}
