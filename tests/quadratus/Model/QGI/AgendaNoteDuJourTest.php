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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\AgendaNoteDuJour;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda note du jour test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaNoteDuJourTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AgendaNoteDuJour();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new AgendaNoteDuJour();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setDateModif()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new AgendaNoteDuJour();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests setJour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour(): void {

        // Set a Date/time mock.
        $jour = new DateTime("2018-09-10");

        $obj = new AgendaNoteDuJour();

        $obj->setJour($jour);
        $this->assertSame($jour, $obj->getJour());
    }

    /**
     * Tests setMaJExterne()
     *
     * @return void
     */
    public function testSetMaJExterne(): void {

        $obj = new AgendaNoteDuJour();

        $obj->setMaJExterne(true);
        $this->assertEquals(true, $obj->getMaJExterne());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaNoteDuJour();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMaJExterne());
    }
}
