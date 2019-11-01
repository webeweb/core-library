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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGeneric10CommentaireLibTrait;

/**
 * Generic10 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGeneric10CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric10CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric10CommentaireLib() {

        $obj = new TestStringGeneric10CommentaireLibTrait();

        $obj->setGeneric10CommentaireLib("generic10CommentaireLib");
        $this->assertEquals("generic10CommentaireLib", $obj->getGeneric10CommentaireLib());
    }
}
