<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes m s a employe model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesMSAEmploye {

    /**
     * A g i r c.
     *
     * @var string
     */
    private $aGIRC;

    /**
     * A g i r c evo.
     *
     * @var string
     */
    private $aGIRCEvo;

    /**
     * C d d c d i.
     *
     * @var string
     */
    private $cDDCDI;

    /**
     * C d d c d i evo.
     *
     * @var string
     */
    private $cDDCDIEvo;

    /**
     * Cadre.
     *
     * @var string
     */
    private $cadre;

    /**
     * Cadre evo.
     *
     * @var string
     */
    private $cadreEvo;

    /**
     * Code college prud.
     *
     * @var string
     */
    private $codeCollegePrud;

    /**
     * Code college prud prec.
     *
     * @var string
     */
    private $codeCollegePrudPrec;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code section prud.
     *
     * @var string
     */
    private $codeSectionPrud;

    /**
     * Code section prud prec.
     *
     * @var string
     */
    private $codeSectionPrudPrec;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Coeff emploi.
     *
     * @var string
     */
    private $coeffEmploi;

    /**
     * Coeff emploi evo.
     *
     * @var string
     */
    private $coeffEmploiEvo;

    /**
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Contrat.
     *
     * @var string
     */
    private $contrat;

    /**
     * Contrat evo.
     *
     * @var string
     */
    private $contratEvo;

    /**
     * Date entree.
     *
     * @var DateTime
     */
    private $dateEntree;

    /**
     * Date evo.
     *
     * @var DateTime
     */
    private $dateEvo;

    /**
     * Date sortie.
     *
     * @var DateTime
     */
    private $dateSortie;

    /**
     * Dt deb abs.
     *
     * @var DateTime
     */
    private $dtDebAbs;

    /**
     * Dt fin abs.
     *
     * @var DateTime
     */
    private $dtFinAbs;

    /**
     * Duree trav.
     *
     * @var float
     */
    private $dureeTrav;

    /**
     * Duree trav prec.
     *
     * @var float
     */
    private $dureeTravPrec;

    /**
     * Emploi.
     *
     * @var string
     */
    private $emploi;

    /**
     * Emploi evo.
     *
     * @var string
     */
    private $emploiEvo;

    /**
     * Evo a g i r c.
     *
     * @var boolean
     */
    private $evoAGIRC;

    /**
     * Evo c d d c d i.
     *
     * @var boolean
     */
    private $evoCDDCDI;

    /**
     * Evo c r c c a36.
     *
     * @var boolean
     */
    private $evoCRCCA36;

    /**
     * Evo c r c c a4 bis.
     *
     * @var boolean
     */
    private $evoCRCCA4Bis;

    /**
     * Evo cadre.
     *
     * @var boolean
     */
    private $evoCadre;

    /**
     * Evo contrat.
     *
     * @var boolean
     */
    private $evoContrat;

    /**
     * Evo emploi.
     *
     * @var boolean
     */
    private $evoEmploi;

    /**
     * Evo fisc.
     *
     * @var boolean
     */
    private $evoFisc;

    /**
     * F i s c.
     *
     * @var string
     */
    private $fISC;

    /**
     * F i s c evo.
     *
     * @var string
     */
    private $fISCEvo;

    /**
     * H equivalence.
     *
     * @var string
     */
    private $hEquivalence;

    /**
     * H equivalence prec.
     *
     * @var string
     */
    private $hEquivalencePrec;

    /**
     * Lieu travail.
     *
     * @var string
     */
    private $lieuTravail;

    /**
     * Lieu travail evo.
     *
     * @var string
     */
    private $lieuTravailEvo;

    /**
     * Montant11.
     *
     * @var int
     */
    private $montant11;

    /**
     * Montant12.
     *
     * @var int
     */
    private $montant12;

    /**
     * Montant13.
     *
     * @var int
     */
    private $montant13;

    /**
     * Montant14.
     *
     * @var int
     */
    private $montant14;

    /**
     * Montant21.
     *
     * @var int
     */
    private $montant21;

    /**
     * Montant22.
     *
     * @var int
     */
    private $montant22;

    /**
     * Montant23.
     *
     * @var int
     */
    private $montant23;

    /**
     * Montant24.
     *
     * @var int
     */
    private $montant24;

    /**
     * Montant31.
     *
     * @var int
     */
    private $montant31;

    /**
     * Montant32.
     *
     * @var int
     */
    private $montant32;

    /**
     * Montant33.
     *
     * @var int
     */
    private $montant33;

    /**
     * Montant34.
     *
     * @var int
     */
    private $montant34;

    /**
     * Montant autre11.
     *
     * @var int
     */
    private $montantAutre11;

    /**
     * Montant autre12.
     *
     * @var int
     */
    private $montantAutre12;

    /**
     * Montant autre13.
     *
     * @var int
     */
    private $montantAutre13;

    /**
     * Montant autre14.
     *
     * @var int
     */
    private $montantAutre14;

    /**
     * Montant autre21.
     *
     * @var int
     */
    private $montantAutre21;

    /**
     * Montant autre22.
     *
     * @var int
     */
    private $montantAutre22;

    /**
     * Montant autre23.
     *
     * @var int
     */
    private $montantAutre23;

    /**
     * Montant autre24.
     *
     * @var int
     */
    private $montantAutre24;

    /**
     * Montant autre31.
     *
     * @var int
     */
    private $montantAutre31;

    /**
     * Montant autre32.
     *
     * @var int
     */
    private $montantAutre32;

    /**
     * Montant autre33.
     *
     * @var int
     */
    private $montantAutre33;

    /**
     * Montant autre34.
     *
     * @var int
     */
    private $montantAutre34;

    /**
     * Montant s m i c retenu1.
     *
     * @var float
     */
    private $montantSMICRetenu1;

    /**
     * Montant s m i c retenu2.
     *
     * @var float
     */
    private $montantSMICRetenu2;

    /**
     * Montant s m i c retenu3.
     *
     * @var float
     */
    private $montantSMICRetenu3;

    /**
     * N i r.
     *
     * @var string
     */
    private $nIR;

    /**
     * Nb heures1.
     *
     * @var float
     */
    private $nbHeures1;

    /**
     * Nb heures2.
     *
     * @var float
     */
    private $nbHeures2;

    /**
     * Nb heures3.
     *
     * @var float
     */
    private $nbHeures3;

    /**
     * Nb jours1.
     *
     * @var int
     */
    private $nbJours1;

    /**
     * Nb jours2.
     *
     * @var int
     */
    private $nbJours2;

    /**
     * Nb jours3.
     *
     * @var int
     */
    private $nbJours3;

    /**
     * Nom employe.
     *
     * @var string
     */
    private $nomEmploye;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Numero employe2.
     *
     * @var string
     */
    private $numeroEmploye2;

    /**
     * P cent partiel.
     *
     * @var int
     */
    private $pCentPartiel;

    /**
     * Per deb1.
     *
     * @var DateTime
     */
    private $perDeb1;

    /**
     * Per deb2.
     *
     * @var DateTime
     */
    private $perDeb2;

    /**
     * Per deb3.
     *
     * @var DateTime
     */
    private $perDeb3;

    /**
     * Per fin1.
     *
     * @var DateTime
     */
    private $perFin1;

    /**
     * Per fin2.
     *
     * @var DateTime
     */
    private $perFin2;

    /**
     * Per fin3.
     *
     * @var DateTime
     */
    private $perFin3;

    /**
     * Periode decla.
     *
     * @var DateTime
     */
    private $periodeDecla;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Periodicite prec.
     *
     * @var string
     */
    private $periodicitePrec;

    /**
     * Prenom employe.
     *
     * @var string
     */
    private $prenomEmploye;

    /**
     * Saisonnier.
     *
     * @var string
     */
    private $saisonnier;

    /**
     * Saisonnier prec.
     *
     * @var string
     */
    private $saisonnierPrec;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Service evo.
     *
     * @var string
     */
    private $serviceEvo;

    /**
     * Suspension z r r z r u1.
     *
     * @var string
     */
    private $suspensionZRRZRU1;

    /**
     * Suspension z r r z r u2.
     *
     * @var string
     */
    private $suspensionZRRZRU2;

    /**
     * Suspension z r r z r u3.
     *
     * @var string
     */
    private $suspensionZRRZRU3;

    /**
     * Taux smic fillon1.
     *
     * @var float
     */
    private $tauxSmicFillon1;

    /**
     * Taux smic fillon2.
     *
     * @var float
     */
    private $tauxSmicFillon2;

    /**
     * Taux smic fillon3.
     *
     * @var float
     */
    private $tauxSmicFillon3;

    /**
     * Temps partiel.
     *
     * @var string
     */
    private $tempsPartiel;

    /**
     * Temps partiel evo.
     *
     * @var string
     */
    private $tempsPartielEvo;

    /**
     * Total general.
     *
     * @var int
     */
    private $totalGeneral;

    /**
     * Type absence.
     *
     * @var string
     */
    private $typeAbsence;

    /**
     * Type autre remun11.
     *
     * @var string
     */
    private $typeAutreRemun11;

    /**
     * Type autre remun12.
     *
     * @var string
     */
    private $typeAutreRemun12;

    /**
     * Type autre remun13.
     *
     * @var string
     */
    private $typeAutreRemun13;

    /**
     * Type autre remun14.
     *
     * @var string
     */
    private $typeAutreRemun14;

    /**
     * Type autre remun21.
     *
     * @var string
     */
    private $typeAutreRemun21;

    /**
     * Type autre remun22.
     *
     * @var string
     */
    private $typeAutreRemun22;

    /**
     * Type autre remun23.
     *
     * @var string
     */
    private $typeAutreRemun23;

    /**
     * Type autre remun24.
     *
     * @var string
     */
    private $typeAutreRemun24;

    /**
     * Type autre remun31.
     *
     * @var string
     */
    private $typeAutreRemun31;

    /**
     * Type autre remun32.
     *
     * @var string
     */
    private $typeAutreRemun32;

    /**
     * Type autre remun33.
     *
     * @var string
     */
    private $typeAutreRemun33;

    /**
     * Type autre remun34.
     *
     * @var string
     */
    private $typeAutreRemun34;

    /**
     * Type c r c c a emp.
     *
     * @var string
     */
    private $typeCRCCAEmp;

    /**
     * Type remun11.
     *
     * @var string
     */
    private $typeRemun11;

    /**
     * Type remun12.
     *
     * @var string
     */
    private $typeRemun12;

    /**
     * Type remun13.
     *
     * @var string
     */
    private $typeRemun13;

    /**
     * Type remun14.
     *
     * @var string
     */
    private $typeRemun14;

    /**
     * Type remun21.
     *
     * @var string
     */
    private $typeRemun21;

    /**
     * Type remun22.
     *
     * @var string
     */
    private $typeRemun22;

    /**
     * Type remun23.
     *
     * @var string
     */
    private $typeRemun23;

    /**
     * Type remun24.
     *
     * @var string
     */
    private $typeRemun24;

    /**
     * Type remun31.
     *
     * @var string
     */
    private $typeRemun31;

    /**
     * Type remun32.
     *
     * @var string
     */
    private $typeRemun32;

    /**
     * Type remun33.
     *
     * @var string
     */
    private $typeRemun33;

    /**
     * Type remun34.
     *
     * @var string
     */
    private $typeRemun34;

    /**
     * Type travail.
     *
     * @var string
     */
    private $typeTravail;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a g i r c.
     *
     * @return string Returns the a g i r c.
     */
    public function getAGIRC() {
        return $this->aGIRC;
    }

    /**
     * Get the a g i r c evo.
     *
     * @return string Returns the a g i r c evo.
     */
    public function getAGIRCEvo() {
        return $this->aGIRCEvo;
    }

    /**
     * Get the c d d c d i.
     *
     * @return string Returns the c d d c d i.
     */
    public function getCDDCDI() {
        return $this->cDDCDI;
    }

    /**
     * Get the c d d c d i evo.
     *
     * @return string Returns the c d d c d i evo.
     */
    public function getCDDCDIEvo() {
        return $this->cDDCDIEvo;
    }

    /**
     * Get the cadre.
     *
     * @return string Returns the cadre.
     */
    public function getCadre() {
        return $this->cadre;
    }

    /**
     * Get the cadre evo.
     *
     * @return string Returns the cadre evo.
     */
    public function getCadreEvo() {
        return $this->cadreEvo;
    }

    /**
     * Get the code college prud.
     *
     * @return string Returns the code college prud.
     */
    public function getCodeCollegePrud() {
        return $this->codeCollegePrud;
    }

    /**
     * Get the code college prud prec.
     *
     * @return string Returns the code college prud prec.
     */
    public function getCodeCollegePrudPrec() {
        return $this->codeCollegePrudPrec;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code section prud.
     *
     * @return string Returns the code section prud.
     */
    public function getCodeSectionPrud() {
        return $this->codeSectionPrud;
    }

    /**
     * Get the code section prud prec.
     *
     * @return string Returns the code section prud prec.
     */
    public function getCodeSectionPrudPrec() {
        return $this->codeSectionPrudPrec;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the coeff emploi.
     *
     * @return string Returns the coeff emploi.
     */
    public function getCoeffEmploi() {
        return $this->coeffEmploi;
    }

    /**
     * Get the coeff emploi evo.
     *
     * @return string Returns the coeff emploi evo.
     */
    public function getCoeffEmploiEvo() {
        return $this->coeffEmploiEvo;
    }

    /**
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Get the contrat.
     *
     * @return string Returns the contrat.
     */
    public function getContrat() {
        return $this->contrat;
    }

    /**
     * Get the contrat evo.
     *
     * @return string Returns the contrat evo.
     */
    public function getContratEvo() {
        return $this->contratEvo;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date evo.
     *
     * @return DateTime Returns the date evo.
     */
    public function getDateEvo() {
        return $this->dateEvo;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the dt deb abs.
     *
     * @return DateTime Returns the dt deb abs.
     */
    public function getDtDebAbs() {
        return $this->dtDebAbs;
    }

    /**
     * Get the dt fin abs.
     *
     * @return DateTime Returns the dt fin abs.
     */
    public function getDtFinAbs() {
        return $this->dtFinAbs;
    }

    /**
     * Get the duree trav.
     *
     * @return float Returns the duree trav.
     */
    public function getDureeTrav() {
        return $this->dureeTrav;
    }

    /**
     * Get the duree trav prec.
     *
     * @return float Returns the duree trav prec.
     */
    public function getDureeTravPrec() {
        return $this->dureeTravPrec;
    }

    /**
     * Get the emploi.
     *
     * @return string Returns the emploi.
     */
    public function getEmploi() {
        return $this->emploi;
    }

    /**
     * Get the emploi evo.
     *
     * @return string Returns the emploi evo.
     */
    public function getEmploiEvo() {
        return $this->emploiEvo;
    }

    /**
     * Get the evo a g i r c.
     *
     * @return boolean Returns the evo a g i r c.
     */
    public function getEvoAGIRC() {
        return $this->evoAGIRC;
    }

    /**
     * Get the evo c d d c d i.
     *
     * @return boolean Returns the evo c d d c d i.
     */
    public function getEvoCDDCDI() {
        return $this->evoCDDCDI;
    }

    /**
     * Get the evo c r c c a36.
     *
     * @return boolean Returns the evo c r c c a36.
     */
    public function getEvoCRCCA36() {
        return $this->evoCRCCA36;
    }

    /**
     * Get the evo c r c c a4 bis.
     *
     * @return boolean Returns the evo c r c c a4 bis.
     */
    public function getEvoCRCCA4Bis() {
        return $this->evoCRCCA4Bis;
    }

    /**
     * Get the evo cadre.
     *
     * @return boolean Returns the evo cadre.
     */
    public function getEvoCadre() {
        return $this->evoCadre;
    }

    /**
     * Get the evo contrat.
     *
     * @return boolean Returns the evo contrat.
     */
    public function getEvoContrat() {
        return $this->evoContrat;
    }

    /**
     * Get the evo emploi.
     *
     * @return boolean Returns the evo emploi.
     */
    public function getEvoEmploi() {
        return $this->evoEmploi;
    }

    /**
     * Get the evo fisc.
     *
     * @return boolean Returns the evo fisc.
     */
    public function getEvoFisc() {
        return $this->evoFisc;
    }

    /**
     * Get the f i s c.
     *
     * @return string Returns the f i s c.
     */
    public function getFISC() {
        return $this->fISC;
    }

    /**
     * Get the f i s c evo.
     *
     * @return string Returns the f i s c evo.
     */
    public function getFISCEvo() {
        return $this->fISCEvo;
    }

    /**
     * Get the h equivalence.
     *
     * @return string Returns the h equivalence.
     */
    public function getHEquivalence() {
        return $this->hEquivalence;
    }

    /**
     * Get the h equivalence prec.
     *
     * @return string Returns the h equivalence prec.
     */
    public function getHEquivalencePrec() {
        return $this->hEquivalencePrec;
    }

    /**
     * Get the lieu travail.
     *
     * @return string Returns the lieu travail.
     */
    public function getLieuTravail() {
        return $this->lieuTravail;
    }

    /**
     * Get the lieu travail evo.
     *
     * @return string Returns the lieu travail evo.
     */
    public function getLieuTravailEvo() {
        return $this->lieuTravailEvo;
    }

    /**
     * Get the montant11.
     *
     * @return int Returns the montant11.
     */
    public function getMontant11() {
        return $this->montant11;
    }

    /**
     * Get the montant12.
     *
     * @return int Returns the montant12.
     */
    public function getMontant12() {
        return $this->montant12;
    }

    /**
     * Get the montant13.
     *
     * @return int Returns the montant13.
     */
    public function getMontant13() {
        return $this->montant13;
    }

    /**
     * Get the montant14.
     *
     * @return int Returns the montant14.
     */
    public function getMontant14() {
        return $this->montant14;
    }

    /**
     * Get the montant21.
     *
     * @return int Returns the montant21.
     */
    public function getMontant21() {
        return $this->montant21;
    }

    /**
     * Get the montant22.
     *
     * @return int Returns the montant22.
     */
    public function getMontant22() {
        return $this->montant22;
    }

    /**
     * Get the montant23.
     *
     * @return int Returns the montant23.
     */
    public function getMontant23() {
        return $this->montant23;
    }

    /**
     * Get the montant24.
     *
     * @return int Returns the montant24.
     */
    public function getMontant24() {
        return $this->montant24;
    }

    /**
     * Get the montant31.
     *
     * @return int Returns the montant31.
     */
    public function getMontant31() {
        return $this->montant31;
    }

    /**
     * Get the montant32.
     *
     * @return int Returns the montant32.
     */
    public function getMontant32() {
        return $this->montant32;
    }

    /**
     * Get the montant33.
     *
     * @return int Returns the montant33.
     */
    public function getMontant33() {
        return $this->montant33;
    }

    /**
     * Get the montant34.
     *
     * @return int Returns the montant34.
     */
    public function getMontant34() {
        return $this->montant34;
    }

    /**
     * Get the montant autre11.
     *
     * @return int Returns the montant autre11.
     */
    public function getMontantAutre11() {
        return $this->montantAutre11;
    }

    /**
     * Get the montant autre12.
     *
     * @return int Returns the montant autre12.
     */
    public function getMontantAutre12() {
        return $this->montantAutre12;
    }

    /**
     * Get the montant autre13.
     *
     * @return int Returns the montant autre13.
     */
    public function getMontantAutre13() {
        return $this->montantAutre13;
    }

    /**
     * Get the montant autre14.
     *
     * @return int Returns the montant autre14.
     */
    public function getMontantAutre14() {
        return $this->montantAutre14;
    }

    /**
     * Get the montant autre21.
     *
     * @return int Returns the montant autre21.
     */
    public function getMontantAutre21() {
        return $this->montantAutre21;
    }

    /**
     * Get the montant autre22.
     *
     * @return int Returns the montant autre22.
     */
    public function getMontantAutre22() {
        return $this->montantAutre22;
    }

    /**
     * Get the montant autre23.
     *
     * @return int Returns the montant autre23.
     */
    public function getMontantAutre23() {
        return $this->montantAutre23;
    }

    /**
     * Get the montant autre24.
     *
     * @return int Returns the montant autre24.
     */
    public function getMontantAutre24() {
        return $this->montantAutre24;
    }

    /**
     * Get the montant autre31.
     *
     * @return int Returns the montant autre31.
     */
    public function getMontantAutre31() {
        return $this->montantAutre31;
    }

    /**
     * Get the montant autre32.
     *
     * @return int Returns the montant autre32.
     */
    public function getMontantAutre32() {
        return $this->montantAutre32;
    }

    /**
     * Get the montant autre33.
     *
     * @return int Returns the montant autre33.
     */
    public function getMontantAutre33() {
        return $this->montantAutre33;
    }

    /**
     * Get the montant autre34.
     *
     * @return int Returns the montant autre34.
     */
    public function getMontantAutre34() {
        return $this->montantAutre34;
    }

    /**
     * Get the montant s m i c retenu1.
     *
     * @return float Returns the montant s m i c retenu1.
     */
    public function getMontantSMICRetenu1() {
        return $this->montantSMICRetenu1;
    }

    /**
     * Get the montant s m i c retenu2.
     *
     * @return float Returns the montant s m i c retenu2.
     */
    public function getMontantSMICRetenu2() {
        return $this->montantSMICRetenu2;
    }

    /**
     * Get the montant s m i c retenu3.
     *
     * @return float Returns the montant s m i c retenu3.
     */
    public function getMontantSMICRetenu3() {
        return $this->montantSMICRetenu3;
    }

    /**
     * Get the n i r.
     *
     * @return string Returns the n i r.
     */
    public function getNIR() {
        return $this->nIR;
    }

    /**
     * Get the nb heures1.
     *
     * @return float Returns the nb heures1.
     */
    public function getNbHeures1() {
        return $this->nbHeures1;
    }

    /**
     * Get the nb heures2.
     *
     * @return float Returns the nb heures2.
     */
    public function getNbHeures2() {
        return $this->nbHeures2;
    }

    /**
     * Get the nb heures3.
     *
     * @return float Returns the nb heures3.
     */
    public function getNbHeures3() {
        return $this->nbHeures3;
    }

    /**
     * Get the nb jours1.
     *
     * @return int Returns the nb jours1.
     */
    public function getNbJours1() {
        return $this->nbJours1;
    }

    /**
     * Get the nb jours2.
     *
     * @return int Returns the nb jours2.
     */
    public function getNbJours2() {
        return $this->nbJours2;
    }

    /**
     * Get the nb jours3.
     *
     * @return int Returns the nb jours3.
     */
    public function getNbJours3() {
        return $this->nbJours3;
    }

    /**
     * Get the nom employe.
     *
     * @return string Returns the nom employe.
     */
    public function getNomEmploye() {
        return $this->nomEmploye;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the numero employe2.
     *
     * @return string Returns the numero employe2.
     */
    public function getNumeroEmploye2() {
        return $this->numeroEmploye2;
    }

    /**
     * Get the p cent partiel.
     *
     * @return int Returns the p cent partiel.
     */
    public function getPCentPartiel() {
        return $this->pCentPartiel;
    }

    /**
     * Get the per deb1.
     *
     * @return DateTime Returns the per deb1.
     */
    public function getPerDeb1() {
        return $this->perDeb1;
    }

    /**
     * Get the per deb2.
     *
     * @return DateTime Returns the per deb2.
     */
    public function getPerDeb2() {
        return $this->perDeb2;
    }

    /**
     * Get the per deb3.
     *
     * @return DateTime Returns the per deb3.
     */
    public function getPerDeb3() {
        return $this->perDeb3;
    }

    /**
     * Get the per fin1.
     *
     * @return DateTime Returns the per fin1.
     */
    public function getPerFin1() {
        return $this->perFin1;
    }

    /**
     * Get the per fin2.
     *
     * @return DateTime Returns the per fin2.
     */
    public function getPerFin2() {
        return $this->perFin2;
    }

    /**
     * Get the per fin3.
     *
     * @return DateTime Returns the per fin3.
     */
    public function getPerFin3() {
        return $this->perFin3;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the periodicite prec.
     *
     * @return string Returns the periodicite prec.
     */
    public function getPeriodicitePrec() {
        return $this->periodicitePrec;
    }

    /**
     * Get the prenom employe.
     *
     * @return string Returns the prenom employe.
     */
    public function getPrenomEmploye() {
        return $this->prenomEmploye;
    }

    /**
     * Get the saisonnier.
     *
     * @return string Returns the saisonnier.
     */
    public function getSaisonnier() {
        return $this->saisonnier;
    }

    /**
     * Get the saisonnier prec.
     *
     * @return string Returns the saisonnier prec.
     */
    public function getSaisonnierPrec() {
        return $this->saisonnierPrec;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the service evo.
     *
     * @return string Returns the service evo.
     */
    public function getServiceEvo() {
        return $this->serviceEvo;
    }

    /**
     * Get the suspension z r r z r u1.
     *
     * @return string Returns the suspension z r r z r u1.
     */
    public function getSuspensionZRRZRU1() {
        return $this->suspensionZRRZRU1;
    }

    /**
     * Get the suspension z r r z r u2.
     *
     * @return string Returns the suspension z r r z r u2.
     */
    public function getSuspensionZRRZRU2() {
        return $this->suspensionZRRZRU2;
    }

    /**
     * Get the suspension z r r z r u3.
     *
     * @return string Returns the suspension z r r z r u3.
     */
    public function getSuspensionZRRZRU3() {
        return $this->suspensionZRRZRU3;
    }

    /**
     * Get the taux smic fillon1.
     *
     * @return float Returns the taux smic fillon1.
     */
    public function getTauxSmicFillon1() {
        return $this->tauxSmicFillon1;
    }

    /**
     * Get the taux smic fillon2.
     *
     * @return float Returns the taux smic fillon2.
     */
    public function getTauxSmicFillon2() {
        return $this->tauxSmicFillon2;
    }

    /**
     * Get the taux smic fillon3.
     *
     * @return float Returns the taux smic fillon3.
     */
    public function getTauxSmicFillon3() {
        return $this->tauxSmicFillon3;
    }

    /**
     * Get the temps partiel.
     *
     * @return string Returns the temps partiel.
     */
    public function getTempsPartiel() {
        return $this->tempsPartiel;
    }

    /**
     * Get the temps partiel evo.
     *
     * @return string Returns the temps partiel evo.
     */
    public function getTempsPartielEvo() {
        return $this->tempsPartielEvo;
    }

    /**
     * Get the total general.
     *
     * @return int Returns the total general.
     */
    public function getTotalGeneral() {
        return $this->totalGeneral;
    }

    /**
     * Get the type absence.
     *
     * @return string Returns the type absence.
     */
    public function getTypeAbsence() {
        return $this->typeAbsence;
    }

    /**
     * Get the type autre remun11.
     *
     * @return string Returns the type autre remun11.
     */
    public function getTypeAutreRemun11() {
        return $this->typeAutreRemun11;
    }

    /**
     * Get the type autre remun12.
     *
     * @return string Returns the type autre remun12.
     */
    public function getTypeAutreRemun12() {
        return $this->typeAutreRemun12;
    }

    /**
     * Get the type autre remun13.
     *
     * @return string Returns the type autre remun13.
     */
    public function getTypeAutreRemun13() {
        return $this->typeAutreRemun13;
    }

    /**
     * Get the type autre remun14.
     *
     * @return string Returns the type autre remun14.
     */
    public function getTypeAutreRemun14() {
        return $this->typeAutreRemun14;
    }

    /**
     * Get the type autre remun21.
     *
     * @return string Returns the type autre remun21.
     */
    public function getTypeAutreRemun21() {
        return $this->typeAutreRemun21;
    }

    /**
     * Get the type autre remun22.
     *
     * @return string Returns the type autre remun22.
     */
    public function getTypeAutreRemun22() {
        return $this->typeAutreRemun22;
    }

    /**
     * Get the type autre remun23.
     *
     * @return string Returns the type autre remun23.
     */
    public function getTypeAutreRemun23() {
        return $this->typeAutreRemun23;
    }

    /**
     * Get the type autre remun24.
     *
     * @return string Returns the type autre remun24.
     */
    public function getTypeAutreRemun24() {
        return $this->typeAutreRemun24;
    }

    /**
     * Get the type autre remun31.
     *
     * @return string Returns the type autre remun31.
     */
    public function getTypeAutreRemun31() {
        return $this->typeAutreRemun31;
    }

    /**
     * Get the type autre remun32.
     *
     * @return string Returns the type autre remun32.
     */
    public function getTypeAutreRemun32() {
        return $this->typeAutreRemun32;
    }

    /**
     * Get the type autre remun33.
     *
     * @return string Returns the type autre remun33.
     */
    public function getTypeAutreRemun33() {
        return $this->typeAutreRemun33;
    }

    /**
     * Get the type autre remun34.
     *
     * @return string Returns the type autre remun34.
     */
    public function getTypeAutreRemun34() {
        return $this->typeAutreRemun34;
    }

    /**
     * Get the type c r c c a emp.
     *
     * @return string Returns the type c r c c a emp.
     */
    public function getTypeCRCCAEmp() {
        return $this->typeCRCCAEmp;
    }

    /**
     * Get the type remun11.
     *
     * @return string Returns the type remun11.
     */
    public function getTypeRemun11() {
        return $this->typeRemun11;
    }

    /**
     * Get the type remun12.
     *
     * @return string Returns the type remun12.
     */
    public function getTypeRemun12() {
        return $this->typeRemun12;
    }

    /**
     * Get the type remun13.
     *
     * @return string Returns the type remun13.
     */
    public function getTypeRemun13() {
        return $this->typeRemun13;
    }

    /**
     * Get the type remun14.
     *
     * @return string Returns the type remun14.
     */
    public function getTypeRemun14() {
        return $this->typeRemun14;
    }

    /**
     * Get the type remun21.
     *
     * @return string Returns the type remun21.
     */
    public function getTypeRemun21() {
        return $this->typeRemun21;
    }

    /**
     * Get the type remun22.
     *
     * @return string Returns the type remun22.
     */
    public function getTypeRemun22() {
        return $this->typeRemun22;
    }

    /**
     * Get the type remun23.
     *
     * @return string Returns the type remun23.
     */
    public function getTypeRemun23() {
        return $this->typeRemun23;
    }

    /**
     * Get the type remun24.
     *
     * @return string Returns the type remun24.
     */
    public function getTypeRemun24() {
        return $this->typeRemun24;
    }

    /**
     * Get the type remun31.
     *
     * @return string Returns the type remun31.
     */
    public function getTypeRemun31() {
        return $this->typeRemun31;
    }

    /**
     * Get the type remun32.
     *
     * @return string Returns the type remun32.
     */
    public function getTypeRemun32() {
        return $this->typeRemun32;
    }

    /**
     * Get the type remun33.
     *
     * @return string Returns the type remun33.
     */
    public function getTypeRemun33() {
        return $this->typeRemun33;
    }

    /**
     * Get the type remun34.
     *
     * @return string Returns the type remun34.
     */
    public function getTypeRemun34() {
        return $this->typeRemun34;
    }

    /**
     * Get the type travail.
     *
     * @return string Returns the type travail.
     */
    public function getTypeTravail() {
        return $this->typeTravail;
    }

    /**
     * Set the a g i r c.
     *
     * @param string $aGIRC The a g i r c.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setAGIRC($aGIRC) {
        $this->aGIRC = $aGIRC;
        return $this;
    }

    /**
     * Set the a g i r c evo.
     *
     * @param string $aGIRCEvo The a g i r c evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setAGIRCEvo($aGIRCEvo) {
        $this->aGIRCEvo = $aGIRCEvo;
        return $this;
    }

    /**
     * Set the c d d c d i.
     *
     * @param string $cDDCDI The c d d c d i.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCDDCDI($cDDCDI) {
        $this->cDDCDI = $cDDCDI;
        return $this;
    }

    /**
     * Set the c d d c d i evo.
     *
     * @param string $cDDCDIEvo The c d d c d i evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCDDCDIEvo($cDDCDIEvo) {
        $this->cDDCDIEvo = $cDDCDIEvo;
        return $this;
    }

    /**
     * Set the cadre.
     *
     * @param string $cadre The cadre.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCadre($cadre) {
        $this->cadre = $cadre;
        return $this;
    }

    /**
     * Set the cadre evo.
     *
     * @param string $cadreEvo The cadre evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCadreEvo($cadreEvo) {
        $this->cadreEvo = $cadreEvo;
        return $this;
    }

    /**
     * Set the code college prud.
     *
     * @param string $codeCollegePrud The code college prud.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeCollegePrud($codeCollegePrud) {
        $this->codeCollegePrud = $codeCollegePrud;
        return $this;
    }

    /**
     * Set the code college prud prec.
     *
     * @param string $codeCollegePrudPrec The code college prud prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeCollegePrudPrec($codeCollegePrudPrec) {
        $this->codeCollegePrudPrec = $codeCollegePrudPrec;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code section prud.
     *
     * @param string $codeSectionPrud The code section prud.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeSectionPrud($codeSectionPrud) {
        $this->codeSectionPrud = $codeSectionPrud;
        return $this;
    }

    /**
     * Set the code section prud prec.
     *
     * @param string $codeSectionPrudPrec The code section prud prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeSectionPrudPrec($codeSectionPrudPrec) {
        $this->codeSectionPrudPrec = $codeSectionPrudPrec;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the coeff emploi.
     *
     * @param string $coeffEmploi The coeff emploi.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCoeffEmploi($coeffEmploi) {
        $this->coeffEmploi = $coeffEmploi;
        return $this;
    }

    /**
     * Set the coeff emploi evo.
     *
     * @param string $coeffEmploiEvo The coeff emploi evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCoeffEmploiEvo($coeffEmploiEvo) {
        $this->coeffEmploiEvo = $coeffEmploiEvo;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param string $contrat The contrat.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setContrat($contrat) {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the contrat evo.
     *
     * @param string $contratEvo The contrat evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setContratEvo($contratEvo) {
        $this->contratEvo = $contratEvo;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime $dateEntree The date entree.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date evo.
     *
     * @param DateTime $dateEvo The date evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDateEvo(DateTime $dateEvo = null) {
        $this->dateEvo = $dateEvo;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime $dateSortie The date sortie.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the dt deb abs.
     *
     * @param DateTime $dtDebAbs The dt deb abs.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDtDebAbs(DateTime $dtDebAbs = null) {
        $this->dtDebAbs = $dtDebAbs;
        return $this;
    }

    /**
     * Set the dt fin abs.
     *
     * @param DateTime $dtFinAbs The dt fin abs.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDtFinAbs(DateTime $dtFinAbs = null) {
        $this->dtFinAbs = $dtFinAbs;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float $dureeTrav The duree trav.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDureeTrav($dureeTrav) {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the duree trav prec.
     *
     * @param float $dureeTravPrec The duree trav prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setDureeTravPrec($dureeTravPrec) {
        $this->dureeTravPrec = $dureeTravPrec;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the emploi evo.
     *
     * @param string $emploiEvo The emploi evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEmploiEvo($emploiEvo) {
        $this->emploiEvo = $emploiEvo;
        return $this;
    }

    /**
     * Set the evo a g i r c.
     *
     * @param boolean $evoAGIRC The evo a g i r c.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoAGIRC($evoAGIRC) {
        $this->evoAGIRC = $evoAGIRC;
        return $this;
    }

    /**
     * Set the evo c d d c d i.
     *
     * @param boolean $evoCDDCDI The evo c d d c d i.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoCDDCDI($evoCDDCDI) {
        $this->evoCDDCDI = $evoCDDCDI;
        return $this;
    }

    /**
     * Set the evo c r c c a36.
     *
     * @param boolean $evoCRCCA36 The evo c r c c a36.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoCRCCA36($evoCRCCA36) {
        $this->evoCRCCA36 = $evoCRCCA36;
        return $this;
    }

    /**
     * Set the evo c r c c a4 bis.
     *
     * @param boolean $evoCRCCA4Bis The evo c r c c a4 bis.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoCRCCA4Bis($evoCRCCA4Bis) {
        $this->evoCRCCA4Bis = $evoCRCCA4Bis;
        return $this;
    }

    /**
     * Set the evo cadre.
     *
     * @param boolean $evoCadre The evo cadre.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoCadre($evoCadre) {
        $this->evoCadre = $evoCadre;
        return $this;
    }

    /**
     * Set the evo contrat.
     *
     * @param boolean $evoContrat The evo contrat.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoContrat($evoContrat) {
        $this->evoContrat = $evoContrat;
        return $this;
    }

    /**
     * Set the evo emploi.
     *
     * @param boolean $evoEmploi The evo emploi.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoEmploi($evoEmploi) {
        $this->evoEmploi = $evoEmploi;
        return $this;
    }

    /**
     * Set the evo fisc.
     *
     * @param boolean $evoFisc The evo fisc.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setEvoFisc($evoFisc) {
        $this->evoFisc = $evoFisc;
        return $this;
    }

    /**
     * Set the f i s c.
     *
     * @param string $fISC The f i s c.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setFISC($fISC) {
        $this->fISC = $fISC;
        return $this;
    }

    /**
     * Set the f i s c evo.
     *
     * @param string $fISCEvo The f i s c evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setFISCEvo($fISCEvo) {
        $this->fISCEvo = $fISCEvo;
        return $this;
    }

    /**
     * Set the h equivalence.
     *
     * @param string $hEquivalence The h equivalence.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setHEquivalence($hEquivalence) {
        $this->hEquivalence = $hEquivalence;
        return $this;
    }

    /**
     * Set the h equivalence prec.
     *
     * @param string $hEquivalencePrec The h equivalence prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setHEquivalencePrec($hEquivalencePrec) {
        $this->hEquivalencePrec = $hEquivalencePrec;
        return $this;
    }

    /**
     * Set the lieu travail.
     *
     * @param string $lieuTravail The lieu travail.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setLieuTravail($lieuTravail) {
        $this->lieuTravail = $lieuTravail;
        return $this;
    }

    /**
     * Set the lieu travail evo.
     *
     * @param string $lieuTravailEvo The lieu travail evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setLieuTravailEvo($lieuTravailEvo) {
        $this->lieuTravailEvo = $lieuTravailEvo;
        return $this;
    }

    /**
     * Set the montant11.
     *
     * @param int $montant11 The montant11.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant11($montant11) {
        $this->montant11 = $montant11;
        return $this;
    }

    /**
     * Set the montant12.
     *
     * @param int $montant12 The montant12.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant12($montant12) {
        $this->montant12 = $montant12;
        return $this;
    }

    /**
     * Set the montant13.
     *
     * @param int $montant13 The montant13.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant13($montant13) {
        $this->montant13 = $montant13;
        return $this;
    }

    /**
     * Set the montant14.
     *
     * @param int $montant14 The montant14.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant14($montant14) {
        $this->montant14 = $montant14;
        return $this;
    }

    /**
     * Set the montant21.
     *
     * @param int $montant21 The montant21.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant21($montant21) {
        $this->montant21 = $montant21;
        return $this;
    }

    /**
     * Set the montant22.
     *
     * @param int $montant22 The montant22.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant22($montant22) {
        $this->montant22 = $montant22;
        return $this;
    }

    /**
     * Set the montant23.
     *
     * @param int $montant23 The montant23.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant23($montant23) {
        $this->montant23 = $montant23;
        return $this;
    }

    /**
     * Set the montant24.
     *
     * @param int $montant24 The montant24.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant24($montant24) {
        $this->montant24 = $montant24;
        return $this;
    }

    /**
     * Set the montant31.
     *
     * @param int $montant31 The montant31.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant31($montant31) {
        $this->montant31 = $montant31;
        return $this;
    }

    /**
     * Set the montant32.
     *
     * @param int $montant32 The montant32.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant32($montant32) {
        $this->montant32 = $montant32;
        return $this;
    }

    /**
     * Set the montant33.
     *
     * @param int $montant33 The montant33.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant33($montant33) {
        $this->montant33 = $montant33;
        return $this;
    }

    /**
     * Set the montant34.
     *
     * @param int $montant34 The montant34.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontant34($montant34) {
        $this->montant34 = $montant34;
        return $this;
    }

    /**
     * Set the montant autre11.
     *
     * @param int $montantAutre11 The montant autre11.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre11($montantAutre11) {
        $this->montantAutre11 = $montantAutre11;
        return $this;
    }

    /**
     * Set the montant autre12.
     *
     * @param int $montantAutre12 The montant autre12.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre12($montantAutre12) {
        $this->montantAutre12 = $montantAutre12;
        return $this;
    }

    /**
     * Set the montant autre13.
     *
     * @param int $montantAutre13 The montant autre13.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre13($montantAutre13) {
        $this->montantAutre13 = $montantAutre13;
        return $this;
    }

    /**
     * Set the montant autre14.
     *
     * @param int $montantAutre14 The montant autre14.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre14($montantAutre14) {
        $this->montantAutre14 = $montantAutre14;
        return $this;
    }

    /**
     * Set the montant autre21.
     *
     * @param int $montantAutre21 The montant autre21.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre21($montantAutre21) {
        $this->montantAutre21 = $montantAutre21;
        return $this;
    }

    /**
     * Set the montant autre22.
     *
     * @param int $montantAutre22 The montant autre22.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre22($montantAutre22) {
        $this->montantAutre22 = $montantAutre22;
        return $this;
    }

    /**
     * Set the montant autre23.
     *
     * @param int $montantAutre23 The montant autre23.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre23($montantAutre23) {
        $this->montantAutre23 = $montantAutre23;
        return $this;
    }

    /**
     * Set the montant autre24.
     *
     * @param int $montantAutre24 The montant autre24.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre24($montantAutre24) {
        $this->montantAutre24 = $montantAutre24;
        return $this;
    }

    /**
     * Set the montant autre31.
     *
     * @param int $montantAutre31 The montant autre31.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre31($montantAutre31) {
        $this->montantAutre31 = $montantAutre31;
        return $this;
    }

    /**
     * Set the montant autre32.
     *
     * @param int $montantAutre32 The montant autre32.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre32($montantAutre32) {
        $this->montantAutre32 = $montantAutre32;
        return $this;
    }

    /**
     * Set the montant autre33.
     *
     * @param int $montantAutre33 The montant autre33.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre33($montantAutre33) {
        $this->montantAutre33 = $montantAutre33;
        return $this;
    }

    /**
     * Set the montant autre34.
     *
     * @param int $montantAutre34 The montant autre34.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantAutre34($montantAutre34) {
        $this->montantAutre34 = $montantAutre34;
        return $this;
    }

    /**
     * Set the montant s m i c retenu1.
     *
     * @param float $montantSMICRetenu1 The montant s m i c retenu1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantSMICRetenu1($montantSMICRetenu1) {
        $this->montantSMICRetenu1 = $montantSMICRetenu1;
        return $this;
    }

    /**
     * Set the montant s m i c retenu2.
     *
     * @param float $montantSMICRetenu2 The montant s m i c retenu2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantSMICRetenu2($montantSMICRetenu2) {
        $this->montantSMICRetenu2 = $montantSMICRetenu2;
        return $this;
    }

    /**
     * Set the montant s m i c retenu3.
     *
     * @param float $montantSMICRetenu3 The montant s m i c retenu3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setMontantSMICRetenu3($montantSMICRetenu3) {
        $this->montantSMICRetenu3 = $montantSMICRetenu3;
        return $this;
    }

    /**
     * Set the n i r.
     *
     * @param string $nIR The n i r.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNIR($nIR) {
        $this->nIR = $nIR;
        return $this;
    }

    /**
     * Set the nb heures1.
     *
     * @param float $nbHeures1 The nb heures1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbHeures1($nbHeures1) {
        $this->nbHeures1 = $nbHeures1;
        return $this;
    }

    /**
     * Set the nb heures2.
     *
     * @param float $nbHeures2 The nb heures2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbHeures2($nbHeures2) {
        $this->nbHeures2 = $nbHeures2;
        return $this;
    }

    /**
     * Set the nb heures3.
     *
     * @param float $nbHeures3 The nb heures3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbHeures3($nbHeures3) {
        $this->nbHeures3 = $nbHeures3;
        return $this;
    }

    /**
     * Set the nb jours1.
     *
     * @param int $nbJours1 The nb jours1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbJours1($nbJours1) {
        $this->nbJours1 = $nbJours1;
        return $this;
    }

    /**
     * Set the nb jours2.
     *
     * @param int $nbJours2 The nb jours2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbJours2($nbJours2) {
        $this->nbJours2 = $nbJours2;
        return $this;
    }

    /**
     * Set the nb jours3.
     *
     * @param int $nbJours3 The nb jours3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNbJours3($nbJours3) {
        $this->nbJours3 = $nbJours3;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero employe2.
     *
     * @param string $numeroEmploye2 The numero employe2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setNumeroEmploye2($numeroEmploye2) {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }

    /**
     * Set the p cent partiel.
     *
     * @param int $pCentPartiel The p cent partiel.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPCentPartiel($pCentPartiel) {
        $this->pCentPartiel = $pCentPartiel;
        return $this;
    }

    /**
     * Set the per deb1.
     *
     * @param DateTime $perDeb1 The per deb1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerDeb1(DateTime $perDeb1 = null) {
        $this->perDeb1 = $perDeb1;
        return $this;
    }

    /**
     * Set the per deb2.
     *
     * @param DateTime $perDeb2 The per deb2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerDeb2(DateTime $perDeb2 = null) {
        $this->perDeb2 = $perDeb2;
        return $this;
    }

    /**
     * Set the per deb3.
     *
     * @param DateTime $perDeb3 The per deb3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerDeb3(DateTime $perDeb3 = null) {
        $this->perDeb3 = $perDeb3;
        return $this;
    }

    /**
     * Set the per fin1.
     *
     * @param DateTime $perFin1 The per fin1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerFin1(DateTime $perFin1 = null) {
        $this->perFin1 = $perFin1;
        return $this;
    }

    /**
     * Set the per fin2.
     *
     * @param DateTime $perFin2 The per fin2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerFin2(DateTime $perFin2 = null) {
        $this->perFin2 = $perFin2;
        return $this;
    }

    /**
     * Set the per fin3.
     *
     * @param DateTime $perFin3 The per fin3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPerFin3(DateTime $perFin3 = null) {
        $this->perFin3 = $perFin3;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime $periodeDecla The periode decla.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the periodicite prec.
     *
     * @param string $periodicitePrec The periodicite prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPeriodicitePrec($periodicitePrec) {
        $this->periodicitePrec = $periodicitePrec;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string $prenomEmploye The prenom employe.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setPrenomEmploye($prenomEmploye) {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the saisonnier.
     *
     * @param string $saisonnier The saisonnier.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setSaisonnier($saisonnier) {
        $this->saisonnier = $saisonnier;
        return $this;
    }

    /**
     * Set the saisonnier prec.
     *
     * @param string $saisonnierPrec The saisonnier prec.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setSaisonnierPrec($saisonnierPrec) {
        $this->saisonnierPrec = $saisonnierPrec;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the service evo.
     *
     * @param string $serviceEvo The service evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setServiceEvo($serviceEvo) {
        $this->serviceEvo = $serviceEvo;
        return $this;
    }

    /**
     * Set the suspension z r r z r u1.
     *
     * @param string $suspensionZRRZRU1 The suspension z r r z r u1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setSuspensionZRRZRU1($suspensionZRRZRU1) {
        $this->suspensionZRRZRU1 = $suspensionZRRZRU1;
        return $this;
    }

    /**
     * Set the suspension z r r z r u2.
     *
     * @param string $suspensionZRRZRU2 The suspension z r r z r u2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setSuspensionZRRZRU2($suspensionZRRZRU2) {
        $this->suspensionZRRZRU2 = $suspensionZRRZRU2;
        return $this;
    }

    /**
     * Set the suspension z r r z r u3.
     *
     * @param string $suspensionZRRZRU3 The suspension z r r z r u3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setSuspensionZRRZRU3($suspensionZRRZRU3) {
        $this->suspensionZRRZRU3 = $suspensionZRRZRU3;
        return $this;
    }

    /**
     * Set the taux smic fillon1.
     *
     * @param float $tauxSmicFillon1 The taux smic fillon1.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTauxSmicFillon1($tauxSmicFillon1) {
        $this->tauxSmicFillon1 = $tauxSmicFillon1;
        return $this;
    }

    /**
     * Set the taux smic fillon2.
     *
     * @param float $tauxSmicFillon2 The taux smic fillon2.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTauxSmicFillon2($tauxSmicFillon2) {
        $this->tauxSmicFillon2 = $tauxSmicFillon2;
        return $this;
    }

    /**
     * Set the taux smic fillon3.
     *
     * @param float $tauxSmicFillon3 The taux smic fillon3.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTauxSmicFillon3($tauxSmicFillon3) {
        $this->tauxSmicFillon3 = $tauxSmicFillon3;
        return $this;
    }

    /**
     * Set the temps partiel.
     *
     * @param string $tempsPartiel The temps partiel.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTempsPartiel($tempsPartiel) {
        $this->tempsPartiel = $tempsPartiel;
        return $this;
    }

    /**
     * Set the temps partiel evo.
     *
     * @param string $tempsPartielEvo The temps partiel evo.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTempsPartielEvo($tempsPartielEvo) {
        $this->tempsPartielEvo = $tempsPartielEvo;
        return $this;
    }

    /**
     * Set the total general.
     *
     * @param int $totalGeneral The total general.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTotalGeneral($totalGeneral) {
        $this->totalGeneral = $totalGeneral;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string $typeAbsence The type absence.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAbsence($typeAbsence) {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }

    /**
     * Set the type autre remun11.
     *
     * @param string $typeAutreRemun11 The type autre remun11.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun11($typeAutreRemun11) {
        $this->typeAutreRemun11 = $typeAutreRemun11;
        return $this;
    }

    /**
     * Set the type autre remun12.
     *
     * @param string $typeAutreRemun12 The type autre remun12.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun12($typeAutreRemun12) {
        $this->typeAutreRemun12 = $typeAutreRemun12;
        return $this;
    }

    /**
     * Set the type autre remun13.
     *
     * @param string $typeAutreRemun13 The type autre remun13.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun13($typeAutreRemun13) {
        $this->typeAutreRemun13 = $typeAutreRemun13;
        return $this;
    }

    /**
     * Set the type autre remun14.
     *
     * @param string $typeAutreRemun14 The type autre remun14.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun14($typeAutreRemun14) {
        $this->typeAutreRemun14 = $typeAutreRemun14;
        return $this;
    }

    /**
     * Set the type autre remun21.
     *
     * @param string $typeAutreRemun21 The type autre remun21.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun21($typeAutreRemun21) {
        $this->typeAutreRemun21 = $typeAutreRemun21;
        return $this;
    }

    /**
     * Set the type autre remun22.
     *
     * @param string $typeAutreRemun22 The type autre remun22.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun22($typeAutreRemun22) {
        $this->typeAutreRemun22 = $typeAutreRemun22;
        return $this;
    }

    /**
     * Set the type autre remun23.
     *
     * @param string $typeAutreRemun23 The type autre remun23.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun23($typeAutreRemun23) {
        $this->typeAutreRemun23 = $typeAutreRemun23;
        return $this;
    }

    /**
     * Set the type autre remun24.
     *
     * @param string $typeAutreRemun24 The type autre remun24.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun24($typeAutreRemun24) {
        $this->typeAutreRemun24 = $typeAutreRemun24;
        return $this;
    }

    /**
     * Set the type autre remun31.
     *
     * @param string $typeAutreRemun31 The type autre remun31.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun31($typeAutreRemun31) {
        $this->typeAutreRemun31 = $typeAutreRemun31;
        return $this;
    }

    /**
     * Set the type autre remun32.
     *
     * @param string $typeAutreRemun32 The type autre remun32.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun32($typeAutreRemun32) {
        $this->typeAutreRemun32 = $typeAutreRemun32;
        return $this;
    }

    /**
     * Set the type autre remun33.
     *
     * @param string $typeAutreRemun33 The type autre remun33.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun33($typeAutreRemun33) {
        $this->typeAutreRemun33 = $typeAutreRemun33;
        return $this;
    }

    /**
     * Set the type autre remun34.
     *
     * @param string $typeAutreRemun34 The type autre remun34.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeAutreRemun34($typeAutreRemun34) {
        $this->typeAutreRemun34 = $typeAutreRemun34;
        return $this;
    }

    /**
     * Set the type c r c c a emp.
     *
     * @param string $typeCRCCAEmp The type c r c c a emp.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeCRCCAEmp($typeCRCCAEmp) {
        $this->typeCRCCAEmp = $typeCRCCAEmp;
        return $this;
    }

    /**
     * Set the type remun11.
     *
     * @param string $typeRemun11 The type remun11.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun11($typeRemun11) {
        $this->typeRemun11 = $typeRemun11;
        return $this;
    }

    /**
     * Set the type remun12.
     *
     * @param string $typeRemun12 The type remun12.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun12($typeRemun12) {
        $this->typeRemun12 = $typeRemun12;
        return $this;
    }

    /**
     * Set the type remun13.
     *
     * @param string $typeRemun13 The type remun13.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun13($typeRemun13) {
        $this->typeRemun13 = $typeRemun13;
        return $this;
    }

    /**
     * Set the type remun14.
     *
     * @param string $typeRemun14 The type remun14.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun14($typeRemun14) {
        $this->typeRemun14 = $typeRemun14;
        return $this;
    }

    /**
     * Set the type remun21.
     *
     * @param string $typeRemun21 The type remun21.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun21($typeRemun21) {
        $this->typeRemun21 = $typeRemun21;
        return $this;
    }

    /**
     * Set the type remun22.
     *
     * @param string $typeRemun22 The type remun22.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun22($typeRemun22) {
        $this->typeRemun22 = $typeRemun22;
        return $this;
    }

    /**
     * Set the type remun23.
     *
     * @param string $typeRemun23 The type remun23.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun23($typeRemun23) {
        $this->typeRemun23 = $typeRemun23;
        return $this;
    }

    /**
     * Set the type remun24.
     *
     * @param string $typeRemun24 The type remun24.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun24($typeRemun24) {
        $this->typeRemun24 = $typeRemun24;
        return $this;
    }

    /**
     * Set the type remun31.
     *
     * @param string $typeRemun31 The type remun31.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun31($typeRemun31) {
        $this->typeRemun31 = $typeRemun31;
        return $this;
    }

    /**
     * Set the type remun32.
     *
     * @param string $typeRemun32 The type remun32.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun32($typeRemun32) {
        $this->typeRemun32 = $typeRemun32;
        return $this;
    }

    /**
     * Set the type remun33.
     *
     * @param string $typeRemun33 The type remun33.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun33($typeRemun33) {
        $this->typeRemun33 = $typeRemun33;
        return $this;
    }

    /**
     * Set the type remun34.
     *
     * @param string $typeRemun34 The type remun34.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeRemun34($typeRemun34) {
        $this->typeRemun34 = $typeRemun34;
        return $this;
    }

    /**
     * Set the type travail.
     *
     * @param string $typeTravail The type travail.
     * @return LignesMSAEmploye Returns this lignes m s a employe.
     */
    public function setTypeTravail($typeTravail) {
        $this->typeTravail = $typeTravail;
        return $this;
    }

}
