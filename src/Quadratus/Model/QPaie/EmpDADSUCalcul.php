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
 * Emp d a d s u calcul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpDADSUCalcul {

    /**
     * Ancienn btp.
     *
     * @var DateTime
     */
    private $anciennBtp;

    /**
     * Annee somme isol.
     *
     * @var string
     */
    private $anneeSommeIsol;

    /**
     * Annee somme isol2.
     *
     * @var string
     */
    private $anneeSommeIsol2;

    /**
     * Annee somme isol3.
     *
     * @var string
     */
    private $anneeSommeIsol3;

    /**
     * Annee somme isol4.
     *
     * @var string
     */
    private $anneeSommeIsol4;

    /**
     * Annee somme isol5.
     *
     * @var string
     */
    private $anneeSommeIsol5;

    /**
     * B t p sal moyen.
     *
     * @var float
     */
    private $bTPSalMoyen;

    /**
     * Base brute c p b t p.
     *
     * @var float
     */
    private $baseBruteCPBTP;

    /**
     * Base brute cot c c p b t p.
     *
     * @var float
     */
    private $baseBruteCotCCPBTP;

    /**
     * Base brute cot o p p b t p.
     *
     * @var float
     */
    private $baseBruteCotOPPBTP;

    /**
     * Benef assedic.
     *
     * @var string
     */
    private $benefAssedic;

    /**
     * Brut ircantec.
     *
     * @var float
     */
    private $brutIrcantec;

    /**
     * Code class b t p.
     *
     * @var string
     */
    private $codeClassBTP;

    /**
     * Code duree trav.
     *
     * @var string
     */
    private $codeDureeTrav;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code lib b plaf.
     *
     * @var string
     */
    private $codeLibBPlaf;

    /**
     * Code lib b plaf2.
     *
     * @var string
     */
    private $codeLibBPlaf2;

    /**
     * Code lib b plaf3.
     *
     * @var string
     */
    private $codeLibBPlaf3;

    /**
     * Code lib b plaf4.
     *
     * @var string
     */
    private $codeLibBPlaf4;

    /**
     * Code lib b plaf5.
     *
     * @var string
     */
    private $codeLibBPlaf5;

    /**
     * Code lib brut.
     *
     * @var string
     */
    private $codeLibBrut;

    /**
     * Code lib brut2.
     *
     * @var string
     */
    private $codeLibBrut2;

    /**
     * Code lib brut3.
     *
     * @var string
     */
    private $codeLibBrut3;

    /**
     * Code lib brut4.
     *
     * @var string
     */
    private $codeLibBrut4;

    /**
     * Code lib brut5.
     *
     * @var string
     */
    private $codeLibBrut5;

    /**
     * Code lib c s g.
     *
     * @var string
     */
    private $codeLibCSG;

    /**
     * Code lib i r c1.
     *
     * @var string
     */
    private $codeLibIRC1;

    /**
     * Code lib i r c2.
     *
     * @var string
     */
    private $codeLibIRC2;

    /**
     * Code lib i r c3.
     *
     * @var string
     */
    private $codeLibIRC3;

    /**
     * Code lib somme.
     *
     * @var string
     */
    private $codeLibSomme;

    /**
     * Code lib somme2.
     *
     * @var string
     */
    private $codeLibSomme2;

    /**
     * Code lib somme3.
     *
     * @var string
     */
    private $codeLibSomme3;

    /**
     * Code lib somme4.
     *
     * @var string
     */
    private $codeLibSomme4;

    /**
     * Code lib somme5.
     *
     * @var string
     */
    private $codeLibSomme5;

    /**
     * Code metier b t p.
     *
     * @var string
     */
    private $codeMetierBTP;

    /**
     * Code type b plaf.
     *
     * @var string
     */
    private $codeTypeBPlaf;

    /**
     * Code type b plaf2.
     *
     * @var string
     */
    private $codeTypeBPlaf2;

    /**
     * Code type b plaf3.
     *
     * @var string
     */
    private $codeTypeBPlaf3;

    /**
     * Code type b plaf4.
     *
     * @var string
     */
    private $codeTypeBPlaf4;

    /**
     * Code type b plaf5.
     *
     * @var string
     */
    private $codeTypeBPlaf5;

    /**
     * Code type brut.
     *
     * @var string
     */
    private $codeTypeBrut;

    /**
     * Code type brut2.
     *
     * @var string
     */
    private $codeTypeBrut2;

    /**
     * Code type brut3.
     *
     * @var string
     */
    private $codeTypeBrut3;

    /**
     * Code type brut4.
     *
     * @var string
     */
    private $codeTypeBrut4;

    /**
     * Code type brut5.
     *
     * @var string
     */
    private $codeTypeBrut5;

    /**
     * Code type somme.
     *
     * @var string
     */
    private $codeTypeSomme;

    /**
     * Code type somme2.
     *
     * @var string
     */
    private $codeTypeSomme2;

    /**
     * Code type somme3.
     *
     * @var string
     */
    private $codeTypeSomme3;

    /**
     * Code type somme4.
     *
     * @var string
     */
    private $codeTypeSomme4;

    /**
     * Code type somme5.
     *
     * @var string
     */
    private $codeTypeSomme5;

    /**
     * Csg specif.
     *
     * @var float
     */
    private $csgSpecif;

    /**
     * Duree trav.
     *
     * @var float
     */
    private $dureeTrav;

    /**
     * Exo h_ code1.
     *
     * @var string
     */
    private $exoH_Code1;

    /**
     * Exo h_ code2.
     *
     * @var string
     */
    private $exoH_Code2;

    /**
     * Exo h_ code3.
     *
     * @var string
     */
    private $exoH_Code3;

    /**
     * Exo h_ code4.
     *
     * @var string
     */
    private $exoH_Code4;

    /**
     * Exo h_ code5.
     *
     * @var string
     */
    private $exoH_Code5;

    /**
     * Exo h_ mnt1.
     *
     * @var float
     */
    private $exoH_Mnt1;

    /**
     * Exo h_ mnt2.
     *
     * @var float
     */
    private $exoH_Mnt2;

    /**
     * Exo h_ mnt3.
     *
     * @var float
     */
    private $exoH_Mnt3;

    /**
     * Exo h_ mnt4.
     *
     * @var float
     */
    private $exoH_Mnt4;

    /**
     * Exo h_ mnt5.
     *
     * @var float
     */
    private $exoH_Mnt5;

    /**
     * Exo h_ mnt deduc cot pat1.
     *
     * @var float
     */
    private $exoH_MntDeducCotPat1;

    /**
     * Exo h_ mnt deduc cot pat2.
     *
     * @var float
     */
    private $exoH_MntDeducCotPat2;

    /**
     * Exo h_ mnt deduc cot pat3.
     *
     * @var float
     */
    private $exoH_MntDeducCotPat3;

    /**
     * Exo h_ mnt deduc cot pat4.
     *
     * @var float
     */
    private $exoH_MntDeducCotPat4;

    /**
     * Exo h_ mnt deduc cot pat5.
     *
     * @var float
     */
    private $exoH_MntDeducCotPat5;

    /**
     * Exo h_ mnt deduc cot pat tot.
     *
     * @var float
     */
    private $exoH_MntDeducCotPatTot;

    /**
     * Exo h_ mnt reduc cot sal1.
     *
     * @var float
     */
    private $exoH_MntReducCotSal1;

    /**
     * Exo h_ mnt reduc cot sal2.
     *
     * @var float
     */
    private $exoH_MntReducCotSal2;

    /**
     * Exo h_ mnt reduc cot sal3.
     *
     * @var float
     */
    private $exoH_MntReducCotSal3;

    /**
     * Exo h_ mnt reduc cot sal4.
     *
     * @var float
     */
    private $exoH_MntReducCotSal4;

    /**
     * Exo h_ mnt reduc cot sal5.
     *
     * @var float
     */
    private $exoH_MntReducCotSal5;

    /**
     * Exo h_ mnt reduc cot sal tot.
     *
     * @var float
     */
    private $exoH_MntReducCotSalTot;

    /**
     * Exo h_ nb h j1.
     *
     * @var float
     */
    private $exoH_NbHJ1;

    /**
     * Exo h_ nb h j2.
     *
     * @var float
     */
    private $exoH_NbHJ2;

    /**
     * Exo h_ nb h j3.
     *
     * @var float
     */
    private $exoH_NbHJ3;

    /**
     * Exo h_ nb h j4.
     *
     * @var float
     */
    private $exoH_NbHJ4;

    /**
     * Exo h_ nb h j5.
     *
     * @var float
     */
    private $exoH_NbHJ5;

    /**
     * Forma pro_ base.
     *
     * @var float
     */
    private $formaPro_Base;

    /**
     * Forma pro_ base c d d.
     *
     * @var float
     */
    private $formaPro_BaseCDD;

    /**
     * Ind cp.
     *
     * @var float
     */
    private $indCp;

    /**
     * Ind intemp.
     *
     * @var float
     */
    private $indIntemp;

    /**
     * Montant b plaf.
     *
     * @var float
     */
    private $montantBPlaf;

    /**
     * Montant b plaf2.
     *
     * @var float
     */
    private $montantBPlaf2;

    /**
     * Montant b plaf3.
     *
     * @var float
     */
    private $montantBPlaf3;

    /**
     * Montant b plaf4.
     *
     * @var float
     */
    private $montantBPlaf4;

    /**
     * Montant b plaf5.
     *
     * @var float
     */
    private $montantBPlaf5;

    /**
     * Montant brut.
     *
     * @var float
     */
    private $montantBrut;

    /**
     * Montant brut2.
     *
     * @var float
     */
    private $montantBrut2;

    /**
     * Montant brut3.
     *
     * @var float
     */
    private $montantBrut3;

    /**
     * Montant brut4.
     *
     * @var float
     */
    private $montantBrut4;

    /**
     * Montant brut5.
     *
     * @var float
     */
    private $montantBrut5;

    /**
     * Montant somme isol brut.
     *
     * @var float
     */
    private $montantSommeIsolBrut;

    /**
     * Montant somme isol brut2.
     *
     * @var float
     */
    private $montantSommeIsolBrut2;

    /**
     * Montant somme isol brut3.
     *
     * @var float
     */
    private $montantSommeIsolBrut3;

    /**
     * Montant somme isol brut4.
     *
     * @var float
     */
    private $montantSommeIsolBrut4;

    /**
     * Montant somme isol brut5.
     *
     * @var float
     */
    private $montantSommeIsolBrut5;

    /**
     * Montant somme isol plaf.
     *
     * @var float
     */
    private $montantSommeIsolPlaf;

    /**
     * Montant somme isol plaf2.
     *
     * @var float
     */
    private $montantSommeIsolPlaf2;

    /**
     * Montant somme isol plaf3.
     *
     * @var float
     */
    private $montantSommeIsolPlaf3;

    /**
     * Montant somme isol plaf4.
     *
     * @var float
     */
    private $montantSommeIsolPlaf4;

    /**
     * Montant somme isol plaf5.
     *
     * @var float
     */
    private $montantSommeIsolPlaf5;

    /**
     * Mt j rtt2007.
     *
     * @var float
     */
    private $mtJRtt2007;

    /**
     * Nb j rtt2007.
     *
     * @var float
     */
    private $nbJRtt2007;

    /**
     * Nb periode.
     *
     * @var float
     */
    private $nbPeriode;

    /**
     * Nbh chom partiel.
     *
     * @var float
     */
    private $nbhChomPartiel;

    /**
     * Nbh sem ircantec.
     *
     * @var float
     */
    private $nbhSemIrcantec;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero ordre.
     *
     * @var int
     */
    private $numeroOrdre;

    /**
     * Plaf ircantec.
     *
     * @var float
     */
    private $plafIrcantec;

    /**
     * Qualif unite temps.
     *
     * @var string
     */
    private $qualifUniteTemps;

    /**
     * Suppl fam.
     *
     * @var float
     */
    private $supplFam;

    /**
     * Taxe apprentissage_ base.
     *
     * @var float
     */
    private $taxeApprentissage_Base;

    /**
     * Taxe salaire.
     *
     * @var float
     */
    private $taxeSalaire;

    /**
     * Tr a ircantec.
     *
     * @var float
     */
    private $trAIrcantec;

    /**
     * Tr b ircantec.
     *
     * @var float
     */
    private $trBIrcantec;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ancienn btp.
     *
     * @return DateTime Returns the ancienn btp.
     */
    public function getAnciennBtp() {
        return $this->anciennBtp;
    }

    /**
     * Get the annee somme isol.
     *
     * @return string Returns the annee somme isol.
     */
    public function getAnneeSommeIsol() {
        return $this->anneeSommeIsol;
    }

    /**
     * Get the annee somme isol2.
     *
     * @return string Returns the annee somme isol2.
     */
    public function getAnneeSommeIsol2() {
        return $this->anneeSommeIsol2;
    }

    /**
     * Get the annee somme isol3.
     *
     * @return string Returns the annee somme isol3.
     */
    public function getAnneeSommeIsol3() {
        return $this->anneeSommeIsol3;
    }

    /**
     * Get the annee somme isol4.
     *
     * @return string Returns the annee somme isol4.
     */
    public function getAnneeSommeIsol4() {
        return $this->anneeSommeIsol4;
    }

    /**
     * Get the annee somme isol5.
     *
     * @return string Returns the annee somme isol5.
     */
    public function getAnneeSommeIsol5() {
        return $this->anneeSommeIsol5;
    }

    /**
     * Get the b t p sal moyen.
     *
     * @return float Returns the b t p sal moyen.
     */
    public function getBTPSalMoyen() {
        return $this->bTPSalMoyen;
    }

    /**
     * Get the base brute c p b t p.
     *
     * @return float Returns the base brute c p b t p.
     */
    public function getBaseBruteCPBTP() {
        return $this->baseBruteCPBTP;
    }

    /**
     * Get the base brute cot c c p b t p.
     *
     * @return float Returns the base brute cot c c p b t p.
     */
    public function getBaseBruteCotCCPBTP() {
        return $this->baseBruteCotCCPBTP;
    }

    /**
     * Get the base brute cot o p p b t p.
     *
     * @return float Returns the base brute cot o p p b t p.
     */
    public function getBaseBruteCotOPPBTP() {
        return $this->baseBruteCotOPPBTP;
    }

    /**
     * Get the benef assedic.
     *
     * @return string Returns the benef assedic.
     */
    public function getBenefAssedic() {
        return $this->benefAssedic;
    }

    /**
     * Get the brut ircantec.
     *
     * @return float Returns the brut ircantec.
     */
    public function getBrutIrcantec() {
        return $this->brutIrcantec;
    }

    /**
     * Get the code class b t p.
     *
     * @return string Returns the code class b t p.
     */
    public function getCodeClassBTP() {
        return $this->codeClassBTP;
    }

    /**
     * Get the code duree trav.
     *
     * @return string Returns the code duree trav.
     */
    public function getCodeDureeTrav() {
        return $this->codeDureeTrav;
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
     * Get the code lib b plaf.
     *
     * @return string Returns the code lib b plaf.
     */
    public function getCodeLibBPlaf() {
        return $this->codeLibBPlaf;
    }

    /**
     * Get the code lib b plaf2.
     *
     * @return string Returns the code lib b plaf2.
     */
    public function getCodeLibBPlaf2() {
        return $this->codeLibBPlaf2;
    }

    /**
     * Get the code lib b plaf3.
     *
     * @return string Returns the code lib b plaf3.
     */
    public function getCodeLibBPlaf3() {
        return $this->codeLibBPlaf3;
    }

    /**
     * Get the code lib b plaf4.
     *
     * @return string Returns the code lib b plaf4.
     */
    public function getCodeLibBPlaf4() {
        return $this->codeLibBPlaf4;
    }

    /**
     * Get the code lib b plaf5.
     *
     * @return string Returns the code lib b plaf5.
     */
    public function getCodeLibBPlaf5() {
        return $this->codeLibBPlaf5;
    }

    /**
     * Get the code lib brut.
     *
     * @return string Returns the code lib brut.
     */
    public function getCodeLibBrut() {
        return $this->codeLibBrut;
    }

    /**
     * Get the code lib brut2.
     *
     * @return string Returns the code lib brut2.
     */
    public function getCodeLibBrut2() {
        return $this->codeLibBrut2;
    }

    /**
     * Get the code lib brut3.
     *
     * @return string Returns the code lib brut3.
     */
    public function getCodeLibBrut3() {
        return $this->codeLibBrut3;
    }

    /**
     * Get the code lib brut4.
     *
     * @return string Returns the code lib brut4.
     */
    public function getCodeLibBrut4() {
        return $this->codeLibBrut4;
    }

    /**
     * Get the code lib brut5.
     *
     * @return string Returns the code lib brut5.
     */
    public function getCodeLibBrut5() {
        return $this->codeLibBrut5;
    }

    /**
     * Get the code lib c s g.
     *
     * @return string Returns the code lib c s g.
     */
    public function getCodeLibCSG() {
        return $this->codeLibCSG;
    }

    /**
     * Get the code lib i r c1.
     *
     * @return string Returns the code lib i r c1.
     */
    public function getCodeLibIRC1() {
        return $this->codeLibIRC1;
    }

    /**
     * Get the code lib i r c2.
     *
     * @return string Returns the code lib i r c2.
     */
    public function getCodeLibIRC2() {
        return $this->codeLibIRC2;
    }

    /**
     * Get the code lib i r c3.
     *
     * @return string Returns the code lib i r c3.
     */
    public function getCodeLibIRC3() {
        return $this->codeLibIRC3;
    }

    /**
     * Get the code lib somme.
     *
     * @return string Returns the code lib somme.
     */
    public function getCodeLibSomme() {
        return $this->codeLibSomme;
    }

    /**
     * Get the code lib somme2.
     *
     * @return string Returns the code lib somme2.
     */
    public function getCodeLibSomme2() {
        return $this->codeLibSomme2;
    }

    /**
     * Get the code lib somme3.
     *
     * @return string Returns the code lib somme3.
     */
    public function getCodeLibSomme3() {
        return $this->codeLibSomme3;
    }

    /**
     * Get the code lib somme4.
     *
     * @return string Returns the code lib somme4.
     */
    public function getCodeLibSomme4() {
        return $this->codeLibSomme4;
    }

    /**
     * Get the code lib somme5.
     *
     * @return string Returns the code lib somme5.
     */
    public function getCodeLibSomme5() {
        return $this->codeLibSomme5;
    }

    /**
     * Get the code metier b t p.
     *
     * @return string Returns the code metier b t p.
     */
    public function getCodeMetierBTP() {
        return $this->codeMetierBTP;
    }

    /**
     * Get the code type b plaf.
     *
     * @return string Returns the code type b plaf.
     */
    public function getCodeTypeBPlaf() {
        return $this->codeTypeBPlaf;
    }

    /**
     * Get the code type b plaf2.
     *
     * @return string Returns the code type b plaf2.
     */
    public function getCodeTypeBPlaf2() {
        return $this->codeTypeBPlaf2;
    }

    /**
     * Get the code type b plaf3.
     *
     * @return string Returns the code type b plaf3.
     */
    public function getCodeTypeBPlaf3() {
        return $this->codeTypeBPlaf3;
    }

    /**
     * Get the code type b plaf4.
     *
     * @return string Returns the code type b plaf4.
     */
    public function getCodeTypeBPlaf4() {
        return $this->codeTypeBPlaf4;
    }

    /**
     * Get the code type b plaf5.
     *
     * @return string Returns the code type b plaf5.
     */
    public function getCodeTypeBPlaf5() {
        return $this->codeTypeBPlaf5;
    }

    /**
     * Get the code type brut.
     *
     * @return string Returns the code type brut.
     */
    public function getCodeTypeBrut() {
        return $this->codeTypeBrut;
    }

    /**
     * Get the code type brut2.
     *
     * @return string Returns the code type brut2.
     */
    public function getCodeTypeBrut2() {
        return $this->codeTypeBrut2;
    }

    /**
     * Get the code type brut3.
     *
     * @return string Returns the code type brut3.
     */
    public function getCodeTypeBrut3() {
        return $this->codeTypeBrut3;
    }

    /**
     * Get the code type brut4.
     *
     * @return string Returns the code type brut4.
     */
    public function getCodeTypeBrut4() {
        return $this->codeTypeBrut4;
    }

    /**
     * Get the code type brut5.
     *
     * @return string Returns the code type brut5.
     */
    public function getCodeTypeBrut5() {
        return $this->codeTypeBrut5;
    }

    /**
     * Get the code type somme.
     *
     * @return string Returns the code type somme.
     */
    public function getCodeTypeSomme() {
        return $this->codeTypeSomme;
    }

    /**
     * Get the code type somme2.
     *
     * @return string Returns the code type somme2.
     */
    public function getCodeTypeSomme2() {
        return $this->codeTypeSomme2;
    }

    /**
     * Get the code type somme3.
     *
     * @return string Returns the code type somme3.
     */
    public function getCodeTypeSomme3() {
        return $this->codeTypeSomme3;
    }

    /**
     * Get the code type somme4.
     *
     * @return string Returns the code type somme4.
     */
    public function getCodeTypeSomme4() {
        return $this->codeTypeSomme4;
    }

    /**
     * Get the code type somme5.
     *
     * @return string Returns the code type somme5.
     */
    public function getCodeTypeSomme5() {
        return $this->codeTypeSomme5;
    }

    /**
     * Get the csg specif.
     *
     * @return float Returns the csg specif.
     */
    public function getCsgSpecif() {
        return $this->csgSpecif;
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
     * Get the exo h_ code1.
     *
     * @return string Returns the exo h_ code1.
     */
    public function getExoH_Code1() {
        return $this->exoH_Code1;
    }

    /**
     * Get the exo h_ code2.
     *
     * @return string Returns the exo h_ code2.
     */
    public function getExoH_Code2() {
        return $this->exoH_Code2;
    }

    /**
     * Get the exo h_ code3.
     *
     * @return string Returns the exo h_ code3.
     */
    public function getExoH_Code3() {
        return $this->exoH_Code3;
    }

    /**
     * Get the exo h_ code4.
     *
     * @return string Returns the exo h_ code4.
     */
    public function getExoH_Code4() {
        return $this->exoH_Code4;
    }

    /**
     * Get the exo h_ code5.
     *
     * @return string Returns the exo h_ code5.
     */
    public function getExoH_Code5() {
        return $this->exoH_Code5;
    }

    /**
     * Get the exo h_ mnt1.
     *
     * @return float Returns the exo h_ mnt1.
     */
    public function getExoH_Mnt1() {
        return $this->exoH_Mnt1;
    }

    /**
     * Get the exo h_ mnt2.
     *
     * @return float Returns the exo h_ mnt2.
     */
    public function getExoH_Mnt2() {
        return $this->exoH_Mnt2;
    }

    /**
     * Get the exo h_ mnt3.
     *
     * @return float Returns the exo h_ mnt3.
     */
    public function getExoH_Mnt3() {
        return $this->exoH_Mnt3;
    }

    /**
     * Get the exo h_ mnt4.
     *
     * @return float Returns the exo h_ mnt4.
     */
    public function getExoH_Mnt4() {
        return $this->exoH_Mnt4;
    }

    /**
     * Get the exo h_ mnt5.
     *
     * @return float Returns the exo h_ mnt5.
     */
    public function getExoH_Mnt5() {
        return $this->exoH_Mnt5;
    }

    /**
     * Get the exo h_ mnt deduc cot pat1.
     *
     * @return float Returns the exo h_ mnt deduc cot pat1.
     */
    public function getExoH_MntDeducCotPat1() {
        return $this->exoH_MntDeducCotPat1;
    }

    /**
     * Get the exo h_ mnt deduc cot pat2.
     *
     * @return float Returns the exo h_ mnt deduc cot pat2.
     */
    public function getExoH_MntDeducCotPat2() {
        return $this->exoH_MntDeducCotPat2;
    }

    /**
     * Get the exo h_ mnt deduc cot pat3.
     *
     * @return float Returns the exo h_ mnt deduc cot pat3.
     */
    public function getExoH_MntDeducCotPat3() {
        return $this->exoH_MntDeducCotPat3;
    }

    /**
     * Get the exo h_ mnt deduc cot pat4.
     *
     * @return float Returns the exo h_ mnt deduc cot pat4.
     */
    public function getExoH_MntDeducCotPat4() {
        return $this->exoH_MntDeducCotPat4;
    }

    /**
     * Get the exo h_ mnt deduc cot pat5.
     *
     * @return float Returns the exo h_ mnt deduc cot pat5.
     */
    public function getExoH_MntDeducCotPat5() {
        return $this->exoH_MntDeducCotPat5;
    }

    /**
     * Get the exo h_ mnt deduc cot pat tot.
     *
     * @return float Returns the exo h_ mnt deduc cot pat tot.
     */
    public function getExoH_MntDeducCotPatTot() {
        return $this->exoH_MntDeducCotPatTot;
    }

    /**
     * Get the exo h_ mnt reduc cot sal1.
     *
     * @return float Returns the exo h_ mnt reduc cot sal1.
     */
    public function getExoH_MntReducCotSal1() {
        return $this->exoH_MntReducCotSal1;
    }

    /**
     * Get the exo h_ mnt reduc cot sal2.
     *
     * @return float Returns the exo h_ mnt reduc cot sal2.
     */
    public function getExoH_MntReducCotSal2() {
        return $this->exoH_MntReducCotSal2;
    }

    /**
     * Get the exo h_ mnt reduc cot sal3.
     *
     * @return float Returns the exo h_ mnt reduc cot sal3.
     */
    public function getExoH_MntReducCotSal3() {
        return $this->exoH_MntReducCotSal3;
    }

    /**
     * Get the exo h_ mnt reduc cot sal4.
     *
     * @return float Returns the exo h_ mnt reduc cot sal4.
     */
    public function getExoH_MntReducCotSal4() {
        return $this->exoH_MntReducCotSal4;
    }

    /**
     * Get the exo h_ mnt reduc cot sal5.
     *
     * @return float Returns the exo h_ mnt reduc cot sal5.
     */
    public function getExoH_MntReducCotSal5() {
        return $this->exoH_MntReducCotSal5;
    }

    /**
     * Get the exo h_ mnt reduc cot sal tot.
     *
     * @return float Returns the exo h_ mnt reduc cot sal tot.
     */
    public function getExoH_MntReducCotSalTot() {
        return $this->exoH_MntReducCotSalTot;
    }

    /**
     * Get the exo h_ nb h j1.
     *
     * @return float Returns the exo h_ nb h j1.
     */
    public function getExoH_NbHJ1() {
        return $this->exoH_NbHJ1;
    }

    /**
     * Get the exo h_ nb h j2.
     *
     * @return float Returns the exo h_ nb h j2.
     */
    public function getExoH_NbHJ2() {
        return $this->exoH_NbHJ2;
    }

    /**
     * Get the exo h_ nb h j3.
     *
     * @return float Returns the exo h_ nb h j3.
     */
    public function getExoH_NbHJ3() {
        return $this->exoH_NbHJ3;
    }

    /**
     * Get the exo h_ nb h j4.
     *
     * @return float Returns the exo h_ nb h j4.
     */
    public function getExoH_NbHJ4() {
        return $this->exoH_NbHJ4;
    }

    /**
     * Get the exo h_ nb h j5.
     *
     * @return float Returns the exo h_ nb h j5.
     */
    public function getExoH_NbHJ5() {
        return $this->exoH_NbHJ5;
    }

    /**
     * Get the forma pro_ base.
     *
     * @return float Returns the forma pro_ base.
     */
    public function getFormaPro_Base() {
        return $this->formaPro_Base;
    }

    /**
     * Get the forma pro_ base c d d.
     *
     * @return float Returns the forma pro_ base c d d.
     */
    public function getFormaPro_BaseCDD() {
        return $this->formaPro_BaseCDD;
    }

    /**
     * Get the ind cp.
     *
     * @return float Returns the ind cp.
     */
    public function getIndCp() {
        return $this->indCp;
    }

    /**
     * Get the ind intemp.
     *
     * @return float Returns the ind intemp.
     */
    public function getIndIntemp() {
        return $this->indIntemp;
    }

    /**
     * Get the montant b plaf.
     *
     * @return float Returns the montant b plaf.
     */
    public function getMontantBPlaf() {
        return $this->montantBPlaf;
    }

    /**
     * Get the montant b plaf2.
     *
     * @return float Returns the montant b plaf2.
     */
    public function getMontantBPlaf2() {
        return $this->montantBPlaf2;
    }

    /**
     * Get the montant b plaf3.
     *
     * @return float Returns the montant b plaf3.
     */
    public function getMontantBPlaf3() {
        return $this->montantBPlaf3;
    }

    /**
     * Get the montant b plaf4.
     *
     * @return float Returns the montant b plaf4.
     */
    public function getMontantBPlaf4() {
        return $this->montantBPlaf4;
    }

    /**
     * Get the montant b plaf5.
     *
     * @return float Returns the montant b plaf5.
     */
    public function getMontantBPlaf5() {
        return $this->montantBPlaf5;
    }

    /**
     * Get the montant brut.
     *
     * @return float Returns the montant brut.
     */
    public function getMontantBrut() {
        return $this->montantBrut;
    }

    /**
     * Get the montant brut2.
     *
     * @return float Returns the montant brut2.
     */
    public function getMontantBrut2() {
        return $this->montantBrut2;
    }

    /**
     * Get the montant brut3.
     *
     * @return float Returns the montant brut3.
     */
    public function getMontantBrut3() {
        return $this->montantBrut3;
    }

    /**
     * Get the montant brut4.
     *
     * @return float Returns the montant brut4.
     */
    public function getMontantBrut4() {
        return $this->montantBrut4;
    }

    /**
     * Get the montant brut5.
     *
     * @return float Returns the montant brut5.
     */
    public function getMontantBrut5() {
        return $this->montantBrut5;
    }

    /**
     * Get the montant somme isol brut.
     *
     * @return float Returns the montant somme isol brut.
     */
    public function getMontantSommeIsolBrut() {
        return $this->montantSommeIsolBrut;
    }

    /**
     * Get the montant somme isol brut2.
     *
     * @return float Returns the montant somme isol brut2.
     */
    public function getMontantSommeIsolBrut2() {
        return $this->montantSommeIsolBrut2;
    }

    /**
     * Get the montant somme isol brut3.
     *
     * @return float Returns the montant somme isol brut3.
     */
    public function getMontantSommeIsolBrut3() {
        return $this->montantSommeIsolBrut3;
    }

    /**
     * Get the montant somme isol brut4.
     *
     * @return float Returns the montant somme isol brut4.
     */
    public function getMontantSommeIsolBrut4() {
        return $this->montantSommeIsolBrut4;
    }

    /**
     * Get the montant somme isol brut5.
     *
     * @return float Returns the montant somme isol brut5.
     */
    public function getMontantSommeIsolBrut5() {
        return $this->montantSommeIsolBrut5;
    }

    /**
     * Get the montant somme isol plaf.
     *
     * @return float Returns the montant somme isol plaf.
     */
    public function getMontantSommeIsolPlaf() {
        return $this->montantSommeIsolPlaf;
    }

    /**
     * Get the montant somme isol plaf2.
     *
     * @return float Returns the montant somme isol plaf2.
     */
    public function getMontantSommeIsolPlaf2() {
        return $this->montantSommeIsolPlaf2;
    }

    /**
     * Get the montant somme isol plaf3.
     *
     * @return float Returns the montant somme isol plaf3.
     */
    public function getMontantSommeIsolPlaf3() {
        return $this->montantSommeIsolPlaf3;
    }

    /**
     * Get the montant somme isol plaf4.
     *
     * @return float Returns the montant somme isol plaf4.
     */
    public function getMontantSommeIsolPlaf4() {
        return $this->montantSommeIsolPlaf4;
    }

    /**
     * Get the montant somme isol plaf5.
     *
     * @return float Returns the montant somme isol plaf5.
     */
    public function getMontantSommeIsolPlaf5() {
        return $this->montantSommeIsolPlaf5;
    }

    /**
     * Get the mt j rtt2007.
     *
     * @return float Returns the mt j rtt2007.
     */
    public function getMtJRtt2007() {
        return $this->mtJRtt2007;
    }

    /**
     * Get the nb j rtt2007.
     *
     * @return float Returns the nb j rtt2007.
     */
    public function getNbJRtt2007() {
        return $this->nbJRtt2007;
    }

    /**
     * Get the nb periode.
     *
     * @return float Returns the nb periode.
     */
    public function getNbPeriode() {
        return $this->nbPeriode;
    }

    /**
     * Get the nbh chom partiel.
     *
     * @return float Returns the nbh chom partiel.
     */
    public function getNbhChomPartiel() {
        return $this->nbhChomPartiel;
    }

    /**
     * Get the nbh sem ircantec.
     *
     * @return float Returns the nbh sem ircantec.
     */
    public function getNbhSemIrcantec() {
        return $this->nbhSemIrcantec;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero ordre.
     *
     * @return int Returns the numero ordre.
     */
    public function getNumeroOrdre() {
        return $this->numeroOrdre;
    }

    /**
     * Get the plaf ircantec.
     *
     * @return float Returns the plaf ircantec.
     */
    public function getPlafIrcantec() {
        return $this->plafIrcantec;
    }

    /**
     * Get the qualif unite temps.
     *
     * @return string Returns the qualif unite temps.
     */
    public function getQualifUniteTemps() {
        return $this->qualifUniteTemps;
    }

    /**
     * Get the suppl fam.
     *
     * @return float Returns the suppl fam.
     */
    public function getSupplFam() {
        return $this->supplFam;
    }

    /**
     * Get the taxe apprentissage_ base.
     *
     * @return float Returns the taxe apprentissage_ base.
     */
    public function getTaxeApprentissage_Base() {
        return $this->taxeApprentissage_Base;
    }

    /**
     * Get the taxe salaire.
     *
     * @return float Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
    }

    /**
     * Get the tr a ircantec.
     *
     * @return float Returns the tr a ircantec.
     */
    public function getTrAIrcantec() {
        return $this->trAIrcantec;
    }

    /**
     * Get the tr b ircantec.
     *
     * @return float Returns the tr b ircantec.
     */
    public function getTrBIrcantec() {
        return $this->trBIrcantec;
    }

    /**
     * Set the ancienn btp.
     *
     * @param DateTime $anciennBtp The ancienn btp.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnciennBtp(DateTime $anciennBtp = null) {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annee somme isol.
     *
     * @param string $anneeSommeIsol The annee somme isol.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnneeSommeIsol($anneeSommeIsol) {
        $this->anneeSommeIsol = $anneeSommeIsol;
        return $this;
    }

    /**
     * Set the annee somme isol2.
     *
     * @param string $anneeSommeIsol2 The annee somme isol2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnneeSommeIsol2($anneeSommeIsol2) {
        $this->anneeSommeIsol2 = $anneeSommeIsol2;
        return $this;
    }

    /**
     * Set the annee somme isol3.
     *
     * @param string $anneeSommeIsol3 The annee somme isol3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnneeSommeIsol3($anneeSommeIsol3) {
        $this->anneeSommeIsol3 = $anneeSommeIsol3;
        return $this;
    }

    /**
     * Set the annee somme isol4.
     *
     * @param string $anneeSommeIsol4 The annee somme isol4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnneeSommeIsol4($anneeSommeIsol4) {
        $this->anneeSommeIsol4 = $anneeSommeIsol4;
        return $this;
    }

    /**
     * Set the annee somme isol5.
     *
     * @param string $anneeSommeIsol5 The annee somme isol5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setAnneeSommeIsol5($anneeSommeIsol5) {
        $this->anneeSommeIsol5 = $anneeSommeIsol5;
        return $this;
    }

    /**
     * Set the b t p sal moyen.
     *
     * @param float $bTPSalMoyen The b t p sal moyen.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBTPSalMoyen($bTPSalMoyen) {
        $this->bTPSalMoyen = $bTPSalMoyen;
        return $this;
    }

    /**
     * Set the base brute c p b t p.
     *
     * @param float $baseBruteCPBTP The base brute c p b t p.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBaseBruteCPBTP($baseBruteCPBTP) {
        $this->baseBruteCPBTP = $baseBruteCPBTP;
        return $this;
    }

    /**
     * Set the base brute cot c c p b t p.
     *
     * @param float $baseBruteCotCCPBTP The base brute cot c c p b t p.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBaseBruteCotCCPBTP($baseBruteCotCCPBTP) {
        $this->baseBruteCotCCPBTP = $baseBruteCotCCPBTP;
        return $this;
    }

    /**
     * Set the base brute cot o p p b t p.
     *
     * @param float $baseBruteCotOPPBTP The base brute cot o p p b t p.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBaseBruteCotOPPBTP($baseBruteCotOPPBTP) {
        $this->baseBruteCotOPPBTP = $baseBruteCotOPPBTP;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string $benefAssedic The benef assedic.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBenefAssedic($benefAssedic) {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the brut ircantec.
     *
     * @param float $brutIrcantec The brut ircantec.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setBrutIrcantec($brutIrcantec) {
        $this->brutIrcantec = $brutIrcantec;
        return $this;
    }

    /**
     * Set the code class b t p.
     *
     * @param string $codeClassBTP The code class b t p.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeClassBTP($codeClassBTP) {
        $this->codeClassBTP = $codeClassBTP;
        return $this;
    }

    /**
     * Set the code duree trav.
     *
     * @param string $codeDureeTrav The code duree trav.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeDureeTrav($codeDureeTrav) {
        $this->codeDureeTrav = $codeDureeTrav;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code lib b plaf.
     *
     * @param string $codeLibBPlaf The code lib b plaf.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBPlaf($codeLibBPlaf) {
        $this->codeLibBPlaf = $codeLibBPlaf;
        return $this;
    }

    /**
     * Set the code lib b plaf2.
     *
     * @param string $codeLibBPlaf2 The code lib b plaf2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBPlaf2($codeLibBPlaf2) {
        $this->codeLibBPlaf2 = $codeLibBPlaf2;
        return $this;
    }

    /**
     * Set the code lib b plaf3.
     *
     * @param string $codeLibBPlaf3 The code lib b plaf3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBPlaf3($codeLibBPlaf3) {
        $this->codeLibBPlaf3 = $codeLibBPlaf3;
        return $this;
    }

    /**
     * Set the code lib b plaf4.
     *
     * @param string $codeLibBPlaf4 The code lib b plaf4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBPlaf4($codeLibBPlaf4) {
        $this->codeLibBPlaf4 = $codeLibBPlaf4;
        return $this;
    }

    /**
     * Set the code lib b plaf5.
     *
     * @param string $codeLibBPlaf5 The code lib b plaf5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBPlaf5($codeLibBPlaf5) {
        $this->codeLibBPlaf5 = $codeLibBPlaf5;
        return $this;
    }

    /**
     * Set the code lib brut.
     *
     * @param string $codeLibBrut The code lib brut.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBrut($codeLibBrut) {
        $this->codeLibBrut = $codeLibBrut;
        return $this;
    }

    /**
     * Set the code lib brut2.
     *
     * @param string $codeLibBrut2 The code lib brut2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBrut2($codeLibBrut2) {
        $this->codeLibBrut2 = $codeLibBrut2;
        return $this;
    }

    /**
     * Set the code lib brut3.
     *
     * @param string $codeLibBrut3 The code lib brut3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBrut3($codeLibBrut3) {
        $this->codeLibBrut3 = $codeLibBrut3;
        return $this;
    }

    /**
     * Set the code lib brut4.
     *
     * @param string $codeLibBrut4 The code lib brut4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBrut4($codeLibBrut4) {
        $this->codeLibBrut4 = $codeLibBrut4;
        return $this;
    }

    /**
     * Set the code lib brut5.
     *
     * @param string $codeLibBrut5 The code lib brut5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibBrut5($codeLibBrut5) {
        $this->codeLibBrut5 = $codeLibBrut5;
        return $this;
    }

    /**
     * Set the code lib c s g.
     *
     * @param string $codeLibCSG The code lib c s g.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibCSG($codeLibCSG) {
        $this->codeLibCSG = $codeLibCSG;
        return $this;
    }

    /**
     * Set the code lib i r c1.
     *
     * @param string $codeLibIRC1 The code lib i r c1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibIRC1($codeLibIRC1) {
        $this->codeLibIRC1 = $codeLibIRC1;
        return $this;
    }

    /**
     * Set the code lib i r c2.
     *
     * @param string $codeLibIRC2 The code lib i r c2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibIRC2($codeLibIRC2) {
        $this->codeLibIRC2 = $codeLibIRC2;
        return $this;
    }

    /**
     * Set the code lib i r c3.
     *
     * @param string $codeLibIRC3 The code lib i r c3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibIRC3($codeLibIRC3) {
        $this->codeLibIRC3 = $codeLibIRC3;
        return $this;
    }

    /**
     * Set the code lib somme.
     *
     * @param string $codeLibSomme The code lib somme.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibSomme($codeLibSomme) {
        $this->codeLibSomme = $codeLibSomme;
        return $this;
    }

    /**
     * Set the code lib somme2.
     *
     * @param string $codeLibSomme2 The code lib somme2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibSomme2($codeLibSomme2) {
        $this->codeLibSomme2 = $codeLibSomme2;
        return $this;
    }

    /**
     * Set the code lib somme3.
     *
     * @param string $codeLibSomme3 The code lib somme3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibSomme3($codeLibSomme3) {
        $this->codeLibSomme3 = $codeLibSomme3;
        return $this;
    }

    /**
     * Set the code lib somme4.
     *
     * @param string $codeLibSomme4 The code lib somme4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibSomme4($codeLibSomme4) {
        $this->codeLibSomme4 = $codeLibSomme4;
        return $this;
    }

    /**
     * Set the code lib somme5.
     *
     * @param string $codeLibSomme5 The code lib somme5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeLibSomme5($codeLibSomme5) {
        $this->codeLibSomme5 = $codeLibSomme5;
        return $this;
    }

    /**
     * Set the code metier b t p.
     *
     * @param string $codeMetierBTP The code metier b t p.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeMetierBTP($codeMetierBTP) {
        $this->codeMetierBTP = $codeMetierBTP;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string $codeTypeBPlaf The code type b plaf.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBPlaf($codeTypeBPlaf) {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
        return $this;
    }

    /**
     * Set the code type b plaf2.
     *
     * @param string $codeTypeBPlaf2 The code type b plaf2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBPlaf2($codeTypeBPlaf2) {
        $this->codeTypeBPlaf2 = $codeTypeBPlaf2;
        return $this;
    }

    /**
     * Set the code type b plaf3.
     *
     * @param string $codeTypeBPlaf3 The code type b plaf3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBPlaf3($codeTypeBPlaf3) {
        $this->codeTypeBPlaf3 = $codeTypeBPlaf3;
        return $this;
    }

    /**
     * Set the code type b plaf4.
     *
     * @param string $codeTypeBPlaf4 The code type b plaf4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBPlaf4($codeTypeBPlaf4) {
        $this->codeTypeBPlaf4 = $codeTypeBPlaf4;
        return $this;
    }

    /**
     * Set the code type b plaf5.
     *
     * @param string $codeTypeBPlaf5 The code type b plaf5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBPlaf5($codeTypeBPlaf5) {
        $this->codeTypeBPlaf5 = $codeTypeBPlaf5;
        return $this;
    }

    /**
     * Set the code type brut.
     *
     * @param string $codeTypeBrut The code type brut.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBrut($codeTypeBrut) {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type brut2.
     *
     * @param string $codeTypeBrut2 The code type brut2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBrut2($codeTypeBrut2) {
        $this->codeTypeBrut2 = $codeTypeBrut2;
        return $this;
    }

    /**
     * Set the code type brut3.
     *
     * @param string $codeTypeBrut3 The code type brut3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBrut3($codeTypeBrut3) {
        $this->codeTypeBrut3 = $codeTypeBrut3;
        return $this;
    }

    /**
     * Set the code type brut4.
     *
     * @param string $codeTypeBrut4 The code type brut4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBrut4($codeTypeBrut4) {
        $this->codeTypeBrut4 = $codeTypeBrut4;
        return $this;
    }

    /**
     * Set the code type brut5.
     *
     * @param string $codeTypeBrut5 The code type brut5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeBrut5($codeTypeBrut5) {
        $this->codeTypeBrut5 = $codeTypeBrut5;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string $codeTypeSomme The code type somme.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeSomme($codeTypeSomme) {
        $this->codeTypeSomme = $codeTypeSomme;
        return $this;
    }

    /**
     * Set the code type somme2.
     *
     * @param string $codeTypeSomme2 The code type somme2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeSomme2($codeTypeSomme2) {
        $this->codeTypeSomme2 = $codeTypeSomme2;
        return $this;
    }

    /**
     * Set the code type somme3.
     *
     * @param string $codeTypeSomme3 The code type somme3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeSomme3($codeTypeSomme3) {
        $this->codeTypeSomme3 = $codeTypeSomme3;
        return $this;
    }

    /**
     * Set the code type somme4.
     *
     * @param string $codeTypeSomme4 The code type somme4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeSomme4($codeTypeSomme4) {
        $this->codeTypeSomme4 = $codeTypeSomme4;
        return $this;
    }

    /**
     * Set the code type somme5.
     *
     * @param string $codeTypeSomme5 The code type somme5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCodeTypeSomme5($codeTypeSomme5) {
        $this->codeTypeSomme5 = $codeTypeSomme5;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float $csgSpecif The csg specif.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setCsgSpecif($csgSpecif) {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float $dureeTrav The duree trav.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setDureeTrav($dureeTrav) {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the exo h_ code1.
     *
     * @param string $exoH_Code1 The exo h_ code1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Code1($exoH_Code1) {
        $this->exoH_Code1 = $exoH_Code1;
        return $this;
    }

    /**
     * Set the exo h_ code2.
     *
     * @param string $exoH_Code2 The exo h_ code2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Code2($exoH_Code2) {
        $this->exoH_Code2 = $exoH_Code2;
        return $this;
    }

    /**
     * Set the exo h_ code3.
     *
     * @param string $exoH_Code3 The exo h_ code3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Code3($exoH_Code3) {
        $this->exoH_Code3 = $exoH_Code3;
        return $this;
    }

    /**
     * Set the exo h_ code4.
     *
     * @param string $exoH_Code4 The exo h_ code4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Code4($exoH_Code4) {
        $this->exoH_Code4 = $exoH_Code4;
        return $this;
    }

    /**
     * Set the exo h_ code5.
     *
     * @param string $exoH_Code5 The exo h_ code5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Code5($exoH_Code5) {
        $this->exoH_Code5 = $exoH_Code5;
        return $this;
    }

    /**
     * Set the exo h_ mnt1.
     *
     * @param float $exoH_Mnt1 The exo h_ mnt1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Mnt1($exoH_Mnt1) {
        $this->exoH_Mnt1 = $exoH_Mnt1;
        return $this;
    }

    /**
     * Set the exo h_ mnt2.
     *
     * @param float $exoH_Mnt2 The exo h_ mnt2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Mnt2($exoH_Mnt2) {
        $this->exoH_Mnt2 = $exoH_Mnt2;
        return $this;
    }

    /**
     * Set the exo h_ mnt3.
     *
     * @param float $exoH_Mnt3 The exo h_ mnt3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Mnt3($exoH_Mnt3) {
        $this->exoH_Mnt3 = $exoH_Mnt3;
        return $this;
    }

    /**
     * Set the exo h_ mnt4.
     *
     * @param float $exoH_Mnt4 The exo h_ mnt4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Mnt4($exoH_Mnt4) {
        $this->exoH_Mnt4 = $exoH_Mnt4;
        return $this;
    }

    /**
     * Set the exo h_ mnt5.
     *
     * @param float $exoH_Mnt5 The exo h_ mnt5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_Mnt5($exoH_Mnt5) {
        $this->exoH_Mnt5 = $exoH_Mnt5;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat1.
     *
     * @param float $exoH_MntDeducCotPat1 The exo h_ mnt deduc cot pat1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPat1($exoH_MntDeducCotPat1) {
        $this->exoH_MntDeducCotPat1 = $exoH_MntDeducCotPat1;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat2.
     *
     * @param float $exoH_MntDeducCotPat2 The exo h_ mnt deduc cot pat2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPat2($exoH_MntDeducCotPat2) {
        $this->exoH_MntDeducCotPat2 = $exoH_MntDeducCotPat2;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat3.
     *
     * @param float $exoH_MntDeducCotPat3 The exo h_ mnt deduc cot pat3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPat3($exoH_MntDeducCotPat3) {
        $this->exoH_MntDeducCotPat3 = $exoH_MntDeducCotPat3;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat4.
     *
     * @param float $exoH_MntDeducCotPat4 The exo h_ mnt deduc cot pat4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPat4($exoH_MntDeducCotPat4) {
        $this->exoH_MntDeducCotPat4 = $exoH_MntDeducCotPat4;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat5.
     *
     * @param float $exoH_MntDeducCotPat5 The exo h_ mnt deduc cot pat5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPat5($exoH_MntDeducCotPat5) {
        $this->exoH_MntDeducCotPat5 = $exoH_MntDeducCotPat5;
        return $this;
    }

    /**
     * Set the exo h_ mnt deduc cot pat tot.
     *
     * @param float $exoH_MntDeducCotPatTot The exo h_ mnt deduc cot pat tot.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntDeducCotPatTot($exoH_MntDeducCotPatTot) {
        $this->exoH_MntDeducCotPatTot = $exoH_MntDeducCotPatTot;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal1.
     *
     * @param float $exoH_MntReducCotSal1 The exo h_ mnt reduc cot sal1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSal1($exoH_MntReducCotSal1) {
        $this->exoH_MntReducCotSal1 = $exoH_MntReducCotSal1;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal2.
     *
     * @param float $exoH_MntReducCotSal2 The exo h_ mnt reduc cot sal2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSal2($exoH_MntReducCotSal2) {
        $this->exoH_MntReducCotSal2 = $exoH_MntReducCotSal2;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal3.
     *
     * @param float $exoH_MntReducCotSal3 The exo h_ mnt reduc cot sal3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSal3($exoH_MntReducCotSal3) {
        $this->exoH_MntReducCotSal3 = $exoH_MntReducCotSal3;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal4.
     *
     * @param float $exoH_MntReducCotSal4 The exo h_ mnt reduc cot sal4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSal4($exoH_MntReducCotSal4) {
        $this->exoH_MntReducCotSal4 = $exoH_MntReducCotSal4;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal5.
     *
     * @param float $exoH_MntReducCotSal5 The exo h_ mnt reduc cot sal5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSal5($exoH_MntReducCotSal5) {
        $this->exoH_MntReducCotSal5 = $exoH_MntReducCotSal5;
        return $this;
    }

    /**
     * Set the exo h_ mnt reduc cot sal tot.
     *
     * @param float $exoH_MntReducCotSalTot The exo h_ mnt reduc cot sal tot.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_MntReducCotSalTot($exoH_MntReducCotSalTot) {
        $this->exoH_MntReducCotSalTot = $exoH_MntReducCotSalTot;
        return $this;
    }

    /**
     * Set the exo h_ nb h j1.
     *
     * @param float $exoH_NbHJ1 The exo h_ nb h j1.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_NbHJ1($exoH_NbHJ1) {
        $this->exoH_NbHJ1 = $exoH_NbHJ1;
        return $this;
    }

    /**
     * Set the exo h_ nb h j2.
     *
     * @param float $exoH_NbHJ2 The exo h_ nb h j2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_NbHJ2($exoH_NbHJ2) {
        $this->exoH_NbHJ2 = $exoH_NbHJ2;
        return $this;
    }

    /**
     * Set the exo h_ nb h j3.
     *
     * @param float $exoH_NbHJ3 The exo h_ nb h j3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_NbHJ3($exoH_NbHJ3) {
        $this->exoH_NbHJ3 = $exoH_NbHJ3;
        return $this;
    }

    /**
     * Set the exo h_ nb h j4.
     *
     * @param float $exoH_NbHJ4 The exo h_ nb h j4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_NbHJ4($exoH_NbHJ4) {
        $this->exoH_NbHJ4 = $exoH_NbHJ4;
        return $this;
    }

    /**
     * Set the exo h_ nb h j5.
     *
     * @param float $exoH_NbHJ5 The exo h_ nb h j5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setExoH_NbHJ5($exoH_NbHJ5) {
        $this->exoH_NbHJ5 = $exoH_NbHJ5;
        return $this;
    }

    /**
     * Set the forma pro_ base.
     *
     * @param float $formaPro_Base The forma pro_ base.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setFormaPro_Base($formaPro_Base) {
        $this->formaPro_Base = $formaPro_Base;
        return $this;
    }

    /**
     * Set the forma pro_ base c d d.
     *
     * @param float $formaPro_BaseCDD The forma pro_ base c d d.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setFormaPro_BaseCDD($formaPro_BaseCDD) {
        $this->formaPro_BaseCDD = $formaPro_BaseCDD;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float $indCp The ind cp.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setIndCp($indCp) {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the ind intemp.
     *
     * @param float $indIntemp The ind intemp.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setIndIntemp($indIntemp) {
        $this->indIntemp = $indIntemp;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float $montantBPlaf The montant b plaf.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBPlaf($montantBPlaf) {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float $montantBPlaf2 The montant b plaf2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBPlaf2($montantBPlaf2) {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float $montantBPlaf3 The montant b plaf3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBPlaf3($montantBPlaf3) {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float $montantBPlaf4 The montant b plaf4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBPlaf4($montantBPlaf4) {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float $montantBPlaf5 The montant b plaf5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBPlaf5($montantBPlaf5) {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float $montantBrut The montant brut.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBrut($montantBrut) {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float $montantBrut2 The montant brut2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBrut2($montantBrut2) {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float $montantBrut3 The montant brut3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBrut3($montantBrut3) {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float $montantBrut4 The montant brut4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBrut4($montantBrut4) {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float $montantBrut5 The montant brut5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantBrut5($montantBrut5) {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolBrut($montantSommeIsolBrut) {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolBrut2($montantSommeIsolBrut2) {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolBrut3($montantSommeIsolBrut3) {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolBrut4($montantSommeIsolBrut4) {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolBrut5($montantSommeIsolBrut5) {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolPlaf($montantSommeIsolPlaf) {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolPlaf2($montantSommeIsolPlaf2) {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolPlaf3($montantSommeIsolPlaf3) {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolPlaf4($montantSommeIsolPlaf4) {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMontantSommeIsolPlaf5($montantSommeIsolPlaf5) {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the mt j rtt2007.
     *
     * @param float $mtJRtt2007 The mt j rtt2007.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setMtJRtt2007($mtJRtt2007) {
        $this->mtJRtt2007 = $mtJRtt2007;
        return $this;
    }

    /**
     * Set the nb j rtt2007.
     *
     * @param float $nbJRtt2007 The nb j rtt2007.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNbJRtt2007($nbJRtt2007) {
        $this->nbJRtt2007 = $nbJRtt2007;
        return $this;
    }

    /**
     * Set the nb periode.
     *
     * @param float $nbPeriode The nb periode.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNbPeriode($nbPeriode) {
        $this->nbPeriode = $nbPeriode;
        return $this;
    }

    /**
     * Set the nbh chom partiel.
     *
     * @param float $nbhChomPartiel The nbh chom partiel.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNbhChomPartiel($nbhChomPartiel) {
        $this->nbhChomPartiel = $nbhChomPartiel;
        return $this;
    }

    /**
     * Set the nbh sem ircantec.
     *
     * @param float $nbhSemIrcantec The nbh sem ircantec.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNbhSemIrcantec($nbhSemIrcantec) {
        $this->nbhSemIrcantec = $nbhSemIrcantec;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the plaf ircantec.
     *
     * @param float $plafIrcantec The plaf ircantec.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setPlafIrcantec($plafIrcantec) {
        $this->plafIrcantec = $plafIrcantec;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string $qualifUniteTemps The qualif unite temps.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setQualifUniteTemps($qualifUniteTemps) {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float $supplFam The suppl fam.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setSupplFam($supplFam) {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the taxe apprentissage_ base.
     *
     * @param float $taxeApprentissage_Base The taxe apprentissage_ base.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setTaxeApprentissage_Base($taxeApprentissage_Base) {
        $this->taxeApprentissage_Base = $taxeApprentissage_Base;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float $taxeSalaire The taxe salaire.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tr a ircantec.
     *
     * @param float $trAIrcantec The tr a ircantec.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setTrAIrcantec($trAIrcantec) {
        $this->trAIrcantec = $trAIrcantec;
        return $this;
    }

    /**
     * Set the tr b ircantec.
     *
     * @param float $trBIrcantec The tr b ircantec.
     * @return EmpDADSUCalcul Returns this emp d a d s u calcul.
     */
    public function setTrBIrcantec($trBIrcantec) {
        $this->trBIrcantec = $trBIrcantec;
        return $this;
    }

}
