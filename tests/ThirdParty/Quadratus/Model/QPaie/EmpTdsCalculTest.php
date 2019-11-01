<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpTdsCalcul;

/**
 * Emp tds calcul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpTdsCalculTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpTdsCalcul();

        $this->assertNull($obj->getBaseCalcTds142());
        $this->assertNull($obj->getCodeAtPer());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCumNetImpos());
        $this->assertNull($obj->getDebutPeriodeDecl());
        $this->assertNull($obj->getDernierePeriodeAnnee());
        $this->assertNull($obj->getFinPeriodeDecl());
        $this->assertNull($obj->getIndemnImpat());
        $this->assertNull($obj->getMontantHSupComplExo());
        $this->assertNull($obj->getNbHeureSal());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbPerPaie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getParticipServPers());
        $this->assertNull($obj->getPremierePeriodeAnnee());
        $this->assertNull($obj->getTds100());
        $this->assertNull($obj->getTds102());
        $this->assertNull($obj->getTds103());
        $this->assertNull($obj->getTds105());
        $this->assertNull($obj->getTds107());
        $this->assertNull($obj->getTds108());
        $this->assertNull($obj->getTds109());
        $this->assertNull($obj->getTds110());
        $this->assertNull($obj->getTds111());
        $this->assertNull($obj->getTds112());
        $this->assertNull($obj->getTds113());
        $this->assertNull($obj->getTds117());
        $this->assertNull($obj->getTds119());
        $this->assertNull($obj->getTds120());
        $this->assertNull($obj->getTds121());
        $this->assertNull($obj->getTds122());
        $this->assertNull($obj->getTds125());
        $this->assertNull($obj->getTds127());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds132());
        $this->assertNull($obj->getTds133());
        $this->assertNull($obj->getTds134());
        $this->assertNull($obj->getTds135());
        $this->assertNull($obj->getTds136());
        $this->assertNull($obj->getTds137());
        $this->assertNull($obj->getTds139());
        $this->assertNull($obj->getTds141());
        $this->assertNull($obj->getTds75());
        $this->assertNull($obj->getTds77());
        $this->assertNull($obj->getTds78());
        $this->assertNull($obj->getTds81());
        $this->assertNull($obj->getTds82());
        $this->assertNull($obj->getTds84());
        $this->assertNull($obj->getTds85());
        $this->assertNull($obj->getTds86());
        $this->assertNull($obj->getTds87());
        $this->assertNull($obj->getTds88());
        $this->assertNull($obj->getTds89());
        $this->assertNull($obj->getTds90());
        $this->assertNull($obj->getTds91());
        $this->assertNull($obj->getTds92());
        $this->assertNull($obj->getTds93());
        $this->assertNull($obj->getTds94());
        $this->assertNull($obj->getTds95());
        $this->assertNull($obj->getTdsSup120());
        $this->assertNull($obj->getTdsSup1200());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTds142DejaCalcule());
        $this->assertNull($obj->getTdsAbattFraisPro());
        $this->assertNull($obj->getTdsAllocChom());
        $this->assertNull($obj->getTdsAllocComplIjss());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTdsContribCeChequesVac());
        $this->assertNull($obj->getTdsCumulN());
        $this->assertNull($obj->getTdsFlagRaz());
        $this->assertNull($obj->getTdsIndemnDepartRetraite());
        $this->assertNull($obj->getTdsIndemnImposables());
        $this->assertNull($obj->getTdsRembFraisPro());
        $this->assertNull($obj->getTdsSommeExoTaxeSal());
        $this->assertNull($obj->getTotalPlaf());
    }
}
