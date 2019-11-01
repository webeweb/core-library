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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Fournisseurs;

/**
 * Fournisseurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FournisseursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fournisseurs();

        $this->assertNull($obj->getApe());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTva1());
        $this->assertNull($obj->getCodeTva2());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFraisFixes1());
        $this->assertNull($obj->getFraisFixes2());
        $this->assertNull($obj->getFraisFixes3());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getNbColis());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPoids());
        $this->assertNull($obj->getPortable1());
        $this->assertNull($obj->getPortable2());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getReferenceClient());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getTvaCle());
        $this->assertNull($obj->getTvaCodeDossier());
        $this->assertNull($obj->getTvaCodeRecette());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTelVoiture());
        $this->assertNull($obj->getTelex());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTxEscompteAchat());
    }
}
