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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGeneric5CommentaireLibTrait;

/**
 * Generic5 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGeneric5CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric5CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric5CommentaireLib() {

        $obj = new TestStringGeneric5CommentaireLibTrait();

        $obj->setGeneric5CommentaireLib("generic5CommentaireLib");
        $this->assertEquals("generic5CommentaireLib", $obj->getGeneric5CommentaireLib());
    }
}
