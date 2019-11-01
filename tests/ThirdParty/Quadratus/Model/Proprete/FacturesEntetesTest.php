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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FacturesEntetes;

/**
 * Factures entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FacturesEntetes();

        $this->assertNull($obj->getAdIntBtq());
        $this->assertNull($obj->getAdIntBureauDistributeur());
        $this->assertNull($obj->getAdIntCodePays());
        $this->assertNull($obj->getAdIntCodePostal());
        $this->assertNull($obj->getAdIntComplement());
        $this->assertNull($obj->getAdIntNom());
        $this->assertNull($obj->getAdIntNomVoie());
        $this->assertNull($obj->getAdIntNumVoie());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalClient());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeModeReglement());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeTvaClient());
        $this->assertNull($obj->getCodeVentilClient());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateFacture());
        $this->assertNull($obj->getDateLimiteForcee());
        $this->assertNull($obj->getDateLimiteResiliation());
        $this->assertNull($obj->getEcheanceDepart());
        $this->assertNull($obj->getEcheanceForcee());
        $this->assertNull($obj->getEcheanceLe());
        $this->assertNull($obj->getEcheanceNbJours());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFactureVm());
        $this->assertNull($obj->getFonctionCommercial());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getLibTransfCpta());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleTransfCpta());
        $this->assertNull($obj->getLienDocDossCpta());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMentionLibre());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getMontantHtpx());
        $this->assertNull($obj->getMontantHtvm());
        $this->assertNull($obj->getMontantTtc());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCommandeWebFt());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPrestation());
        $this->assertNull($obj->getRum());
        $this->assertNull($obj->getReference1());
        $this->assertNull($obj->getReference2());
        $this->assertNull($obj->getReference3());
        $this->assertNull($obj->getReference4());
        $this->assertNull($obj->getSaisirAdresse());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisTaxeDeee());
        $this->assertNull($obj->getTauxDevise());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTauxRemise1());
        $this->assertNull($obj->getTauxRemise2());
        $this->assertNull($obj->getValeurIcs());
    }
}
