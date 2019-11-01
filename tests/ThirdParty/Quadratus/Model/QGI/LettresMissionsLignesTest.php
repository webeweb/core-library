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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LettresMissionsLignes;

/**
 * Lettres missions lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LettresMissionsLignes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDeclarationARediger());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getNbrOperations());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLettre());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPolice());
        $this->assertNull($obj->getRealisePar());
        $this->assertNull($obj->getTypeAffectation());
        $this->assertNull($obj->getUniqId());
    }
}
