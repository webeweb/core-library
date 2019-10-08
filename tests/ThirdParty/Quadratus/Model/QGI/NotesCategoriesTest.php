<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\NotesCategories;

/**
 * Notes categories model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class NotesCategoriesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NotesCategories();

        $this->assertNull($obj->getCodeCategorie());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNomCategorie());
        $this->assertNull($obj->getPosition());
    }

    /**
     * Tests the setCodeCategorie() method.
     *
     * @return void
     */
    public function testSetCodeCategorie() {

        $obj = new NotesCategories();

        $obj->setCodeCategorie("codeCategorie");
        $this->assertEquals("codeCategorie", $obj->getCodeCategorie());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new NotesCategories();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setNomCategorie() method.
     *
     * @return void
     */
    public function testSetNomCategorie() {

        $obj = new NotesCategories();

        $obj->setNomCategorie("nomCategorie");
        $this->assertEquals("nomCategorie", $obj->getNomCategorie());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new NotesCategories();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }
}
