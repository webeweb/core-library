<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Employes;

/**
 * Employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Employes();

        $this->assertNull($obj->getATransfererEnP());
        $this->assertNull($obj->getAdministratif());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePaysNaissance());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCommercial());
        $this->assertNull($obj->getCommuneNaissance());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getDateAncien());
        $this->assertNull($obj->getDateEntree1());
        $this->assertNull($obj->getDateEntree2());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateSortie1());
        $this->assertNull($obj->getDateSortie2());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDernNumPrime());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJf());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHandicape());
        $this->assertNull($obj->getHotellerie());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getLivreur());
        $this->assertNull($obj->getMensualisationTache());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEnfants());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroInsee());
        $this->assertNull($obj->getNumeroPjPass());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPolyvalent());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPrime());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTravailleJf());
        $this->assertNull($obj->getUniqId());
    }
}
