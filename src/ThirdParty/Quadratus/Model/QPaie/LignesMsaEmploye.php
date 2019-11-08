<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes msa employe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesMsaEmploye {

    /**
     * Agirc.
     *
     * @var string
     */
    private $agirc;

    /**
     * Agirc evo.
     *
     * @var string
     */
    private $agircEvo;

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
     * Cddcdi.
     *
     * @var string
     */
    private $cddcdi;

    /**
     * Cddcdi evo.
     *
     * @var string
     */
    private $cddcdiEvo;

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
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date evo.
     *
     * @var DateTime|null
     */
    private $dateEvo;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Dt deb abs.
     *
     * @var DateTime|null
     */
    private $dtDebAbs;

    /**
     * Dt fin abs.
     *
     * @var DateTime|null
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
     * Evo agirc.
     *
     * @var bool
     */
    private $evoAgirc;

    /**
     * Evo cadre.
     *
     * @var bool
     */
    private $evoCadre;

    /**
     * Evo cddcdi.
     *
     * @var bool
     */
    private $evoCddcdi;

    /**
     * Evo contrat.
     *
     * @var bool
     */
    private $evoContrat;

    /**
     * Evo crcca36.
     *
     * @var bool
     */
    private $evoCrcca36;

    /**
     * Evo crcca4 bis.
     *
     * @var bool
     */
    private $evoCrcca4Bis;

    /**
     * Evo emploi.
     *
     * @var bool
     */
    private $evoEmploi;

    /**
     * Evo fisc.
     *
     * @var bool
     */
    private $evoFisc;

    /**
     * Fisc.
     *
     * @var string
     */
    private $fisc;

    /**
     * Fisc evo.
     *
     * @var string
     */
    private $fiscEvo;

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
     * Montant smic retenu1.
     *
     * @var float
     */
    private $montantSmicRetenu1;

    /**
     * Montant smic retenu2.
     *
     * @var float
     */
    private $montantSmicRetenu2;

    /**
     * Montant smic retenu3.
     *
     * @var float
     */
    private $montantSmicRetenu3;

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
     * Nir.
     *
     * @var string
     */
    private $nir;

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
     * @var DateTime|null
     */
    private $perDeb1;

    /**
     * Per deb2.
     *
     * @var DateTime|null
     */
    private $perDeb2;

    /**
     * Per deb3.
     *
     * @var DateTime|null
     */
    private $perDeb3;

    /**
     * Per fin1.
     *
     * @var DateTime|null
     */
    private $perFin1;

    /**
     * Per fin2.
     *
     * @var DateTime|null
     */
    private $perFin2;

    /**
     * Per fin3.
     *
     * @var DateTime|null
     */
    private $perFin3;

    /**
     * Periode decla.
     *
     * @var DateTime|null
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
     * Suspension zrrzru1.
     *
     * @var string
     */
    private $suspensionZrrzru1;

    /**
     * Suspension zrrzru2.
     *
     * @var string
     */
    private $suspensionZrrzru2;

    /**
     * Suspension zrrzru3.
     *
     * @var string
     */
    private $suspensionZrrzru3;

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
     * Type crcca emp.
     *
     * @var string
     */
    private $typeCrccaEmp;

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
     * Get the agirc.
     *
     * @return string Returns the agirc.
     */
    public function getAgirc() {
        return $this->agirc;
    }

    /**
     * Get the agirc evo.
     *
     * @return string Returns the agirc evo.
     */
    public function getAgircEvo() {
        return $this->agircEvo;
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
     * Get the cddcdi.
     *
     * @return string Returns the cddcdi.
     */
    public function getCddcdi() {
        return $this->cddcdi;
    }

    /**
     * Get the cddcdi evo.
     *
     * @return string Returns the cddcdi evo.
     */
    public function getCddcdiEvo() {
        return $this->cddcdiEvo;
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
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date evo.
     *
     * @return DateTime|null Returns the date evo.
     */
    public function getDateEvo() {
        return $this->dateEvo;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the dt deb abs.
     *
     * @return DateTime|null Returns the dt deb abs.
     */
    public function getDtDebAbs() {
        return $this->dtDebAbs;
    }

    /**
     * Get the dt fin abs.
     *
     * @return DateTime|null Returns the dt fin abs.
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
     * Get the evo agirc.
     *
     * @return bool Returns the evo agirc.
     */
    public function getEvoAgirc() {
        return $this->evoAgirc;
    }

    /**
     * Get the evo cadre.
     *
     * @return bool Returns the evo cadre.
     */
    public function getEvoCadre() {
        return $this->evoCadre;
    }

    /**
     * Get the evo cddcdi.
     *
     * @return bool Returns the evo cddcdi.
     */
    public function getEvoCddcdi() {
        return $this->evoCddcdi;
    }

    /**
     * Get the evo contrat.
     *
     * @return bool Returns the evo contrat.
     */
    public function getEvoContrat() {
        return $this->evoContrat;
    }

    /**
     * Get the evo crcca36.
     *
     * @return bool Returns the evo crcca36.
     */
    public function getEvoCrcca36() {
        return $this->evoCrcca36;
    }

    /**
     * Get the evo crcca4 bis.
     *
     * @return bool Returns the evo crcca4 bis.
     */
    public function getEvoCrcca4Bis() {
        return $this->evoCrcca4Bis;
    }

    /**
     * Get the evo emploi.
     *
     * @return bool Returns the evo emploi.
     */
    public function getEvoEmploi() {
        return $this->evoEmploi;
    }

    /**
     * Get the evo fisc.
     *
     * @return bool Returns the evo fisc.
     */
    public function getEvoFisc() {
        return $this->evoFisc;
    }

    /**
     * Get the fisc.
     *
     * @return string Returns the fisc.
     */
    public function getFisc() {
        return $this->fisc;
    }

    /**
     * Get the fisc evo.
     *
     * @return string Returns the fisc evo.
     */
    public function getFiscEvo() {
        return $this->fiscEvo;
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
     * Get the montant smic retenu1.
     *
     * @return float Returns the montant smic retenu1.
     */
    public function getMontantSmicRetenu1() {
        return $this->montantSmicRetenu1;
    }

    /**
     * Get the montant smic retenu2.
     *
     * @return float Returns the montant smic retenu2.
     */
    public function getMontantSmicRetenu2() {
        return $this->montantSmicRetenu2;
    }

    /**
     * Get the montant smic retenu3.
     *
     * @return float Returns the montant smic retenu3.
     */
    public function getMontantSmicRetenu3() {
        return $this->montantSmicRetenu3;
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
     * Get the nir.
     *
     * @return string Returns the nir.
     */
    public function getNir() {
        return $this->nir;
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
     * @return DateTime|null Returns the per deb1.
     */
    public function getPerDeb1() {
        return $this->perDeb1;
    }

    /**
     * Get the per deb2.
     *
     * @return DateTime|null Returns the per deb2.
     */
    public function getPerDeb2() {
        return $this->perDeb2;
    }

    /**
     * Get the per deb3.
     *
     * @return DateTime|null Returns the per deb3.
     */
    public function getPerDeb3() {
        return $this->perDeb3;
    }

    /**
     * Get the per fin1.
     *
     * @return DateTime|null Returns the per fin1.
     */
    public function getPerFin1() {
        return $this->perFin1;
    }

    /**
     * Get the per fin2.
     *
     * @return DateTime|null Returns the per fin2.
     */
    public function getPerFin2() {
        return $this->perFin2;
    }

    /**
     * Get the per fin3.
     *
     * @return DateTime|null Returns the per fin3.
     */
    public function getPerFin3() {
        return $this->perFin3;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
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
     * Get the suspension zrrzru1.
     *
     * @return string Returns the suspension zrrzru1.
     */
    public function getSuspensionZrrzru1() {
        return $this->suspensionZrrzru1;
    }

    /**
     * Get the suspension zrrzru2.
     *
     * @return string Returns the suspension zrrzru2.
     */
    public function getSuspensionZrrzru2() {
        return $this->suspensionZrrzru2;
    }

    /**
     * Get the suspension zrrzru3.
     *
     * @return string Returns the suspension zrrzru3.
     */
    public function getSuspensionZrrzru3() {
        return $this->suspensionZrrzru3;
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
     * Get the type crcca emp.
     *
     * @return string Returns the type crcca emp.
     */
    public function getTypeCrccaEmp() {
        return $this->typeCrccaEmp;
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
     * Set the agirc.
     *
     * @param string $agirc The agirc.
     */
    public function setAgirc($agirc) {
        $this->agirc = $agirc;
        return $this;
    }

    /**
     * Set the agirc evo.
     *
     * @param string $agircEvo The agirc evo.
     */
    public function setAgircEvo($agircEvo) {
        $this->agircEvo = $agircEvo;
        return $this;
    }

    /**
     * Set the cadre.
     *
     * @param string $cadre The cadre.
     */
    public function setCadre($cadre) {
        $this->cadre = $cadre;
        return $this;
    }

    /**
     * Set the cadre evo.
     *
     * @param string $cadreEvo The cadre evo.
     */
    public function setCadreEvo($cadreEvo) {
        $this->cadreEvo = $cadreEvo;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param string $cddcdi The cddcdi.
     */
    public function setCddcdi($cddcdi) {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the cddcdi evo.
     *
     * @param string $cddcdiEvo The cddcdi evo.
     */
    public function setCddcdiEvo($cddcdiEvo) {
        $this->cddcdiEvo = $cddcdiEvo;
        return $this;
    }

    /**
     * Set the code college prud.
     *
     * @param string $codeCollegePrud The code college prud.
     */
    public function setCodeCollegePrud($codeCollegePrud) {
        $this->codeCollegePrud = $codeCollegePrud;
        return $this;
    }

    /**
     * Set the code college prud prec.
     *
     * @param string $codeCollegePrudPrec The code college prud prec.
     */
    public function setCodeCollegePrudPrec($codeCollegePrudPrec) {
        $this->codeCollegePrudPrec = $codeCollegePrudPrec;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code section prud.
     *
     * @param string $codeSectionPrud The code section prud.
     */
    public function setCodeSectionPrud($codeSectionPrud) {
        $this->codeSectionPrud = $codeSectionPrud;
        return $this;
    }

    /**
     * Set the code section prud prec.
     *
     * @param string $codeSectionPrudPrec The code section prud prec.
     */
    public function setCodeSectionPrudPrec($codeSectionPrudPrec) {
        $this->codeSectionPrudPrec = $codeSectionPrudPrec;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the coeff emploi.
     *
     * @param string $coeffEmploi The coeff emploi.
     */
    public function setCoeffEmploi($coeffEmploi) {
        $this->coeffEmploi = $coeffEmploi;
        return $this;
    }

    /**
     * Set the coeff emploi evo.
     *
     * @param string $coeffEmploiEvo The coeff emploi evo.
     */
    public function setCoeffEmploiEvo($coeffEmploiEvo) {
        $this->coeffEmploiEvo = $coeffEmploiEvo;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the contrat.
     *
     * @param string $contrat The contrat.
     */
    public function setContrat($contrat) {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * Set the contrat evo.
     *
     * @param string $contratEvo The contrat evo.
     */
    public function setContratEvo($contratEvo) {
        $this->contratEvo = $contratEvo;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date evo.
     *
     * @param DateTime|null $dateEvo The date evo.
     */
    public function setDateEvo(DateTime $dateEvo = null) {
        $this->dateEvo = $dateEvo;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the dt deb abs.
     *
     * @param DateTime|null $dtDebAbs The dt deb abs.
     */
    public function setDtDebAbs(DateTime $dtDebAbs = null) {
        $this->dtDebAbs = $dtDebAbs;
        return $this;
    }

    /**
     * Set the dt fin abs.
     *
     * @param DateTime|null $dtFinAbs The dt fin abs.
     */
    public function setDtFinAbs(DateTime $dtFinAbs = null) {
        $this->dtFinAbs = $dtFinAbs;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float $dureeTrav The duree trav.
     */
    public function setDureeTrav($dureeTrav) {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the duree trav prec.
     *
     * @param float $dureeTravPrec The duree trav prec.
     */
    public function setDureeTravPrec($dureeTravPrec) {
        $this->dureeTravPrec = $dureeTravPrec;
        return $this;
    }

    /**
     * Set the emploi.
     *
     * @param string $emploi The emploi.
     */
    public function setEmploi($emploi) {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * Set the emploi evo.
     *
     * @param string $emploiEvo The emploi evo.
     */
    public function setEmploiEvo($emploiEvo) {
        $this->emploiEvo = $emploiEvo;
        return $this;
    }

    /**
     * Set the evo agirc.
     *
     * @param bool $evoAgirc The evo agirc.
     */
    public function setEvoAgirc($evoAgirc) {
        $this->evoAgirc = $evoAgirc;
        return $this;
    }

    /**
     * Set the evo cadre.
     *
     * @param bool $evoCadre The evo cadre.
     */
    public function setEvoCadre($evoCadre) {
        $this->evoCadre = $evoCadre;
        return $this;
    }

    /**
     * Set the evo cddcdi.
     *
     * @param bool $evoCddcdi The evo cddcdi.
     */
    public function setEvoCddcdi($evoCddcdi) {
        $this->evoCddcdi = $evoCddcdi;
        return $this;
    }

    /**
     * Set the evo contrat.
     *
     * @param bool $evoContrat The evo contrat.
     */
    public function setEvoContrat($evoContrat) {
        $this->evoContrat = $evoContrat;
        return $this;
    }

    /**
     * Set the evo crcca36.
     *
     * @param bool $evoCrcca36 The evo crcca36.
     */
    public function setEvoCrcca36($evoCrcca36) {
        $this->evoCrcca36 = $evoCrcca36;
        return $this;
    }

    /**
     * Set the evo crcca4 bis.
     *
     * @param bool $evoCrcca4Bis The evo crcca4 bis.
     */
    public function setEvoCrcca4Bis($evoCrcca4Bis) {
        $this->evoCrcca4Bis = $evoCrcca4Bis;
        return $this;
    }

    /**
     * Set the evo emploi.
     *
     * @param bool $evoEmploi The evo emploi.
     */
    public function setEvoEmploi($evoEmploi) {
        $this->evoEmploi = $evoEmploi;
        return $this;
    }

    /**
     * Set the evo fisc.
     *
     * @param bool $evoFisc The evo fisc.
     */
    public function setEvoFisc($evoFisc) {
        $this->evoFisc = $evoFisc;
        return $this;
    }

    /**
     * Set the fisc.
     *
     * @param string $fisc The fisc.
     */
    public function setFisc($fisc) {
        $this->fisc = $fisc;
        return $this;
    }

    /**
     * Set the fisc evo.
     *
     * @param string $fiscEvo The fisc evo.
     */
    public function setFiscEvo($fiscEvo) {
        $this->fiscEvo = $fiscEvo;
        return $this;
    }

    /**
     * Set the h equivalence.
     *
     * @param string $hEquivalence The h equivalence.
     */
    public function setHEquivalence($hEquivalence) {
        $this->hEquivalence = $hEquivalence;
        return $this;
    }

    /**
     * Set the h equivalence prec.
     *
     * @param string $hEquivalencePrec The h equivalence prec.
     */
    public function setHEquivalencePrec($hEquivalencePrec) {
        $this->hEquivalencePrec = $hEquivalencePrec;
        return $this;
    }

    /**
     * Set the lieu travail.
     *
     * @param string $lieuTravail The lieu travail.
     */
    public function setLieuTravail($lieuTravail) {
        $this->lieuTravail = $lieuTravail;
        return $this;
    }

    /**
     * Set the lieu travail evo.
     *
     * @param string $lieuTravailEvo The lieu travail evo.
     */
    public function setLieuTravailEvo($lieuTravailEvo) {
        $this->lieuTravailEvo = $lieuTravailEvo;
        return $this;
    }

    /**
     * Set the montant11.
     *
     * @param int $montant11 The montant11.
     */
    public function setMontant11($montant11) {
        $this->montant11 = $montant11;
        return $this;
    }

    /**
     * Set the montant12.
     *
     * @param int $montant12 The montant12.
     */
    public function setMontant12($montant12) {
        $this->montant12 = $montant12;
        return $this;
    }

    /**
     * Set the montant13.
     *
     * @param int $montant13 The montant13.
     */
    public function setMontant13($montant13) {
        $this->montant13 = $montant13;
        return $this;
    }

    /**
     * Set the montant14.
     *
     * @param int $montant14 The montant14.
     */
    public function setMontant14($montant14) {
        $this->montant14 = $montant14;
        return $this;
    }

    /**
     * Set the montant21.
     *
     * @param int $montant21 The montant21.
     */
    public function setMontant21($montant21) {
        $this->montant21 = $montant21;
        return $this;
    }

    /**
     * Set the montant22.
     *
     * @param int $montant22 The montant22.
     */
    public function setMontant22($montant22) {
        $this->montant22 = $montant22;
        return $this;
    }

    /**
     * Set the montant23.
     *
     * @param int $montant23 The montant23.
     */
    public function setMontant23($montant23) {
        $this->montant23 = $montant23;
        return $this;
    }

    /**
     * Set the montant24.
     *
     * @param int $montant24 The montant24.
     */
    public function setMontant24($montant24) {
        $this->montant24 = $montant24;
        return $this;
    }

    /**
     * Set the montant31.
     *
     * @param int $montant31 The montant31.
     */
    public function setMontant31($montant31) {
        $this->montant31 = $montant31;
        return $this;
    }

    /**
     * Set the montant32.
     *
     * @param int $montant32 The montant32.
     */
    public function setMontant32($montant32) {
        $this->montant32 = $montant32;
        return $this;
    }

    /**
     * Set the montant33.
     *
     * @param int $montant33 The montant33.
     */
    public function setMontant33($montant33) {
        $this->montant33 = $montant33;
        return $this;
    }

    /**
     * Set the montant34.
     *
     * @param int $montant34 The montant34.
     */
    public function setMontant34($montant34) {
        $this->montant34 = $montant34;
        return $this;
    }

    /**
     * Set the montant autre11.
     *
     * @param int $montantAutre11 The montant autre11.
     */
    public function setMontantAutre11($montantAutre11) {
        $this->montantAutre11 = $montantAutre11;
        return $this;
    }

    /**
     * Set the montant autre12.
     *
     * @param int $montantAutre12 The montant autre12.
     */
    public function setMontantAutre12($montantAutre12) {
        $this->montantAutre12 = $montantAutre12;
        return $this;
    }

    /**
     * Set the montant autre13.
     *
     * @param int $montantAutre13 The montant autre13.
     */
    public function setMontantAutre13($montantAutre13) {
        $this->montantAutre13 = $montantAutre13;
        return $this;
    }

    /**
     * Set the montant autre14.
     *
     * @param int $montantAutre14 The montant autre14.
     */
    public function setMontantAutre14($montantAutre14) {
        $this->montantAutre14 = $montantAutre14;
        return $this;
    }

    /**
     * Set the montant autre21.
     *
     * @param int $montantAutre21 The montant autre21.
     */
    public function setMontantAutre21($montantAutre21) {
        $this->montantAutre21 = $montantAutre21;
        return $this;
    }

    /**
     * Set the montant autre22.
     *
     * @param int $montantAutre22 The montant autre22.
     */
    public function setMontantAutre22($montantAutre22) {
        $this->montantAutre22 = $montantAutre22;
        return $this;
    }

    /**
     * Set the montant autre23.
     *
     * @param int $montantAutre23 The montant autre23.
     */
    public function setMontantAutre23($montantAutre23) {
        $this->montantAutre23 = $montantAutre23;
        return $this;
    }

    /**
     * Set the montant autre24.
     *
     * @param int $montantAutre24 The montant autre24.
     */
    public function setMontantAutre24($montantAutre24) {
        $this->montantAutre24 = $montantAutre24;
        return $this;
    }

    /**
     * Set the montant autre31.
     *
     * @param int $montantAutre31 The montant autre31.
     */
    public function setMontantAutre31($montantAutre31) {
        $this->montantAutre31 = $montantAutre31;
        return $this;
    }

    /**
     * Set the montant autre32.
     *
     * @param int $montantAutre32 The montant autre32.
     */
    public function setMontantAutre32($montantAutre32) {
        $this->montantAutre32 = $montantAutre32;
        return $this;
    }

    /**
     * Set the montant autre33.
     *
     * @param int $montantAutre33 The montant autre33.
     */
    public function setMontantAutre33($montantAutre33) {
        $this->montantAutre33 = $montantAutre33;
        return $this;
    }

    /**
     * Set the montant autre34.
     *
     * @param int $montantAutre34 The montant autre34.
     */
    public function setMontantAutre34($montantAutre34) {
        $this->montantAutre34 = $montantAutre34;
        return $this;
    }

    /**
     * Set the montant smic retenu1.
     *
     * @param float $montantSmicRetenu1 The montant smic retenu1.
     */
    public function setMontantSmicRetenu1($montantSmicRetenu1) {
        $this->montantSmicRetenu1 = $montantSmicRetenu1;
        return $this;
    }

    /**
     * Set the montant smic retenu2.
     *
     * @param float $montantSmicRetenu2 The montant smic retenu2.
     */
    public function setMontantSmicRetenu2($montantSmicRetenu2) {
        $this->montantSmicRetenu2 = $montantSmicRetenu2;
        return $this;
    }

    /**
     * Set the montant smic retenu3.
     *
     * @param float $montantSmicRetenu3 The montant smic retenu3.
     */
    public function setMontantSmicRetenu3($montantSmicRetenu3) {
        $this->montantSmicRetenu3 = $montantSmicRetenu3;
        return $this;
    }

    /**
     * Set the nb heures1.
     *
     * @param float $nbHeures1 The nb heures1.
     */
    public function setNbHeures1($nbHeures1) {
        $this->nbHeures1 = $nbHeures1;
        return $this;
    }

    /**
     * Set the nb heures2.
     *
     * @param float $nbHeures2 The nb heures2.
     */
    public function setNbHeures2($nbHeures2) {
        $this->nbHeures2 = $nbHeures2;
        return $this;
    }

    /**
     * Set the nb heures3.
     *
     * @param float $nbHeures3 The nb heures3.
     */
    public function setNbHeures3($nbHeures3) {
        $this->nbHeures3 = $nbHeures3;
        return $this;
    }

    /**
     * Set the nb jours1.
     *
     * @param int $nbJours1 The nb jours1.
     */
    public function setNbJours1($nbJours1) {
        $this->nbJours1 = $nbJours1;
        return $this;
    }

    /**
     * Set the nb jours2.
     *
     * @param int $nbJours2 The nb jours2.
     */
    public function setNbJours2($nbJours2) {
        $this->nbJours2 = $nbJours2;
        return $this;
    }

    /**
     * Set the nb jours3.
     *
     * @param int $nbJours3 The nb jours3.
     */
    public function setNbJours3($nbJours3) {
        $this->nbJours3 = $nbJours3;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string $nir The nir.
     */
    public function setNir($nir) {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string $nomEmploye The nom employe.
     */
    public function setNomEmploye($nomEmploye) {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero employe2.
     *
     * @param string $numeroEmploye2 The numero employe2.
     */
    public function setNumeroEmploye2($numeroEmploye2) {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }

    /**
     * Set the p cent partiel.
     *
     * @param int $pCentPartiel The p cent partiel.
     */
    public function setPCentPartiel($pCentPartiel) {
        $this->pCentPartiel = $pCentPartiel;
        return $this;
    }

    /**
     * Set the per deb1.
     *
     * @param DateTime|null $perDeb1 The per deb1.
     */
    public function setPerDeb1(DateTime $perDeb1 = null) {
        $this->perDeb1 = $perDeb1;
        return $this;
    }

    /**
     * Set the per deb2.
     *
     * @param DateTime|null $perDeb2 The per deb2.
     */
    public function setPerDeb2(DateTime $perDeb2 = null) {
        $this->perDeb2 = $perDeb2;
        return $this;
    }

    /**
     * Set the per deb3.
     *
     * @param DateTime|null $perDeb3 The per deb3.
     */
    public function setPerDeb3(DateTime $perDeb3 = null) {
        $this->perDeb3 = $perDeb3;
        return $this;
    }

    /**
     * Set the per fin1.
     *
     * @param DateTime|null $perFin1 The per fin1.
     */
    public function setPerFin1(DateTime $perFin1 = null) {
        $this->perFin1 = $perFin1;
        return $this;
    }

    /**
     * Set the per fin2.
     *
     * @param DateTime|null $perFin2 The per fin2.
     */
    public function setPerFin2(DateTime $perFin2 = null) {
        $this->perFin2 = $perFin2;
        return $this;
    }

    /**
     * Set the per fin3.
     *
     * @param DateTime|null $perFin3 The per fin3.
     */
    public function setPerFin3(DateTime $perFin3 = null) {
        $this->perFin3 = $perFin3;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the periodicite prec.
     *
     * @param string $periodicitePrec The periodicite prec.
     */
    public function setPeriodicitePrec($periodicitePrec) {
        $this->periodicitePrec = $periodicitePrec;
        return $this;
    }

    /**
     * Set the prenom employe.
     *
     * @param string $prenomEmploye The prenom employe.
     */
    public function setPrenomEmploye($prenomEmploye) {
        $this->prenomEmploye = $prenomEmploye;
        return $this;
    }

    /**
     * Set the saisonnier.
     *
     * @param string $saisonnier The saisonnier.
     */
    public function setSaisonnier($saisonnier) {
        $this->saisonnier = $saisonnier;
        return $this;
    }

    /**
     * Set the saisonnier prec.
     *
     * @param string $saisonnierPrec The saisonnier prec.
     */
    public function setSaisonnierPrec($saisonnierPrec) {
        $this->saisonnierPrec = $saisonnierPrec;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the service evo.
     *
     * @param string $serviceEvo The service evo.
     */
    public function setServiceEvo($serviceEvo) {
        $this->serviceEvo = $serviceEvo;
        return $this;
    }

    /**
     * Set the suspension zrrzru1.
     *
     * @param string $suspensionZrrzru1 The suspension zrrzru1.
     */
    public function setSuspensionZrrzru1($suspensionZrrzru1) {
        $this->suspensionZrrzru1 = $suspensionZrrzru1;
        return $this;
    }

    /**
     * Set the suspension zrrzru2.
     *
     * @param string $suspensionZrrzru2 The suspension zrrzru2.
     */
    public function setSuspensionZrrzru2($suspensionZrrzru2) {
        $this->suspensionZrrzru2 = $suspensionZrrzru2;
        return $this;
    }

    /**
     * Set the suspension zrrzru3.
     *
     * @param string $suspensionZrrzru3 The suspension zrrzru3.
     */
    public function setSuspensionZrrzru3($suspensionZrrzru3) {
        $this->suspensionZrrzru3 = $suspensionZrrzru3;
        return $this;
    }

    /**
     * Set the taux smic fillon1.
     *
     * @param float $tauxSmicFillon1 The taux smic fillon1.
     */
    public function setTauxSmicFillon1($tauxSmicFillon1) {
        $this->tauxSmicFillon1 = $tauxSmicFillon1;
        return $this;
    }

    /**
     * Set the taux smic fillon2.
     *
     * @param float $tauxSmicFillon2 The taux smic fillon2.
     */
    public function setTauxSmicFillon2($tauxSmicFillon2) {
        $this->tauxSmicFillon2 = $tauxSmicFillon2;
        return $this;
    }

    /**
     * Set the taux smic fillon3.
     *
     * @param float $tauxSmicFillon3 The taux smic fillon3.
     */
    public function setTauxSmicFillon3($tauxSmicFillon3) {
        $this->tauxSmicFillon3 = $tauxSmicFillon3;
        return $this;
    }

    /**
     * Set the temps partiel.
     *
     * @param string $tempsPartiel The temps partiel.
     */
    public function setTempsPartiel($tempsPartiel) {
        $this->tempsPartiel = $tempsPartiel;
        return $this;
    }

    /**
     * Set the temps partiel evo.
     *
     * @param string $tempsPartielEvo The temps partiel evo.
     */
    public function setTempsPartielEvo($tempsPartielEvo) {
        $this->tempsPartielEvo = $tempsPartielEvo;
        return $this;
    }

    /**
     * Set the total general.
     *
     * @param int $totalGeneral The total general.
     */
    public function setTotalGeneral($totalGeneral) {
        $this->totalGeneral = $totalGeneral;
        return $this;
    }

    /**
     * Set the type absence.
     *
     * @param string $typeAbsence The type absence.
     */
    public function setTypeAbsence($typeAbsence) {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }

    /**
     * Set the type autre remun11.
     *
     * @param string $typeAutreRemun11 The type autre remun11.
     */
    public function setTypeAutreRemun11($typeAutreRemun11) {
        $this->typeAutreRemun11 = $typeAutreRemun11;
        return $this;
    }

    /**
     * Set the type autre remun12.
     *
     * @param string $typeAutreRemun12 The type autre remun12.
     */
    public function setTypeAutreRemun12($typeAutreRemun12) {
        $this->typeAutreRemun12 = $typeAutreRemun12;
        return $this;
    }

    /**
     * Set the type autre remun13.
     *
     * @param string $typeAutreRemun13 The type autre remun13.
     */
    public function setTypeAutreRemun13($typeAutreRemun13) {
        $this->typeAutreRemun13 = $typeAutreRemun13;
        return $this;
    }

    /**
     * Set the type autre remun14.
     *
     * @param string $typeAutreRemun14 The type autre remun14.
     */
    public function setTypeAutreRemun14($typeAutreRemun14) {
        $this->typeAutreRemun14 = $typeAutreRemun14;
        return $this;
    }

    /**
     * Set the type autre remun21.
     *
     * @param string $typeAutreRemun21 The type autre remun21.
     */
    public function setTypeAutreRemun21($typeAutreRemun21) {
        $this->typeAutreRemun21 = $typeAutreRemun21;
        return $this;
    }

    /**
     * Set the type autre remun22.
     *
     * @param string $typeAutreRemun22 The type autre remun22.
     */
    public function setTypeAutreRemun22($typeAutreRemun22) {
        $this->typeAutreRemun22 = $typeAutreRemun22;
        return $this;
    }

    /**
     * Set the type autre remun23.
     *
     * @param string $typeAutreRemun23 The type autre remun23.
     */
    public function setTypeAutreRemun23($typeAutreRemun23) {
        $this->typeAutreRemun23 = $typeAutreRemun23;
        return $this;
    }

    /**
     * Set the type autre remun24.
     *
     * @param string $typeAutreRemun24 The type autre remun24.
     */
    public function setTypeAutreRemun24($typeAutreRemun24) {
        $this->typeAutreRemun24 = $typeAutreRemun24;
        return $this;
    }

    /**
     * Set the type autre remun31.
     *
     * @param string $typeAutreRemun31 The type autre remun31.
     */
    public function setTypeAutreRemun31($typeAutreRemun31) {
        $this->typeAutreRemun31 = $typeAutreRemun31;
        return $this;
    }

    /**
     * Set the type autre remun32.
     *
     * @param string $typeAutreRemun32 The type autre remun32.
     */
    public function setTypeAutreRemun32($typeAutreRemun32) {
        $this->typeAutreRemun32 = $typeAutreRemun32;
        return $this;
    }

    /**
     * Set the type autre remun33.
     *
     * @param string $typeAutreRemun33 The type autre remun33.
     */
    public function setTypeAutreRemun33($typeAutreRemun33) {
        $this->typeAutreRemun33 = $typeAutreRemun33;
        return $this;
    }

    /**
     * Set the type autre remun34.
     *
     * @param string $typeAutreRemun34 The type autre remun34.
     */
    public function setTypeAutreRemun34($typeAutreRemun34) {
        $this->typeAutreRemun34 = $typeAutreRemun34;
        return $this;
    }

    /**
     * Set the type crcca emp.
     *
     * @param string $typeCrccaEmp The type crcca emp.
     */
    public function setTypeCrccaEmp($typeCrccaEmp) {
        $this->typeCrccaEmp = $typeCrccaEmp;
        return $this;
    }

    /**
     * Set the type remun11.
     *
     * @param string $typeRemun11 The type remun11.
     */
    public function setTypeRemun11($typeRemun11) {
        $this->typeRemun11 = $typeRemun11;
        return $this;
    }

    /**
     * Set the type remun12.
     *
     * @param string $typeRemun12 The type remun12.
     */
    public function setTypeRemun12($typeRemun12) {
        $this->typeRemun12 = $typeRemun12;
        return $this;
    }

    /**
     * Set the type remun13.
     *
     * @param string $typeRemun13 The type remun13.
     */
    public function setTypeRemun13($typeRemun13) {
        $this->typeRemun13 = $typeRemun13;
        return $this;
    }

    /**
     * Set the type remun14.
     *
     * @param string $typeRemun14 The type remun14.
     */
    public function setTypeRemun14($typeRemun14) {
        $this->typeRemun14 = $typeRemun14;
        return $this;
    }

    /**
     * Set the type remun21.
     *
     * @param string $typeRemun21 The type remun21.
     */
    public function setTypeRemun21($typeRemun21) {
        $this->typeRemun21 = $typeRemun21;
        return $this;
    }

    /**
     * Set the type remun22.
     *
     * @param string $typeRemun22 The type remun22.
     */
    public function setTypeRemun22($typeRemun22) {
        $this->typeRemun22 = $typeRemun22;
        return $this;
    }

    /**
     * Set the type remun23.
     *
     * @param string $typeRemun23 The type remun23.
     */
    public function setTypeRemun23($typeRemun23) {
        $this->typeRemun23 = $typeRemun23;
        return $this;
    }

    /**
     * Set the type remun24.
     *
     * @param string $typeRemun24 The type remun24.
     */
    public function setTypeRemun24($typeRemun24) {
        $this->typeRemun24 = $typeRemun24;
        return $this;
    }

    /**
     * Set the type remun31.
     *
     * @param string $typeRemun31 The type remun31.
     */
    public function setTypeRemun31($typeRemun31) {
        $this->typeRemun31 = $typeRemun31;
        return $this;
    }

    /**
     * Set the type remun32.
     *
     * @param string $typeRemun32 The type remun32.
     */
    public function setTypeRemun32($typeRemun32) {
        $this->typeRemun32 = $typeRemun32;
        return $this;
    }

    /**
     * Set the type remun33.
     *
     * @param string $typeRemun33 The type remun33.
     */
    public function setTypeRemun33($typeRemun33) {
        $this->typeRemun33 = $typeRemun33;
        return $this;
    }

    /**
     * Set the type remun34.
     *
     * @param string $typeRemun34 The type remun34.
     */
    public function setTypeRemun34($typeRemun34) {
        $this->typeRemun34 = $typeRemun34;
        return $this;
    }

    /**
     * Set the type travail.
     *
     * @param string $typeTravail The type travail.
     */
    public function setTypeTravail($typeTravail) {
        $this->typeTravail = $typeTravail;
        return $this;
    }
}
