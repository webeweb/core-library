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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPlafTpCommentaireLibTrait;

/**
 * Plaf t p commentaire lib trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPlafTpCommentaireLibTraitTest extends AbstractTestCase {

    /**
     * Tests the setPlafTpCommentaireLib() method.
     *
     * @return void
     */
    public function testSetPlafTpCommentaireLib() {

        $obj = new TestStringPlafTpCommentaireLibTrait();

        $obj->setPlafTpCommentaireLib("plafTpCommentaireLib");
        $this->assertEquals("plafTpCommentaireLib", $obj->getPlafTpCommentaireLib());
    }
}
