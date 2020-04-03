<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Clients2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Clients2 {

    /**
     * Allotissement.
     *
     * @var bool
     */
    private $allotissement;

    /**
     * Bl mail.
     *
     * @var bool
     */
    private $blMail;

    /**
     * Cdes mail.
     *
     * @var bool
     */
    private $cdesMail;

    /**
     * Code activite cga.
     *
     * @var string
     */
    private $codeActiviteCga;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code transporteur1.
     *
     * @var string
     */
    private $codeTransporteur1;

    /**
     * Code transporteur2.
     *
     * @var string
     */
    private $codeTransporteur2;

    /**
     * Code transporteur3.
     *
     * @var string
     */
    private $codeTransporteur3;

    /**
     * Code transporteur4.
     *
     * @var string
     */
    private $codeTransporteur4;

    /**
     * Code transporteur5.
     *
     * @var string
     */
    private $codeTransporteur5;

    /**
     * Date deb exe publication.
     *
     * @var DateTime|null
     */
    private $dateDebExePublication;

    /**
     * Delai livraison.
     *
     * @var int
     */
    private $delaiLivraison;

    /**
     * Devis mail.
     *
     * @var bool
     */
    private $devisMail;

    /**
     * Ean client.
     *
     * @var string
     */
    private $eanClient;

    /**
     * Ean facture papier.
     *
     * @var string
     */
    private $eanFacturePapier;

    /**
     * Ean plateforme.
     *
     * @var string
     */
    private $eanPlateforme;

    /**
     * Echeance fin decade.
     *
     * @var bool
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool
     */
    private $echeanceFinQuinzaine;

    /**
     * Edi export bl.
     *
     * @var bool
     */
    private $ediExportBl;

    /**
     * Edi export fac.
     *
     * @var bool
     */
    private $ediExportFac;

    /**
     * Fact complement suite.
     *
     * @var string
     */
    private $factComplementSuite;

    /**
     * Fact zip code.
     *
     * @var string
     */
    private $factZipCode;

    /**
     * Ind mail publication.
     *
     * @var int
     */
    private $indMailPublication;

    /**
     * Indice bl mail.
     *
     * @var int
     */
    private $indiceBlMail;

    /**
     * Indice cdes mail.
     *
     * @var int
     */
    private $indiceCdesMail;

    /**
     * Indice devis mail.
     *
     * @var int
     */
    private $indiceDevisMail;

    /**
     * Indice releves mail.
     *
     * @var int
     */
    private $indiceRelevesMail;

    /**
     * Lettre de mission date signature.
     *
     * @var DateTime|null
     */
    private $lettreDeMissionDateSignature;

    /**
     * localisation archives.
     *
     * @var string
     */
    private $localisationArchives;

    /**
     * Modele facture manuelle spe.
     *
     * @var string
     */
    private $modeleFactureManuelleSpe;

    /**
     * Montant depassement autorise.
     *
     * @var float
     */
    private $montantDepassementAutorise;

    /**
     * Motif entree.
     *
     * @var string
     */
    private $motifEntree;

    /**
     * Motif sortie.
     *
     * @var string
     */
    private $motifSortie;

    /**
     * Mt transport1.
     *
     * @var float
     */
    private $mtTransport1;

    /**
     * Mt transport2.
     *
     * @var float
     */
    private $mtTransport2;

    /**
     * Mt transport3.
     *
     * @var float
     */
    private $mtTransport3;

    /**
     * Mt transport4.
     *
     * @var float
     */
    private $mtTransport4;

    /**
     * Mt transport5.
     *
     * @var float
     */
    private $mtTransport5;

    /**
     * Non concerne is.
     *
     * @var bool
     */
    private $nonConcerneIs;

    /**
     * Non concerne tp.
     *
     * @var bool
     */
    private $nonConcerneTp;

    /**
     * Non facturable.
     *
     * @var bool
     */
    private $nonFacturable;

    /**
     * Pme tarif ou rem spe.
     *
     * @var bool
     */
    private $pmeTarifOuRemSpe;

    /**
     * Prevenir mail publier.
     *
     * @var bool
     */
    private $prevenirMailPublier;

    /**
     * Releves mail.
     *
     * @var bool
     */
    private $relevesMail;

    /**
     * Social complement suite.
     *
     * @var string
     */
    private $socialComplementSuite;

    /**
     * Social zip code.
     *
     * @var string
     */
    private $socialZipCode;

    /**
     * Trs art pied.
     *
     * @var string
     */
    private $trsArtPied;

    /**
     * Trs art pied2.
     *
     * @var string
     */
    private $trsArtPied2;

    /**
     * Trs categ march.
     *
     * @var string
     */
    private $trsCategMarch;

    /**
     * Trs centre ana.
     *
     * @var string
     */
    private $trsCentreAna;

    /**
     * Trs code tarif1.
     *
     * @var string
     */
    private $trsCodeTarif1;

    /**
     * Trs code tarif1 sens.
     *
     * @var string
     */
    private $trsCodeTarif1Sens;

    /**
     * Trs code tarif2.
     *
     * @var string
     */
    private $trsCodeTarif2;

    /**
     * Trs code tarif2 sens.
     *
     * @var string
     */
    private $trsCodeTarif2Sens;

    /**
     * Trs code tarif3.
     *
     * @var string
     */
    private $trsCodeTarif3;

    /**
     * Trs code tarif3 sens.
     *
     * @var string
     */
    private $trsCodeTarif3Sens;

    /**
     * Trs code tarif4.
     *
     * @var string
     */
    private $trsCodeTarif4;

    /**
     * Trs code tarif4 sens.
     *
     * @var string
     */
    private $trsCodeTarif4Sens;

    /**
     * Trs code tarif5.
     *
     * @var string
     */
    private $trsCodeTarif5;

    /**
     * Trs code tarif5 sens.
     *
     * @var string
     */
    private $trsCodeTarif5Sens;

    /**
     * Trs code tarif6.
     *
     * @var string
     */
    private $trsCodeTarif6;

    /**
     * Trs code tarif6 sens.
     *
     * @var string
     */
    private $trsCodeTarif6Sens;

    /**
     * Trs code tarif def.
     *
     * @var int
     */
    private $trsCodeTarifDef;

    /**
     * Trs comment1.
     *
     * @var string
     */
    private $trsComment1;

    /**
     * Trs comment2.
     *
     * @var string
     */
    private $trsComment2;

    /**
     * Trs comment3.
     *
     * @var string
     */
    private $trsComment3;

    /**
     * Trs comment4.
     *
     * @var string
     */
    private $trsComment4;

    /**
     * Trs comment5.
     *
     * @var string
     */
    private $trsComment5;

    /**
     * Trs comment6.
     *
     * @var string
     */
    private $trsComment6;

    /**
     * Trs comment7.
     *
     * @var string
     */
    private $trsComment7;

    /**
     * Trs comment8.
     *
     * @var string
     */
    private $trsComment8;

    /**
     * Trs comment9.
     *
     * @var string
     */
    private $trsComment9;

    /**
     * Trs consignes1.
     *
     * @var string
     */
    private $trsConsignes1;

    /**
     * Trs consignes2.
     *
     * @var string
     */
    private $trsConsignes2;

    /**
     * Trs consignes3.
     *
     * @var string
     */
    private $trsConsignes3;

    /**
     * Trs gestion palettes.
     *
     * @var bool
     */
    private $trsGestionPalettes;

    /**
     * Trs marchandise sensible.
     *
     * @var bool
     */
    private $trsMarchandiseSensible;

    /**
     * Trs modele facture spe.
     *
     * @var string
     */
    private $trsModeleFactureSpe;

    /**
     * Trs poids mini pal.
     *
     * @var float
     */
    private $trsPoidsMiniPal;

    /**
     * Trs port du auto.
     *
     * @var bool
     */
    private $trsPortDuAuto;

    /**
     * Trs suivi ca mens.
     *
     * @var bool
     */
    private $trsSuiviCaMens;

    /**
     * Trs suivi dt enl.
     *
     * @var bool
     */
    private $trsSuiviDtEnl;

    /**
     * Trs suivi dt liv.
     *
     * @var bool
     */
    private $trsSuiviDtLiv;

    /**
     * Trs suivi dt liv fax.
     *
     * @var string
     */
    private $trsSuiviDtLivFax;

    /**
     * Trs suivi dt liv mail.
     *
     * @var string
     */
    private $trsSuiviDtLivMail;

    /**
     * Trs type client.
     *
     * @var string
     */
    private $trsTypeClient;

    /**
     * Trs type facturation.
     *
     * @var string
     */
    private $trsTypeFacturation;

    /**
     * Trs type travail.
     *
     * @var string
     */
    private $trsTypeTravail;

    /**
     * Type transport1.
     *
     * @var string
     */
    private $typeTransport1;

    /**
     * Type transport2.
     *
     * @var string
     */
    private $typeTransport2;

    /**
     * Type transport3.
     *
     * @var string
     */
    private $typeTransport3;

    /**
     * Type transport4.
     *
     * @var string
     */
    private $typeTransport4;

    /**
     * Type transport5.
     *
     * @var string
     */
    private $typeTransport5;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the allotissement.
     *
     * @return bool Returns the allotissement.
     */
    public function getAllotissement() {
        return $this->allotissement;
    }

    /**
     * Get the bl mail.
     *
     * @return bool Returns the bl mail.
     */
    public function getBlMail() {
        return $this->blMail;
    }

    /**
     * Get the cdes mail.
     *
     * @return bool Returns the cdes mail.
     */
    public function getCdesMail() {
        return $this->cdesMail;
    }

    /**
     * Get the code activite cga.
     *
     * @return string Returns the code activite cga.
     */
    public function getCodeActiviteCga() {
        return $this->codeActiviteCga;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code transporteur1.
     *
     * @return string Returns the code transporteur1.
     */
    public function getCodeTransporteur1() {
        return $this->codeTransporteur1;
    }

    /**
     * Get the code transporteur2.
     *
     * @return string Returns the code transporteur2.
     */
    public function getCodeTransporteur2() {
        return $this->codeTransporteur2;
    }

    /**
     * Get the code transporteur3.
     *
     * @return string Returns the code transporteur3.
     */
    public function getCodeTransporteur3() {
        return $this->codeTransporteur3;
    }

    /**
     * Get the code transporteur4.
     *
     * @return string Returns the code transporteur4.
     */
    public function getCodeTransporteur4() {
        return $this->codeTransporteur4;
    }

    /**
     * Get the code transporteur5.
     *
     * @return string Returns the code transporteur5.
     */
    public function getCodeTransporteur5() {
        return $this->codeTransporteur5;
    }

    /**
     * Get the date deb exe publication.
     *
     * @return DateTime|null Returns the date deb exe publication.
     */
    public function getDateDebExePublication() {
        return $this->dateDebExePublication;
    }

    /**
     * Get the delai livraison.
     *
     * @return int Returns the delai livraison.
     */
    public function getDelaiLivraison() {
        return $this->delaiLivraison;
    }

    /**
     * Get the devis mail.
     *
     * @return bool Returns the devis mail.
     */
    public function getDevisMail() {
        return $this->devisMail;
    }

    /**
     * Get the ean client.
     *
     * @return string Returns the ean client.
     */
    public function getEanClient() {
        return $this->eanClient;
    }

    /**
     * Get the ean facture papier.
     *
     * @return string Returns the ean facture papier.
     */
    public function getEanFacturePapier() {
        return $this->eanFacturePapier;
    }

    /**
     * Get the ean plateforme.
     *
     * @return string Returns the ean plateforme.
     */
    public function getEanPlateforme() {
        return $this->eanPlateforme;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the edi export bl.
     *
     * @return bool Returns the edi export bl.
     */
    public function getEdiExportBl() {
        return $this->ediExportBl;
    }

    /**
     * Get the edi export fac.
     *
     * @return bool Returns the edi export fac.
     */
    public function getEdiExportFac() {
        return $this->ediExportFac;
    }

    /**
     * Get the fact complement suite.
     *
     * @return string Returns the fact complement suite.
     */
    public function getFactComplementSuite() {
        return $this->factComplementSuite;
    }

    /**
     * Get the fact zip code.
     *
     * @return string Returns the fact zip code.
     */
    public function getFactZipCode() {
        return $this->factZipCode;
    }

    /**
     * Get the ind mail publication.
     *
     * @return int Returns the ind mail publication.
     */
    public function getIndMailPublication() {
        return $this->indMailPublication;
    }

    /**
     * Get the indice bl mail.
     *
     * @return int Returns the indice bl mail.
     */
    public function getIndiceBlMail() {
        return $this->indiceBlMail;
    }

    /**
     * Get the indice cdes mail.
     *
     * @return int Returns the indice cdes mail.
     */
    public function getIndiceCdesMail() {
        return $this->indiceCdesMail;
    }

    /**
     * Get the indice devis mail.
     *
     * @return int Returns the indice devis mail.
     */
    public function getIndiceDevisMail() {
        return $this->indiceDevisMail;
    }

    /**
     * Get the indice releves mail.
     *
     * @return int Returns the indice releves mail.
     */
    public function getIndiceRelevesMail() {
        return $this->indiceRelevesMail;
    }

    /**
     * Get the lettre de mission date signature.
     *
     * @return DateTime|null Returns the lettre de mission date signature.
     */
    public function getLettreDeMissionDateSignature() {
        return $this->lettreDeMissionDateSignature;
    }

    /**
     * Get the modele facture manuelle spe.
     *
     * @return string Returns the modele facture manuelle spe.
     */
    public function getModeleFactureManuelleSpe() {
        return $this->modeleFactureManuelleSpe;
    }

    /**
     * Get the montant depassement autorise.
     *
     * @return float Returns the montant depassement autorise.
     */
    public function getMontantDepassementAutorise() {
        return $this->montantDepassementAutorise;
    }

    /**
     * Get the motif entree.
     *
     * @return string Returns the motif entree.
     */
    public function getMotifEntree() {
        return $this->motifEntree;
    }

    /**
     * Get the motif sortie.
     *
     * @return string Returns the motif sortie.
     */
    public function getMotifSortie() {
        return $this->motifSortie;
    }

    /**
     * Get the mt transport1.
     *
     * @return float Returns the mt transport1.
     */
    public function getMtTransport1() {
        return $this->mtTransport1;
    }

    /**
     * Get the mt transport2.
     *
     * @return float Returns the mt transport2.
     */
    public function getMtTransport2() {
        return $this->mtTransport2;
    }

    /**
     * Get the mt transport3.
     *
     * @return float Returns the mt transport3.
     */
    public function getMtTransport3() {
        return $this->mtTransport3;
    }

    /**
     * Get the mt transport4.
     *
     * @return float Returns the mt transport4.
     */
    public function getMtTransport4() {
        return $this->mtTransport4;
    }

    /**
     * Get the mt transport5.
     *
     * @return float Returns the mt transport5.
     */
    public function getMtTransport5() {
        return $this->mtTransport5;
    }

    /**
     * Get the non concerne is.
     *
     * @return bool Returns the non concerne is.
     */
    public function getNonConcerneIs() {
        return $this->nonConcerneIs;
    }

    /**
     * Get the non concerne tp.
     *
     * @return bool Returns the non concerne tp.
     */
    public function getNonConcerneTp() {
        return $this->nonConcerneTp;
    }

    /**
     * Get the non facturable.
     *
     * @return bool Returns the non facturable.
     */
    public function getNonFacturable() {
        return $this->nonFacturable;
    }

    /**
     * Get the pme tarif ou rem spe.
     *
     * @return bool Returns the pme tarif ou rem spe.
     */
    public function getPmeTarifOuRemSpe() {
        return $this->pmeTarifOuRemSpe;
    }

    /**
     * Get the prevenir mail publier.
     *
     * @return bool Returns the prevenir mail publier.
     */
    public function getPrevenirMailPublier() {
        return $this->prevenirMailPublier;
    }

    /**
     * Get the releves mail.
     *
     * @return bool Returns the releves mail.
     */
    public function getRelevesMail() {
        return $this->relevesMail;
    }

    /**
     * Get the social complement suite.
     *
     * @return string Returns the social complement suite.
     */
    public function getSocialComplementSuite() {
        return $this->socialComplementSuite;
    }

    /**
     * Get the social zip code.
     *
     * @return string Returns the social zip code.
     */
    public function getSocialZipCode() {
        return $this->socialZipCode;
    }

    /**
     * Get the trs art pied.
     *
     * @return string Returns the trs art pied.
     */
    public function getTrsArtPied() {
        return $this->trsArtPied;
    }

    /**
     * Get the trs art pied2.
     *
     * @return string Returns the trs art pied2.
     */
    public function getTrsArtPied2() {
        return $this->trsArtPied2;
    }

    /**
     * Get the trs categ march.
     *
     * @return string Returns the trs categ march.
     */
    public function getTrsCategMarch() {
        return $this->trsCategMarch;
    }

    /**
     * Get the trs centre ana.
     *
     * @return string Returns the trs centre ana.
     */
    public function getTrsCentreAna() {
        return $this->trsCentreAna;
    }

    /**
     * Get the trs code tarif1.
     *
     * @return string Returns the trs code tarif1.
     */
    public function getTrsCodeTarif1() {
        return $this->trsCodeTarif1;
    }

    /**
     * Get the trs code tarif1 sens.
     *
     * @return string Returns the trs code tarif1 sens.
     */
    public function getTrsCodeTarif1Sens() {
        return $this->trsCodeTarif1Sens;
    }

    /**
     * Get the trs code tarif2.
     *
     * @return string Returns the trs code tarif2.
     */
    public function getTrsCodeTarif2() {
        return $this->trsCodeTarif2;
    }

    /**
     * Get the trs code tarif2 sens.
     *
     * @return string Returns the trs code tarif2 sens.
     */
    public function getTrsCodeTarif2Sens() {
        return $this->trsCodeTarif2Sens;
    }

    /**
     * Get the trs code tarif3.
     *
     * @return string Returns the trs code tarif3.
     */
    public function getTrsCodeTarif3() {
        return $this->trsCodeTarif3;
    }

    /**
     * Get the trs code tarif3 sens.
     *
     * @return string Returns the trs code tarif3 sens.
     */
    public function getTrsCodeTarif3Sens() {
        return $this->trsCodeTarif3Sens;
    }

    /**
     * Get the trs code tarif4.
     *
     * @return string Returns the trs code tarif4.
     */
    public function getTrsCodeTarif4() {
        return $this->trsCodeTarif4;
    }

    /**
     * Get the trs code tarif4 sens.
     *
     * @return string Returns the trs code tarif4 sens.
     */
    public function getTrsCodeTarif4Sens() {
        return $this->trsCodeTarif4Sens;
    }

    /**
     * Get the trs code tarif5.
     *
     * @return string Returns the trs code tarif5.
     */
    public function getTrsCodeTarif5() {
        return $this->trsCodeTarif5;
    }

    /**
     * Get the trs code tarif5 sens.
     *
     * @return string Returns the trs code tarif5 sens.
     */
    public function getTrsCodeTarif5Sens() {
        return $this->trsCodeTarif5Sens;
    }

    /**
     * Get the trs code tarif6.
     *
     * @return string Returns the trs code tarif6.
     */
    public function getTrsCodeTarif6() {
        return $this->trsCodeTarif6;
    }

    /**
     * Get the trs code tarif6 sens.
     *
     * @return string Returns the trs code tarif6 sens.
     */
    public function getTrsCodeTarif6Sens() {
        return $this->trsCodeTarif6Sens;
    }

    /**
     * Get the trs code tarif def.
     *
     * @return int Returns the trs code tarif def.
     */
    public function getTrsCodeTarifDef() {
        return $this->trsCodeTarifDef;
    }

    /**
     * Get the trs comment1.
     *
     * @return string Returns the trs comment1.
     */
    public function getTrsComment1() {
        return $this->trsComment1;
    }

    /**
     * Get the trs comment2.
     *
     * @return string Returns the trs comment2.
     */
    public function getTrsComment2() {
        return $this->trsComment2;
    }

    /**
     * Get the trs comment3.
     *
     * @return string Returns the trs comment3.
     */
    public function getTrsComment3() {
        return $this->trsComment3;
    }

    /**
     * Get the trs comment4.
     *
     * @return string Returns the trs comment4.
     */
    public function getTrsComment4() {
        return $this->trsComment4;
    }

    /**
     * Get the trs comment5.
     *
     * @return string Returns the trs comment5.
     */
    public function getTrsComment5() {
        return $this->trsComment5;
    }

    /**
     * Get the trs comment6.
     *
     * @return string Returns the trs comment6.
     */
    public function getTrsComment6() {
        return $this->trsComment6;
    }

    /**
     * Get the trs comment7.
     *
     * @return string Returns the trs comment7.
     */
    public function getTrsComment7() {
        return $this->trsComment7;
    }

    /**
     * Get the trs comment8.
     *
     * @return string Returns the trs comment8.
     */
    public function getTrsComment8() {
        return $this->trsComment8;
    }

    /**
     * Get the trs comment9.
     *
     * @return string Returns the trs comment9.
     */
    public function getTrsComment9() {
        return $this->trsComment9;
    }

    /**
     * Get the trs consignes1.
     *
     * @return string Returns the trs consignes1.
     */
    public function getTrsConsignes1() {
        return $this->trsConsignes1;
    }

    /**
     * Get the trs consignes2.
     *
     * @return string Returns the trs consignes2.
     */
    public function getTrsConsignes2() {
        return $this->trsConsignes2;
    }

    /**
     * Get the trs consignes3.
     *
     * @return string Returns the trs consignes3.
     */
    public function getTrsConsignes3() {
        return $this->trsConsignes3;
    }

    /**
     * Get the trs gestion palettes.
     *
     * @return bool Returns the trs gestion palettes.
     */
    public function getTrsGestionPalettes() {
        return $this->trsGestionPalettes;
    }

    /**
     * Get the trs marchandise sensible.
     *
     * @return bool Returns the trs marchandise sensible.
     */
    public function getTrsMarchandiseSensible() {
        return $this->trsMarchandiseSensible;
    }

    /**
     * Get the trs modele facture spe.
     *
     * @return string Returns the trs modele facture spe.
     */
    public function getTrsModeleFactureSpe() {
        return $this->trsModeleFactureSpe;
    }

    /**
     * Get the trs poids mini pal.
     *
     * @return float Returns the trs poids mini pal.
     */
    public function getTrsPoidsMiniPal() {
        return $this->trsPoidsMiniPal;
    }

    /**
     * Get the trs port du auto.
     *
     * @return bool Returns the trs port du auto.
     */
    public function getTrsPortDuAuto() {
        return $this->trsPortDuAuto;
    }

    /**
     * Get the trs suivi ca mens.
     *
     * @return bool Returns the trs suivi ca mens.
     */
    public function getTrsSuiviCaMens() {
        return $this->trsSuiviCaMens;
    }

    /**
     * Get the trs suivi dt enl.
     *
     * @return bool Returns the trs suivi dt enl.
     */
    public function getTrsSuiviDtEnl() {
        return $this->trsSuiviDtEnl;
    }

    /**
     * Get the trs suivi dt liv.
     *
     * @return bool Returns the trs suivi dt liv.
     */
    public function getTrsSuiviDtLiv() {
        return $this->trsSuiviDtLiv;
    }

    /**
     * Get the trs suivi dt liv fax.
     *
     * @return string Returns the trs suivi dt liv fax.
     */
    public function getTrsSuiviDtLivFax() {
        return $this->trsSuiviDtLivFax;
    }

    /**
     * Get the trs suivi dt liv mail.
     *
     * @return string Returns the trs suivi dt liv mail.
     */
    public function getTrsSuiviDtLivMail() {
        return $this->trsSuiviDtLivMail;
    }

    /**
     * Get the trs type client.
     *
     * @return string Returns the trs type client.
     */
    public function getTrsTypeClient() {
        return $this->trsTypeClient;
    }

    /**
     * Get the trs type facturation.
     *
     * @return string Returns the trs type facturation.
     */
    public function getTrsTypeFacturation() {
        return $this->trsTypeFacturation;
    }

    /**
     * Get the trs type travail.
     *
     * @return string Returns the trs type travail.
     */
    public function getTrsTypeTravail() {
        return $this->trsTypeTravail;
    }

    /**
     * Get the type transport1.
     *
     * @return string Returns the type transport1.
     */
    public function getTypeTransport1() {
        return $this->typeTransport1;
    }

    /**
     * Get the type transport2.
     *
     * @return string Returns the type transport2.
     */
    public function getTypeTransport2() {
        return $this->typeTransport2;
    }

    /**
     * Get the type transport3.
     *
     * @return string Returns the type transport3.
     */
    public function getTypeTransport3() {
        return $this->typeTransport3;
    }

    /**
     * Get the type transport4.
     *
     * @return string Returns the type transport4.
     */
    public function getTypeTransport4() {
        return $this->typeTransport4;
    }

    /**
     * Get the type transport5.
     *
     * @return string Returns the type transport5.
     */
    public function getTypeTransport5() {
        return $this->typeTransport5;
    }

    /**
     * Get the localisation archives.
     *
     * @return string Returns the localisation archives.
     */
    public function getlocalisationArchives() {
        return $this->localisationArchives;
    }

    /**
     * Set the allotissement.
     *
     * @param bool $allotissement The allotissement.
     * @return Clients2 Returns this Clients2.
     */
    public function setAllotissement($allotissement) {
        $this->allotissement = $allotissement;
        return $this;
    }

    /**
     * Set the bl mail.
     *
     * @param bool $blMail The bl mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setBlMail($blMail) {
        $this->blMail = $blMail;
        return $this;
    }

    /**
     * Set the cdes mail.
     *
     * @param bool $cdesMail The cdes mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setCdesMail($cdesMail) {
        $this->cdesMail = $cdesMail;
        return $this;
    }

    /**
     * Set the code activite cga.
     *
     * @param string $codeActiviteCga The code activite cga.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeActiviteCga($codeActiviteCga) {
        $this->codeActiviteCga = $codeActiviteCga;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code transporteur1.
     *
     * @param string $codeTransporteur1 The code transporteur1.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur1($codeTransporteur1) {
        $this->codeTransporteur1 = $codeTransporteur1;
        return $this;
    }

    /**
     * Set the code transporteur2.
     *
     * @param string $codeTransporteur2 The code transporteur2.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur2($codeTransporteur2) {
        $this->codeTransporteur2 = $codeTransporteur2;
        return $this;
    }

    /**
     * Set the code transporteur3.
     *
     * @param string $codeTransporteur3 The code transporteur3.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur3($codeTransporteur3) {
        $this->codeTransporteur3 = $codeTransporteur3;
        return $this;
    }

    /**
     * Set the code transporteur4.
     *
     * @param string $codeTransporteur4 The code transporteur4.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur4($codeTransporteur4) {
        $this->codeTransporteur4 = $codeTransporteur4;
        return $this;
    }

    /**
     * Set the code transporteur5.
     *
     * @param string $codeTransporteur5 The code transporteur5.
     * @return Clients2 Returns this Clients2.
     */
    public function setCodeTransporteur5($codeTransporteur5) {
        $this->codeTransporteur5 = $codeTransporteur5;
        return $this;
    }

    /**
     * Set the date deb exe publication.
     *
     * @param DateTime|null $dateDebExePublication The date deb exe publication.
     * @return Clients2 Returns this Clients2.
     */
    public function setDateDebExePublication(DateTime $dateDebExePublication = null) {
        $this->dateDebExePublication = $dateDebExePublication;
        return $this;
    }

    /**
     * Set the delai livraison.
     *
     * @param int $delaiLivraison The delai livraison.
     * @return Clients2 Returns this Clients2.
     */
    public function setDelaiLivraison($delaiLivraison) {
        $this->delaiLivraison = $delaiLivraison;
        return $this;
    }

    /**
     * Set the devis mail.
     *
     * @param bool $devisMail The devis mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setDevisMail($devisMail) {
        $this->devisMail = $devisMail;
        return $this;
    }

    /**
     * Set the ean client.
     *
     * @param string $eanClient The ean client.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanClient($eanClient) {
        $this->eanClient = $eanClient;
        return $this;
    }

    /**
     * Set the ean facture papier.
     *
     * @param string $eanFacturePapier The ean facture papier.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanFacturePapier($eanFacturePapier) {
        $this->eanFacturePapier = $eanFacturePapier;
        return $this;
    }

    /**
     * Set the ean plateforme.
     *
     * @param string $eanPlateforme The ean plateforme.
     * @return Clients2 Returns this Clients2.
     */
    public function setEanPlateforme($eanPlateforme) {
        $this->eanPlateforme = $eanPlateforme;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool $echeanceFinDecade The echeance fin decade.
     * @return Clients2 Returns this Clients2.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Clients2 Returns this Clients2.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the edi export bl.
     *
     * @param bool $ediExportBl The edi export bl.
     * @return Clients2 Returns this Clients2.
     */
    public function setEdiExportBl($ediExportBl) {
        $this->ediExportBl = $ediExportBl;
        return $this;
    }

    /**
     * Set the edi export fac.
     *
     * @param bool $ediExportFac The edi export fac.
     * @return Clients2 Returns this Clients2.
     */
    public function setEdiExportFac($ediExportFac) {
        $this->ediExportFac = $ediExportFac;
        return $this;
    }

    /**
     * Set the fact complement suite.
     *
     * @param string $factComplementSuite The fact complement suite.
     * @return Clients2 Returns this Clients2.
     */
    public function setFactComplementSuite($factComplementSuite) {
        $this->factComplementSuite = $factComplementSuite;
        return $this;
    }

    /**
     * Set the fact zip code.
     *
     * @param string $factZipCode The fact zip code.
     * @return Clients2 Returns this Clients2.
     */
    public function setFactZipCode($factZipCode) {
        $this->factZipCode = $factZipCode;
        return $this;
    }

    /**
     * Set the ind mail publication.
     *
     * @param int $indMailPublication The ind mail publication.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndMailPublication($indMailPublication) {
        $this->indMailPublication = $indMailPublication;
        return $this;
    }

    /**
     * Set the indice bl mail.
     *
     * @param int $indiceBlMail The indice bl mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceBlMail($indiceBlMail) {
        $this->indiceBlMail = $indiceBlMail;
        return $this;
    }

    /**
     * Set the indice cdes mail.
     *
     * @param int $indiceCdesMail The indice cdes mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceCdesMail($indiceCdesMail) {
        $this->indiceCdesMail = $indiceCdesMail;
        return $this;
    }

    /**
     * Set the indice devis mail.
     *
     * @param int $indiceDevisMail The indice devis mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceDevisMail($indiceDevisMail) {
        $this->indiceDevisMail = $indiceDevisMail;
        return $this;
    }

    /**
     * Set the indice releves mail.
     *
     * @param int $indiceRelevesMail The indice releves mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setIndiceRelevesMail($indiceRelevesMail) {
        $this->indiceRelevesMail = $indiceRelevesMail;
        return $this;
    }

    /**
     * Set the lettre de mission date signature.
     *
     * @param DateTime|null $lettreDeMissionDateSignature The lettre de mission date signature.
     * @return Clients2 Returns this Clients2.
     */
    public function setLettreDeMissionDateSignature(DateTime $lettreDeMissionDateSignature = null) {
        $this->lettreDeMissionDateSignature = $lettreDeMissionDateSignature;
        return $this;
    }

    /**
     * Set the modele facture manuelle spe.
     *
     * @param string $modeleFactureManuelleSpe The modele facture manuelle spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setModeleFactureManuelleSpe($modeleFactureManuelleSpe) {
        $this->modeleFactureManuelleSpe = $modeleFactureManuelleSpe;
        return $this;
    }

    /**
     * Set the montant depassement autorise.
     *
     * @param float $montantDepassementAutorise The montant depassement autorise.
     * @return Clients2 Returns this Clients2.
     */
    public function setMontantDepassementAutorise($montantDepassementAutorise) {
        $this->montantDepassementAutorise = $montantDepassementAutorise;
        return $this;
    }

    /**
     * Set the motif entree.
     *
     * @param string $motifEntree The motif entree.
     * @return Clients2 Returns this Clients2.
     */
    public function setMotifEntree($motifEntree) {
        $this->motifEntree = $motifEntree;
        return $this;
    }

    /**
     * Set the motif sortie.
     *
     * @param string $motifSortie The motif sortie.
     * @return Clients2 Returns this Clients2.
     */
    public function setMotifSortie($motifSortie) {
        $this->motifSortie = $motifSortie;
        return $this;
    }

    /**
     * Set the mt transport1.
     *
     * @param float $mtTransport1 The mt transport1.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport1($mtTransport1) {
        $this->mtTransport1 = $mtTransport1;
        return $this;
    }

    /**
     * Set the mt transport2.
     *
     * @param float $mtTransport2 The mt transport2.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport2($mtTransport2) {
        $this->mtTransport2 = $mtTransport2;
        return $this;
    }

    /**
     * Set the mt transport3.
     *
     * @param float $mtTransport3 The mt transport3.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport3($mtTransport3) {
        $this->mtTransport3 = $mtTransport3;
        return $this;
    }

    /**
     * Set the mt transport4.
     *
     * @param float $mtTransport4 The mt transport4.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport4($mtTransport4) {
        $this->mtTransport4 = $mtTransport4;
        return $this;
    }

    /**
     * Set the mt transport5.
     *
     * @param float $mtTransport5 The mt transport5.
     * @return Clients2 Returns this Clients2.
     */
    public function setMtTransport5($mtTransport5) {
        $this->mtTransport5 = $mtTransport5;
        return $this;
    }

    /**
     * Set the non concerne is.
     *
     * @param bool $nonConcerneIs The non concerne is.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonConcerneIs($nonConcerneIs) {
        $this->nonConcerneIs = $nonConcerneIs;
        return $this;
    }

    /**
     * Set the non concerne tp.
     *
     * @param bool $nonConcerneTp The non concerne tp.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonConcerneTp($nonConcerneTp) {
        $this->nonConcerneTp = $nonConcerneTp;
        return $this;
    }

    /**
     * Set the non facturable.
     *
     * @param bool $nonFacturable The non facturable.
     * @return Clients2 Returns this Clients2.
     */
    public function setNonFacturable($nonFacturable) {
        $this->nonFacturable = $nonFacturable;
        return $this;
    }

    /**
     * Set the pme tarif ou rem spe.
     *
     * @param bool $pmeTarifOuRemSpe The pme tarif ou rem spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setPmeTarifOuRemSpe($pmeTarifOuRemSpe) {
        $this->pmeTarifOuRemSpe = $pmeTarifOuRemSpe;
        return $this;
    }

    /**
     * Set the prevenir mail publier.
     *
     * @param bool $prevenirMailPublier The prevenir mail publier.
     * @return Clients2 Returns this Clients2.
     */
    public function setPrevenirMailPublier($prevenirMailPublier) {
        $this->prevenirMailPublier = $prevenirMailPublier;
        return $this;
    }

    /**
     * Set the releves mail.
     *
     * @param bool $relevesMail The releves mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setRelevesMail($relevesMail) {
        $this->relevesMail = $relevesMail;
        return $this;
    }

    /**
     * Set the social complement suite.
     *
     * @param string $socialComplementSuite The social complement suite.
     * @return Clients2 Returns this Clients2.
     */
    public function setSocialComplementSuite($socialComplementSuite) {
        $this->socialComplementSuite = $socialComplementSuite;
        return $this;
    }

    /**
     * Set the social zip code.
     *
     * @param string $socialZipCode The social zip code.
     * @return Clients2 Returns this Clients2.
     */
    public function setSocialZipCode($socialZipCode) {
        $this->socialZipCode = $socialZipCode;
        return $this;
    }

    /**
     * Set the trs art pied.
     *
     * @param string $trsArtPied The trs art pied.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsArtPied($trsArtPied) {
        $this->trsArtPied = $trsArtPied;
        return $this;
    }

    /**
     * Set the trs art pied2.
     *
     * @param string $trsArtPied2 The trs art pied2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsArtPied2($trsArtPied2) {
        $this->trsArtPied2 = $trsArtPied2;
        return $this;
    }

    /**
     * Set the trs categ march.
     *
     * @param string $trsCategMarch The trs categ march.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCategMarch($trsCategMarch) {
        $this->trsCategMarch = $trsCategMarch;
        return $this;
    }

    /**
     * Set the trs centre ana.
     *
     * @param string $trsCentreAna The trs centre ana.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCentreAna($trsCentreAna) {
        $this->trsCentreAna = $trsCentreAna;
        return $this;
    }

    /**
     * Set the trs code tarif1.
     *
     * @param string $trsCodeTarif1 The trs code tarif1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif1($trsCodeTarif1) {
        $this->trsCodeTarif1 = $trsCodeTarif1;
        return $this;
    }

    /**
     * Set the trs code tarif1 sens.
     *
     * @param string $trsCodeTarif1Sens The trs code tarif1 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif1Sens($trsCodeTarif1Sens) {
        $this->trsCodeTarif1Sens = $trsCodeTarif1Sens;
        return $this;
    }

    /**
     * Set the trs code tarif2.
     *
     * @param string $trsCodeTarif2 The trs code tarif2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif2($trsCodeTarif2) {
        $this->trsCodeTarif2 = $trsCodeTarif2;
        return $this;
    }

    /**
     * Set the trs code tarif2 sens.
     *
     * @param string $trsCodeTarif2Sens The trs code tarif2 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif2Sens($trsCodeTarif2Sens) {
        $this->trsCodeTarif2Sens = $trsCodeTarif2Sens;
        return $this;
    }

    /**
     * Set the trs code tarif3.
     *
     * @param string $trsCodeTarif3 The trs code tarif3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif3($trsCodeTarif3) {
        $this->trsCodeTarif3 = $trsCodeTarif3;
        return $this;
    }

    /**
     * Set the trs code tarif3 sens.
     *
     * @param string $trsCodeTarif3Sens The trs code tarif3 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif3Sens($trsCodeTarif3Sens) {
        $this->trsCodeTarif3Sens = $trsCodeTarif3Sens;
        return $this;
    }

    /**
     * Set the trs code tarif4.
     *
     * @param string $trsCodeTarif4 The trs code tarif4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif4($trsCodeTarif4) {
        $this->trsCodeTarif4 = $trsCodeTarif4;
        return $this;
    }

    /**
     * Set the trs code tarif4 sens.
     *
     * @param string $trsCodeTarif4Sens The trs code tarif4 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif4Sens($trsCodeTarif4Sens) {
        $this->trsCodeTarif4Sens = $trsCodeTarif4Sens;
        return $this;
    }

    /**
     * Set the trs code tarif5.
     *
     * @param string $trsCodeTarif5 The trs code tarif5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif5($trsCodeTarif5) {
        $this->trsCodeTarif5 = $trsCodeTarif5;
        return $this;
    }

    /**
     * Set the trs code tarif5 sens.
     *
     * @param string $trsCodeTarif5Sens The trs code tarif5 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif5Sens($trsCodeTarif5Sens) {
        $this->trsCodeTarif5Sens = $trsCodeTarif5Sens;
        return $this;
    }

    /**
     * Set the trs code tarif6.
     *
     * @param string $trsCodeTarif6 The trs code tarif6.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif6($trsCodeTarif6) {
        $this->trsCodeTarif6 = $trsCodeTarif6;
        return $this;
    }

    /**
     * Set the trs code tarif6 sens.
     *
     * @param string $trsCodeTarif6Sens The trs code tarif6 sens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarif6Sens($trsCodeTarif6Sens) {
        $this->trsCodeTarif6Sens = $trsCodeTarif6Sens;
        return $this;
    }

    /**
     * Set the trs code tarif def.
     *
     * @param int $trsCodeTarifDef The trs code tarif def.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsCodeTarifDef($trsCodeTarifDef) {
        $this->trsCodeTarifDef = $trsCodeTarifDef;
        return $this;
    }

    /**
     * Set the trs comment1.
     *
     * @param string $trsComment1 The trs comment1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment1($trsComment1) {
        $this->trsComment1 = $trsComment1;
        return $this;
    }

    /**
     * Set the trs comment2.
     *
     * @param string $trsComment2 The trs comment2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment2($trsComment2) {
        $this->trsComment2 = $trsComment2;
        return $this;
    }

    /**
     * Set the trs comment3.
     *
     * @param string $trsComment3 The trs comment3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment3($trsComment3) {
        $this->trsComment3 = $trsComment3;
        return $this;
    }

    /**
     * Set the trs comment4.
     *
     * @param string $trsComment4 The trs comment4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment4($trsComment4) {
        $this->trsComment4 = $trsComment4;
        return $this;
    }

    /**
     * Set the trs comment5.
     *
     * @param string $trsComment5 The trs comment5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment5($trsComment5) {
        $this->trsComment5 = $trsComment5;
        return $this;
    }

    /**
     * Set the trs comment6.
     *
     * @param string $trsComment6 The trs comment6.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment6($trsComment6) {
        $this->trsComment6 = $trsComment6;
        return $this;
    }

    /**
     * Set the trs comment7.
     *
     * @param string $trsComment7 The trs comment7.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment7($trsComment7) {
        $this->trsComment7 = $trsComment7;
        return $this;
    }

    /**
     * Set the trs comment8.
     *
     * @param string $trsComment8 The trs comment8.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment8($trsComment8) {
        $this->trsComment8 = $trsComment8;
        return $this;
    }

    /**
     * Set the trs comment9.
     *
     * @param string $trsComment9 The trs comment9.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsComment9($trsComment9) {
        $this->trsComment9 = $trsComment9;
        return $this;
    }

    /**
     * Set the trs consignes1.
     *
     * @param string $trsConsignes1 The trs consignes1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes1($trsConsignes1) {
        $this->trsConsignes1 = $trsConsignes1;
        return $this;
    }

    /**
     * Set the trs consignes2.
     *
     * @param string $trsConsignes2 The trs consignes2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes2($trsConsignes2) {
        $this->trsConsignes2 = $trsConsignes2;
        return $this;
    }

    /**
     * Set the trs consignes3.
     *
     * @param string $trsConsignes3 The trs consignes3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsConsignes3($trsConsignes3) {
        $this->trsConsignes3 = $trsConsignes3;
        return $this;
    }

    /**
     * Set the trs gestion palettes.
     *
     * @param bool $trsGestionPalettes The trs gestion palettes.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsGestionPalettes($trsGestionPalettes) {
        $this->trsGestionPalettes = $trsGestionPalettes;
        return $this;
    }

    /**
     * Set the trs marchandise sensible.
     *
     * @param bool $trsMarchandiseSensible The trs marchandise sensible.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsMarchandiseSensible($trsMarchandiseSensible) {
        $this->trsMarchandiseSensible = $trsMarchandiseSensible;
        return $this;
    }

    /**
     * Set the trs modele facture spe.
     *
     * @param string $trsModeleFactureSpe The trs modele facture spe.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsModeleFactureSpe($trsModeleFactureSpe) {
        $this->trsModeleFactureSpe = $trsModeleFactureSpe;
        return $this;
    }

    /**
     * Set the trs poids mini pal.
     *
     * @param float $trsPoidsMiniPal The trs poids mini pal.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsPoidsMiniPal($trsPoidsMiniPal) {
        $this->trsPoidsMiniPal = $trsPoidsMiniPal;
        return $this;
    }

    /**
     * Set the trs port du auto.
     *
     * @param bool $trsPortDuAuto The trs port du auto.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsPortDuAuto($trsPortDuAuto) {
        $this->trsPortDuAuto = $trsPortDuAuto;
        return $this;
    }

    /**
     * Set the trs suivi ca mens.
     *
     * @param bool $trsSuiviCaMens The trs suivi ca mens.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviCaMens($trsSuiviCaMens) {
        $this->trsSuiviCaMens = $trsSuiviCaMens;
        return $this;
    }

    /**
     * Set the trs suivi dt enl.
     *
     * @param bool $trsSuiviDtEnl The trs suivi dt enl.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtEnl($trsSuiviDtEnl) {
        $this->trsSuiviDtEnl = $trsSuiviDtEnl;
        return $this;
    }

    /**
     * Set the trs suivi dt liv.
     *
     * @param bool $trsSuiviDtLiv The trs suivi dt liv.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLiv($trsSuiviDtLiv) {
        $this->trsSuiviDtLiv = $trsSuiviDtLiv;
        return $this;
    }

    /**
     * Set the trs suivi dt liv fax.
     *
     * @param string $trsSuiviDtLivFax The trs suivi dt liv fax.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLivFax($trsSuiviDtLivFax) {
        $this->trsSuiviDtLivFax = $trsSuiviDtLivFax;
        return $this;
    }

    /**
     * Set the trs suivi dt liv mail.
     *
     * @param string $trsSuiviDtLivMail The trs suivi dt liv mail.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsSuiviDtLivMail($trsSuiviDtLivMail) {
        $this->trsSuiviDtLivMail = $trsSuiviDtLivMail;
        return $this;
    }

    /**
     * Set the trs type client.
     *
     * @param string $trsTypeClient The trs type client.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeClient($trsTypeClient) {
        $this->trsTypeClient = $trsTypeClient;
        return $this;
    }

    /**
     * Set the trs type facturation.
     *
     * @param string $trsTypeFacturation The trs type facturation.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeFacturation($trsTypeFacturation) {
        $this->trsTypeFacturation = $trsTypeFacturation;
        return $this;
    }

    /**
     * Set the trs type travail.
     *
     * @param string $trsTypeTravail The trs type travail.
     * @return Clients2 Returns this Clients2.
     */
    public function setTrsTypeTravail($trsTypeTravail) {
        $this->trsTypeTravail = $trsTypeTravail;
        return $this;
    }

    /**
     * Set the type transport1.
     *
     * @param string $typeTransport1 The type transport1.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport1($typeTransport1) {
        $this->typeTransport1 = $typeTransport1;
        return $this;
    }

    /**
     * Set the type transport2.
     *
     * @param string $typeTransport2 The type transport2.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport2($typeTransport2) {
        $this->typeTransport2 = $typeTransport2;
        return $this;
    }

    /**
     * Set the type transport3.
     *
     * @param string $typeTransport3 The type transport3.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport3($typeTransport3) {
        $this->typeTransport3 = $typeTransport3;
        return $this;
    }

    /**
     * Set the type transport4.
     *
     * @param string $typeTransport4 The type transport4.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport4($typeTransport4) {
        $this->typeTransport4 = $typeTransport4;
        return $this;
    }

    /**
     * Set the type transport5.
     *
     * @param string $typeTransport5 The type transport5.
     * @return Clients2 Returns this Clients2.
     */
    public function setTypeTransport5($typeTransport5) {
        $this->typeTransport5 = $typeTransport5;
        return $this;
    }

    /**
     * Set the localisation archives.
     *
     * @param string $localisationArchives The localisation archives.
     * @return Clients2 Returns this Clients2.
     */
    public function setlocalisationArchives($localisationArchives) {
        $this->localisationArchives = $localisationArchives;
        return $this;
    }
}
