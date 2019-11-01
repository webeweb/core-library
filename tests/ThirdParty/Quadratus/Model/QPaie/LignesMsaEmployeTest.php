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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesMsaEmploye;

/**
 * Lignes msa employe test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaEmployeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesMsaEmploye();

        $this->assertNull($obj->getAgirc());
        $this->assertNull($obj->getAgircEvo());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCddcdiEvo());
        $this->assertNull($obj->getCadre());
        $this->assertNull($obj->getCadreEvo());
        $this->assertNull($obj->getCodeCollegePrud());
        $this->assertNull($obj->getCodeCollegePrudPrec());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeSectionPrud());
        $this->assertNull($obj->getCodeSectionPrudPrec());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCoeffEmploi());
        $this->assertNull($obj->getCoeffEmploiEvo());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getContrat());
        $this->assertNull($obj->getContratEvo());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateEvo());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDtDebAbs());
        $this->assertNull($obj->getDtFinAbs());
        $this->assertNull($obj->getDureeTrav());
        $this->assertNull($obj->getDureeTravPrec());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEmploiEvo());
        $this->assertNull($obj->getEvoAgirc());
        $this->assertNull($obj->getEvoCddcdi());
        $this->assertNull($obj->getEvoCrcca36());
        $this->assertNull($obj->getEvoCrcca4Bis());
        $this->assertNull($obj->getEvoCadre());
        $this->assertNull($obj->getEvoContrat());
        $this->assertNull($obj->getEvoEmploi());
        $this->assertNull($obj->getEvoFisc());
        $this->assertNull($obj->getFisc());
        $this->assertNull($obj->getFiscEvo());
        $this->assertNull($obj->getHEquivalence());
        $this->assertNull($obj->getHEquivalencePrec());
        $this->assertNull($obj->getLieuTravail());
        $this->assertNull($obj->getLieuTravailEvo());
        $this->assertNull($obj->getMontant11());
        $this->assertNull($obj->getMontant12());
        $this->assertNull($obj->getMontant13());
        $this->assertNull($obj->getMontant14());
        $this->assertNull($obj->getMontant21());
        $this->assertNull($obj->getMontant22());
        $this->assertNull($obj->getMontant23());
        $this->assertNull($obj->getMontant24());
        $this->assertNull($obj->getMontant31());
        $this->assertNull($obj->getMontant32());
        $this->assertNull($obj->getMontant33());
        $this->assertNull($obj->getMontant34());
        $this->assertNull($obj->getMontantAutre11());
        $this->assertNull($obj->getMontantAutre12());
        $this->assertNull($obj->getMontantAutre13());
        $this->assertNull($obj->getMontantAutre14());
        $this->assertNull($obj->getMontantAutre21());
        $this->assertNull($obj->getMontantAutre22());
        $this->assertNull($obj->getMontantAutre23());
        $this->assertNull($obj->getMontantAutre24());
        $this->assertNull($obj->getMontantAutre31());
        $this->assertNull($obj->getMontantAutre32());
        $this->assertNull($obj->getMontantAutre33());
        $this->assertNull($obj->getMontantAutre34());
        $this->assertNull($obj->getMontantSmicRetenu1());
        $this->assertNull($obj->getMontantSmicRetenu2());
        $this->assertNull($obj->getMontantSmicRetenu3());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbHeures1());
        $this->assertNull($obj->getNbHeures2());
        $this->assertNull($obj->getNbHeures3());
        $this->assertNull($obj->getNbJours1());
        $this->assertNull($obj->getNbJours2());
        $this->assertNull($obj->getNbJours3());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroEmploye2());
        $this->assertNull($obj->getPCentPartiel());
        $this->assertNull($obj->getPerDeb1());
        $this->assertNull($obj->getPerDeb2());
        $this->assertNull($obj->getPerDeb3());
        $this->assertNull($obj->getPerFin1());
        $this->assertNull($obj->getPerFin2());
        $this->assertNull($obj->getPerFin3());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPeriodicitePrec());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getSaisonnier());
        $this->assertNull($obj->getSaisonnierPrec());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getServiceEvo());
        $this->assertNull($obj->getSuspensionZrrzru1());
        $this->assertNull($obj->getSuspensionZrrzru2());
        $this->assertNull($obj->getSuspensionZrrzru3());
        $this->assertNull($obj->getTauxSmicFillon1());
        $this->assertNull($obj->getTauxSmicFillon2());
        $this->assertNull($obj->getTauxSmicFillon3());
        $this->assertNull($obj->getTempsPartiel());
        $this->assertNull($obj->getTempsPartielEvo());
        $this->assertNull($obj->getTotalGeneral());
        $this->assertNull($obj->getTypeAbsence());
        $this->assertNull($obj->getTypeAutreRemun11());
        $this->assertNull($obj->getTypeAutreRemun12());
        $this->assertNull($obj->getTypeAutreRemun13());
        $this->assertNull($obj->getTypeAutreRemun14());
        $this->assertNull($obj->getTypeAutreRemun21());
        $this->assertNull($obj->getTypeAutreRemun22());
        $this->assertNull($obj->getTypeAutreRemun23());
        $this->assertNull($obj->getTypeAutreRemun24());
        $this->assertNull($obj->getTypeAutreRemun31());
        $this->assertNull($obj->getTypeAutreRemun32());
        $this->assertNull($obj->getTypeAutreRemun33());
        $this->assertNull($obj->getTypeAutreRemun34());
        $this->assertNull($obj->getTypeCrccaEmp());
        $this->assertNull($obj->getTypeRemun11());
        $this->assertNull($obj->getTypeRemun12());
        $this->assertNull($obj->getTypeRemun13());
        $this->assertNull($obj->getTypeRemun14());
        $this->assertNull($obj->getTypeRemun21());
        $this->assertNull($obj->getTypeRemun22());
        $this->assertNull($obj->getTypeRemun23());
        $this->assertNull($obj->getTypeRemun24());
        $this->assertNull($obj->getTypeRemun31());
        $this->assertNull($obj->getTypeRemun32());
        $this->assertNull($obj->getTypeRemun33());
        $this->assertNull($obj->getTypeRemun34());
        $this->assertNull($obj->getTypeTravail());
    }
}
