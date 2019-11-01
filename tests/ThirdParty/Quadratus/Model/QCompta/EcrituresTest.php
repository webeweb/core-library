<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Ecritures;

/**
 * Ecritures test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Ecritures();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBonsAPayer());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCentreSimple());
        $this->assertNull($obj->getClientOuFrn());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLettrage());
        $this->assertNull($obj->getCodeLettrageTiers());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getCodeOperateur());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getDateDecTva());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDatePointageAux());
        $this->assertNull($obj->getDateRapproBancaire());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getDateSysValidation());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEcheanceSimple());
        $this->assertNull($obj->getEcritureNum());
        $this->assertNull($obj->getEnLitige());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMethodeTva());
        $this->assertNull($obj->getMilliemesAna());
        $this->assertNull($obj->getModePaiement());
        $this->assertNull($obj->getMontantAna());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getMtDevForce());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getNoLotFactor());
        $this->assertNull($obj->getNoLotIs());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumCptOrigine());
        $this->assertNull($obj->getNumEcrEco());
        $this->assertNull($obj->getNumEditLettrePaiement());
        $this->assertNull($obj->getNumLettrage());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getPeriodiciteDebut());
        $this->assertNull($obj->getPeriodiciteFin());
        $this->assertNull($obj->getPieceInterne());
        $this->assertNull($obj->getPrctRepartition());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRapproBancaireOk());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTvaE4Bi());
        $this->assertNull($obj->getTvaE4Dr());
        $this->assertNull($obj->getTvaE4Mt());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeSaisie());
        $this->assertNull($obj->getValidee());
    }
}
