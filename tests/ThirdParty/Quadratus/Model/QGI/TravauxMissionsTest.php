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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TravauxMissions;

/**
 * Travaux missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TravauxMissionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TravauxMissions();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getDeclarationARediger());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMissions());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getNePasEditer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getRealisePar());
        $this->assertNull($obj->getTypeAffectation());
    }
}
