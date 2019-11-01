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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDas2CommentaireLibTrait;

/**
 * D a s2 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDas2CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setDas2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetDas2CommentaireLib() {

        $obj = new TestStringDas2CommentaireLibTrait();

        $obj->setDas2CommentaireLib("das2CommentaireLib");
        $this->assertEquals("das2CommentaireLib", $obj->getDas2CommentaireLib());
    }
}
