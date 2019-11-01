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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGeneric6CommentaireLibTrait;

/**
 * Generic6 commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGeneric6CommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric6CommentaireLib() method.
     *
     * @return void
     */
    public function testSetGeneric6CommentaireLib() {

        $obj = new TestStringGeneric6CommentaireLibTrait();

        $obj->setGeneric6CommentaireLib("generic6CommentaireLib");
        $this->assertEquals("generic6CommentaireLib", $obj->getGeneric6CommentaireLib());
    }
}
