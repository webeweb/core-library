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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGeneric4CommentaireLibTrait;

/**
 * Generic4 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGeneric4CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric4CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric4CommentaireLib() {

        $obj = new TestStringGeneric4CommentaireLibTrait();

        $obj->setGeneric4CommentaireLib("generic4CommentaireLib");
        $this->assertEquals("generic4CommentaireLib", $obj->getGeneric4CommentaireLib());
    }
}
