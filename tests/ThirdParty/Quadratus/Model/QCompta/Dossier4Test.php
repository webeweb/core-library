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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier4;

/**
 * Dossier4 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier4Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier4();

        $this->assertNull($obj->getAcompte1());
        $this->assertNull($obj->getAcompte2());
        $this->assertNull($obj->getAcompte3());
        $this->assertNull($obj->getAcompte4());
        $this->assertNull($obj->getArchImp3519Tva());
        $this->assertNull($obj->getArchiveDeclTva());
        $this->assertNull($obj->getBalAgeeNbJoursInt1());
        $this->assertNull($obj->getBalAgeeNbJoursInt2());
        $this->assertNull($obj->getBalAgeeNbJoursInt3());
        $this->assertNull($obj->getBalAgeeNbJoursInt4());
        $this->assertNull($obj->getBase15pcent());
        $this->assertNull($obj->getBase33pcent());
        $this->assertNull($obj->getBaseTNpcent());
        $this->assertNull($obj->getCategoriePme());
        $this->assertNull($obj->getCdiBtq());
        $this->assertNull($obj->getCdiBureauDistributeur());
        $this->assertNull($obj->getCdiCodeOfficielCommune());
        $this->assertNull($obj->getCdiCodePostal());
        $this->assertNull($obj->getCdiComplement());
        $this->assertNull($obj->getCdiNom());
        $this->assertNull($obj->getCdiNomVille());
        $this->assertNull($obj->getCdiNomVoie());
        $this->assertNull($obj->getCdiNumVoie());
        $this->assertNull($obj->getCdiTel1());
        $this->assertNull($obj->getDatePlafondInterets());
        $this->assertNull($obj->getDatePlafondInterets2());
        $this->assertNull($obj->getDateTransfLotCvae());
        $this->assertNull($obj->getDateTransfLotIs());
        $this->assertNull($obj->getDateTransfertInterets());
        $this->assertNull($obj->getDateTransfertInterets2());
        $this->assertNull($obj->getDecTvaTypeReglement());
        $this->assertNull($obj->getDecalageQuinzaine());
        $this->assertNull($obj->getDeclReferencePaiement());
        $this->assertNull($obj->getDeclTvaCdi());
        $this->assertNull($obj->getDeclTvaInsp());
        $this->assertNull($obj->getDeclTvaRegime());
        $this->assertNull($obj->getFtiscice());
        $this->assertNull($obj->getFtisContribMtt());
        $this->assertNull($obj->getFtisCreditImpot());
        $this->assertNull($obj->getFtisDeficitsReportables());
        $this->assertNull($obj->getFtisNumCpt1());
        $this->assertNull($obj->getFtisNumCpt2());
        $this->assertNull($obj->getImmoRealloc());
        $this->assertNull($obj->getInteretBase());
        $this->assertNull($obj->getInteretsCap());
        $this->assertNull($obj->getInteretsCap2());
        $this->assertNull($obj->getInteretsContrepartie());
        $this->assertNull($obj->getInteretsContrepartie2());
        $this->assertNull($obj->getInteretsContrepartieDeduc());
        $this->assertNull($obj->getInteretsContrepartieDeduc2());
        $this->assertNull($obj->getInteretsPca());
        $this->assertNull($obj->getInteretsPca2());
        $this->assertNull($obj->getNoLotCvae());
        $this->assertNull($obj->getNoLotCptRecip());
        $this->assertNull($obj->getNoLotCreditIs());
        $this->assertNull($obj->getNoLotIs());
        $this->assertNull($obj->getNoLotInterets());
        $this->assertNull($obj->getNoLotInterets2());
        $this->assertNull($obj->getNoLotPaiementIs());
        $this->assertNull($obj->getPeriodeTransfertStock());
        $this->assertNull($obj->getPrecedentNumLotStock());
        $this->assertNull($obj->getRegimeAgricole());
        $this->assertNull($obj->getResultatNetCpt());
        $this->assertNull($obj->getRofTva());
        $this->assertNull($obj->getTvabicVir());
        $this->assertNull($obj->getTvaClotureFaite());
        $this->assertNull($obj->getTvaCodeCabinet());
        $this->assertNull($obj->getTvaCodeIntEmetteur());
        $this->assertNull($obj->getTvaCodeIntRecepteur());
        $this->assertNull($obj->getTvaCptDifference());
        $this->assertNull($obj->getTvaDeb3JrnExclure());
        $this->assertNull($obj->getTvaDestAttn());
        $this->assertNull($obj->getTvaDestFax());
        $this->assertNull($obj->getTvaDestNom());
        $this->assertNull($obj->getTvaediEdition());
        $this->assertNull($obj->getTvaEmetteurIsCab());
        $this->assertNull($obj->getTvaEnvoyerMail());
        $this->assertNull($obj->getTvaEtabBtq());
        $this->assertNull($obj->getTvaEtabBureauDistributeur());
        $this->assertNull($obj->getTvaEtabCodePostal());
        $this->assertNull($obj->getTvaEtabComplement());
        $this->assertNull($obj->getTvaEtabNom());
        $this->assertNull($obj->getTvaEtabNomVoie());
        $this->assertNull($obj->getTvaEtabNumVoie());
        $this->assertNull($obj->getTvaExpNom());
        $this->assertNull($obj->getTvaibanVir());
        $this->assertNull($obj->getTvaMailPj());
        $this->assertNull($obj->getTvaMoyenPaiement());
        $this->assertNull($obj->getTvaNomVir());
        $this->assertNull($obj->getTvaribVir());
        $this->assertNull($obj->getTvaRecepteurJeDeclare());
        $this->assertNull($obj->getTvaSignataire());
        $this->assertNull($obj->getTvatlraBic1());
        $this->assertNull($obj->getTvatlraBic2());
        $this->assertNull($obj->getTvatlraBic3());
        $this->assertNull($obj->getTvatlraIban1());
        $this->assertNull($obj->getTvatlraIban2());
        $this->assertNull($obj->getTvatlraIban3());
        $this->assertNull($obj->getTvatlraRib1());
        $this->assertNull($obj->getTvatlraRib2());
        $this->assertNull($obj->getTvatlraRib3());
        $this->assertNull($obj->getTvaVireCrlf());
        $this->assertNull($obj->getTauxPlafondInterets());
        $this->assertNull($obj->getTauxPlafondInterets2());
        $this->assertNull($obj->getTvaAchatsEnc());
        $this->assertNull($obj->getTvaCa12Ae());
        $this->assertNull($obj->getTvaCadtm());
        $this->assertNull($obj->getTvaCascade());
        $this->assertNull($obj->getTvaCodeJournalBq());
        $this->assertNull($obj->getTvaCodeJournalOd());
        $this->assertNull($obj->getTvaCptAAjouter());
        $this->assertNull($obj->getTvaCptAAjouterG());
        $this->assertNull($obj->getTvaCptADeduire());
        $this->assertNull($obj->getTvaCptAImputer());
        $this->assertNull($obj->getTvaCptAImputerG());
        $this->assertNull($obj->getTvaCptAPayer());
        $this->assertNull($obj->getTvaCptAPayerG());
        $this->assertNull($obj->getTvaCptAcqIntraCom());
        $this->assertNull($obj->getTvaCptAncTaux());
        $this->assertNull($obj->getTvaCptAnteDeduit());
        $this->assertNull($obj->getTvaCptAssimil3310());
        $this->assertNull($obj->getTvaCptAssimil3310G());
        $this->assertNull($obj->getTvaCptBiens());
        $this->assertNull($obj->getTvaCptBiensIntraCom());
        $this->assertNull($obj->getTvaCptDom());
        $this->assertNull($obj->getTvaCptGroupe());
        $this->assertNull($obj->getTvaCptImmos());
        $this->assertNull($obj->getTvaCptImmosIntraCom());
        $this->assertNull($obj->getTvaCptRegul());
        $this->assertNull($obj->getTvaCptRembours());
        $this->assertNull($obj->getTvaCptRemboursG());
        $this->assertNull($obj->getTvaCptReport());
        $this->assertNull($obj->getTvaCptReportG());
        $this->assertNull($obj->getTvaCptTauxPart());
        $this->assertNull($obj->getTvaCptVente());
        $this->assertNull($obj->getTvaE4Dbs());
        $this->assertNull($obj->getTvaE4Di());
        $this->assertNull($obj->getTvaE4Rbs());
        $this->assertNull($obj->getTvaE4Ri());
        $this->assertNull($obj->getTvaE4RJrnOd());
        $this->assertNull($obj->getTvaEnc3DerPerRechDa());
        $this->assertNull($obj->getTvaJourDecla());
        $this->assertNull($obj->getTvaMethode());
        $this->assertNull($obj->getTvaParametrageOk());
        $this->assertNull($obj->getTvaPeriodicite());
        $this->assertNull($obj->getTvaPrefixeIntracom());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTvaType());
        $this->assertNull($obj->getVmpCodeJrnPmv());
        $this->assertNull($obj->getVmpCptMoinsValue());
        $this->assertNull($obj->getVmpCptPlusValue());
        $this->assertNull($obj->getVmpGestEcrPmv());
        $this->assertNull($obj->getVmpGestionEnSaisie());
        $this->assertNull($obj->getYaRepriseCice());
        $this->assertNull($obj->getYaTauxReduit());
        $this->assertNull($obj->getbCa12T());
    }
}
