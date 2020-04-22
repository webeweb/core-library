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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaNoteDuJour;

/**
 * Agenda note du jour test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaNoteDuJourTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AgendaNoteDuJour();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new AgendaNoteDuJour();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new AgendaNoteDuJour();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour() {

        // Set a Date/time mock.
        $jour = new DateTime("2018-09-10");

        $obj = new AgendaNoteDuJour();

        $obj->setJour($jour);
        $this->assertSame($jour, $obj->getJour());
    }

    /**
     * Tests the setMaJExterne() method.
     *
     * @return void
     */
    public function testSetMaJExterne() {

        $obj = new AgendaNoteDuJour();

        $obj->setMaJExterne(true);
        $this->assertEquals(true, $obj->getMaJExterne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new AgendaNoteDuJour();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMaJExterne());
    }
}
