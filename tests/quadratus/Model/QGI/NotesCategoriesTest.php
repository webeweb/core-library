<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\NotesCategories;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Notes categories test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class NotesCategoriesTest extends AbstractTestCase {

    /**
     * Tests setCodeCategorie()
     *
     * @return void
     */
    public function testSetCodeCategorie(): void {

        $obj = new NotesCategories();

        $obj->setCodeCategorie("codeCategorie");
        $this->assertEquals("codeCategorie", $obj->getCodeCategorie());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new NotesCategories();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setNomCategorie()
     *
     * @return void
     */
    public function testSetNomCategorie(): void {

        $obj = new NotesCategories();

        $obj->setNomCategorie("nomCategorie");
        $this->assertEquals("nomCategorie", $obj->getNomCategorie());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new NotesCategories();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NotesCategories();

        $this->assertNull($obj->getCodeCategorie());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getNomCategorie());
        $this->assertNull($obj->getPosition());
    }
}
