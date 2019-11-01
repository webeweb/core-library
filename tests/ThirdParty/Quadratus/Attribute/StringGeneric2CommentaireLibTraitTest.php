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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGeneric2CommentaireLibTrait;

/**
 * Generic2 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGeneric2CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric2CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric2CommentaireLib() {

        $obj = new TestStringGeneric2CommentaireLibTrait();

        $obj->setGeneric2CommentaireLib("generic2CommentaireLib");
        $this->assertEquals("generic2CommentaireLib", $obj->getGeneric2CommentaireLib());
    }
}
