<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\AffaireSuivi;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Affaire suivi model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class AffaireSuiviTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffaireSuivi();

        $this->assertNull($obj->getAvancement());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateBilan());
        $this->assertNull($obj->getListeCollab());
        $this->assertNull($obj->getNbHeuresPrevisionnel());
    }

    /**
     * Tests the setAvancement() method.
     *
     * @return void
     */
    public function testSetAvancement() {

        $obj = new AffaireSuivi();

        $obj->setAvancement(10.092018);
        $this->assertEquals(10.092018, $obj->getAvancement());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffaireSuivi();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase() {

        $obj = new AffaireSuivi();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new AffaireSuivi();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDateBilan() method.
     *
     * @return void
     */
    public function testSetDateBilan() {

        $obj = new AffaireSuivi();

        $obj->setDateBilan(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateBilan());
    }

    /**
     * Tests the setListeCollab() method.
     *
     * @return void
     */
    public function testSetListeCollab() {

        $obj = new AffaireSuivi();

        $obj->setListeCollab("listeCollab");
        $this->assertEquals("listeCollab", $obj->getListeCollab());
    }

    /**
     * Tests the setNbHeuresPrevisionnel() method.
     *
     * @return void
     */
    public function testSetNbHeuresPrevisionnel() {

        $obj = new AffaireSuivi();

        $obj->setNbHeuresPrevisionnel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresPrevisionnel());
    }

}
