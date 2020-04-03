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
 * Emp dadsu calcul.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuCalcul {

    /**
     * Ancienn btp.
     *
     * @var DateTime|null
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
     * Base brute cot ccpbtp.
     *
     * @var float
     */
    private $baseBruteCotCcpbtp;

    /**
     * Base brute cot oppbtp.
     *
     * @var float
     */
    private $baseBruteCotOppbtp;

    /**
     * Base brute cpbtp.
     *
     * @var float
     */
    private $baseBruteCpbtp;

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
     * Btp sal moyen.
     *
     * @var float
     */
    private $btpSalMoyen;

    /**
     * Code class btp.
     *
     * @var string
     */
    private $codeClassBtp;

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
     * Code lib csg.
     *
     * @var string
     */
    private $codeLibCsg;

    /**
     * Code lib irc1.
     *
     * @var string
     */
    private $codeLibIrc1;

    /**
     * Code lib irc2.
     *
     * @var string
     */
    private $codeLibIrc2;

    /**
     * Code lib irc3.
     *
     * @var string
     */
    private $codeLibIrc3;

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
     * Code metier btp.
     *
     * @var string
     */
    private $codeMetierBtp;

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
     * Exo h code1.
     *
     * @var string
     */
    private $exoHCode1;

    /**
     * Exo h code2.
     *
     * @var string
     */
    private $exoHCode2;

    /**
     * Exo h code3.
     *
     * @var string
     */
    private $exoHCode3;

    /**
     * Exo h code4.
     *
     * @var string
     */
    private $exoHCode4;

    /**
     * Exo h code5.
     *
     * @var string
     */
    private $exoHCode5;

    /**
     * Exo h mnt1.
     *
     * @var float
     */
    private $exoHMnt1;

    /**
     * Exo h mnt2.
     *
     * @var float
     */
    private $exoHMnt2;

    /**
     * Exo h mnt3.
     *
     * @var float
     */
    private $exoHMnt3;

    /**
     * Exo h mnt4.
     *
     * @var float
     */
    private $exoHMnt4;

    /**
     * Exo h mnt5.
     *
     * @var float
     */
    private $exoHMnt5;

    /**
     * Exo h mnt deduc cot pat1.
     *
     * @var float
     */
    private $exoHMntDeducCotPat1;

    /**
     * Exo h mnt deduc cot pat2.
     *
     * @var float
     */
    private $exoHMntDeducCotPat2;

    /**
     * Exo h mnt deduc cot pat3.
     *
     * @var float
     */
    private $exoHMntDeducCotPat3;

    /**
     * Exo h mnt deduc cot pat4.
     *
     * @var float
     */
    private $exoHMntDeducCotPat4;

    /**
     * Exo h mnt deduc cot pat5.
     *
     * @var float
     */
    private $exoHMntDeducCotPat5;

    /**
     * Exo h mnt deduc cot pat tot.
     *
     * @var float
     */
    private $exoHMntDeducCotPatTot;

    /**
     * Exo h mnt reduc cot sal1.
     *
     * @var float
     */
    private $exoHMntReducCotSal1;

    /**
     * Exo h mnt reduc cot sal2.
     *
     * @var float
     */
    private $exoHMntReducCotSal2;

    /**
     * Exo h mnt reduc cot sal3.
     *
     * @var float
     */
    private $exoHMntReducCotSal3;

    /**
     * Exo h mnt reduc cot sal4.
     *
     * @var float
     */
    private $exoHMntReducCotSal4;

    /**
     * Exo h mnt reduc cot sal5.
     *
     * @var float
     */
    private $exoHMntReducCotSal5;

    /**
     * Exo h mnt reduc cot sal tot.
     *
     * @var float
     */
    private $exoHMntReducCotSalTot;

    /**
     * Exo h nb hj1.
     *
     * @var float
     */
    private $exoHNbHj1;

    /**
     * Exo h nb hj2.
     *
     * @var float
     */
    private $exoHNbHj2;

    /**
     * Exo h nb hj3.
     *
     * @var float
     */
    private $exoHNbHj3;

    /**
     * Exo h nb hj4.
     *
     * @var float
     */
    private $exoHNbHj4;

    /**
     * Exo h nb hj5.
     *
     * @var float
     */
    private $exoHNbHj5;

    /**
     * Forma pro base.
     *
     * @var float
     */
    private $formaProBase;

    /**
     * Forma pro base cdd.
     *
     * @var float
     */
    private $formaProBaseCdd;

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
     * Taxe apprentissage base.
     *
     * @var float
     */
    private $taxeApprentissageBase;

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
     * @return DateTime|null Returns the ancienn btp.
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
     * Get the base brute cot ccpbtp.
     *
     * @return float Returns the base brute cot ccpbtp.
     */
    public function getBaseBruteCotCcpbtp() {
        return $this->baseBruteCotCcpbtp;
    }

    /**
     * Get the base brute cot oppbtp.
     *
     * @return float Returns the base brute cot oppbtp.
     */
    public function getBaseBruteCotOppbtp() {
        return $this->baseBruteCotOppbtp;
    }

    /**
     * Get the base brute cpbtp.
     *
     * @return float Returns the base brute cpbtp.
     */
    public function getBaseBruteCpbtp() {
        return $this->baseBruteCpbtp;
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
     * Get the btp sal moyen.
     *
     * @return float Returns the btp sal moyen.
     */
    public function getBtpSalMoyen() {
        return $this->btpSalMoyen;
    }

    /**
     * Get the code class btp.
     *
     * @return string Returns the code class btp.
     */
    public function getCodeClassBtp() {
        return $this->codeClassBtp;
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
     * Get the code lib csg.
     *
     * @return string Returns the code lib csg.
     */
    public function getCodeLibCsg() {
        return $this->codeLibCsg;
    }

    /**
     * Get the code lib irc1.
     *
     * @return string Returns the code lib irc1.
     */
    public function getCodeLibIrc1() {
        return $this->codeLibIrc1;
    }

    /**
     * Get the code lib irc2.
     *
     * @return string Returns the code lib irc2.
     */
    public function getCodeLibIrc2() {
        return $this->codeLibIrc2;
    }

    /**
     * Get the code lib irc3.
     *
     * @return string Returns the code lib irc3.
     */
    public function getCodeLibIrc3() {
        return $this->codeLibIrc3;
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
     * Get the code metier btp.
     *
     * @return string Returns the code metier btp.
     */
    public function getCodeMetierBtp() {
        return $this->codeMetierBtp;
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
     * Get the exo h code1.
     *
     * @return string Returns the exo h code1.
     */
    public function getExoHCode1() {
        return $this->exoHCode1;
    }

    /**
     * Get the exo h code2.
     *
     * @return string Returns the exo h code2.
     */
    public function getExoHCode2() {
        return $this->exoHCode2;
    }

    /**
     * Get the exo h code3.
     *
     * @return string Returns the exo h code3.
     */
    public function getExoHCode3() {
        return $this->exoHCode3;
    }

    /**
     * Get the exo h code4.
     *
     * @return string Returns the exo h code4.
     */
    public function getExoHCode4() {
        return $this->exoHCode4;
    }

    /**
     * Get the exo h code5.
     *
     * @return string Returns the exo h code5.
     */
    public function getExoHCode5() {
        return $this->exoHCode5;
    }

    /**
     * Get the exo h mnt1.
     *
     * @return float Returns the exo h mnt1.
     */
    public function getExoHMnt1() {
        return $this->exoHMnt1;
    }

    /**
     * Get the exo h mnt2.
     *
     * @return float Returns the exo h mnt2.
     */
    public function getExoHMnt2() {
        return $this->exoHMnt2;
    }

    /**
     * Get the exo h mnt3.
     *
     * @return float Returns the exo h mnt3.
     */
    public function getExoHMnt3() {
        return $this->exoHMnt3;
    }

    /**
     * Get the exo h mnt4.
     *
     * @return float Returns the exo h mnt4.
     */
    public function getExoHMnt4() {
        return $this->exoHMnt4;
    }

    /**
     * Get the exo h mnt5.
     *
     * @return float Returns the exo h mnt5.
     */
    public function getExoHMnt5() {
        return $this->exoHMnt5;
    }

    /**
     * Get the exo h mnt deduc cot pat1.
     *
     * @return float Returns the exo h mnt deduc cot pat1.
     */
    public function getExoHMntDeducCotPat1() {
        return $this->exoHMntDeducCotPat1;
    }

    /**
     * Get the exo h mnt deduc cot pat2.
     *
     * @return float Returns the exo h mnt deduc cot pat2.
     */
    public function getExoHMntDeducCotPat2() {
        return $this->exoHMntDeducCotPat2;
    }

    /**
     * Get the exo h mnt deduc cot pat3.
     *
     * @return float Returns the exo h mnt deduc cot pat3.
     */
    public function getExoHMntDeducCotPat3() {
        return $this->exoHMntDeducCotPat3;
    }

    /**
     * Get the exo h mnt deduc cot pat4.
     *
     * @return float Returns the exo h mnt deduc cot pat4.
     */
    public function getExoHMntDeducCotPat4() {
        return $this->exoHMntDeducCotPat4;
    }

    /**
     * Get the exo h mnt deduc cot pat5.
     *
     * @return float Returns the exo h mnt deduc cot pat5.
     */
    public function getExoHMntDeducCotPat5() {
        return $this->exoHMntDeducCotPat5;
    }

    /**
     * Get the exo h mnt deduc cot pat tot.
     *
     * @return float Returns the exo h mnt deduc cot pat tot.
     */
    public function getExoHMntDeducCotPatTot() {
        return $this->exoHMntDeducCotPatTot;
    }

    /**
     * Get the exo h mnt reduc cot sal1.
     *
     * @return float Returns the exo h mnt reduc cot sal1.
     */
    public function getExoHMntReducCotSal1() {
        return $this->exoHMntReducCotSal1;
    }

    /**
     * Get the exo h mnt reduc cot sal2.
     *
     * @return float Returns the exo h mnt reduc cot sal2.
     */
    public function getExoHMntReducCotSal2() {
        return $this->exoHMntReducCotSal2;
    }

    /**
     * Get the exo h mnt reduc cot sal3.
     *
     * @return float Returns the exo h mnt reduc cot sal3.
     */
    public function getExoHMntReducCotSal3() {
        return $this->exoHMntReducCotSal3;
    }

    /**
     * Get the exo h mnt reduc cot sal4.
     *
     * @return float Returns the exo h mnt reduc cot sal4.
     */
    public function getExoHMntReducCotSal4() {
        return $this->exoHMntReducCotSal4;
    }

    /**
     * Get the exo h mnt reduc cot sal5.
     *
     * @return float Returns the exo h mnt reduc cot sal5.
     */
    public function getExoHMntReducCotSal5() {
        return $this->exoHMntReducCotSal5;
    }

    /**
     * Get the exo h mnt reduc cot sal tot.
     *
     * @return float Returns the exo h mnt reduc cot sal tot.
     */
    public function getExoHMntReducCotSalTot() {
        return $this->exoHMntReducCotSalTot;
    }

    /**
     * Get the exo h nb hj1.
     *
     * @return float Returns the exo h nb hj1.
     */
    public function getExoHNbHj1() {
        return $this->exoHNbHj1;
    }

    /**
     * Get the exo h nb hj2.
     *
     * @return float Returns the exo h nb hj2.
     */
    public function getExoHNbHj2() {
        return $this->exoHNbHj2;
    }

    /**
     * Get the exo h nb hj3.
     *
     * @return float Returns the exo h nb hj3.
     */
    public function getExoHNbHj3() {
        return $this->exoHNbHj3;
    }

    /**
     * Get the exo h nb hj4.
     *
     * @return float Returns the exo h nb hj4.
     */
    public function getExoHNbHj4() {
        return $this->exoHNbHj4;
    }

    /**
     * Get the exo h nb hj5.
     *
     * @return float Returns the exo h nb hj5.
     */
    public function getExoHNbHj5() {
        return $this->exoHNbHj5;
    }

    /**
     * Get the forma pro base.
     *
     * @return float Returns the forma pro base.
     */
    public function getFormaProBase() {
        return $this->formaProBase;
    }

    /**
     * Get the forma pro base cdd.
     *
     * @return float Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd() {
        return $this->formaProBaseCdd;
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
     * Get the taxe apprentissage base.
     *
     * @return float Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase() {
        return $this->taxeApprentissageBase;
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
     * @param DateTime|null $anciennBtp The ancienn btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnciennBtp(DateTime $anciennBtp = null) {
        $this->anciennBtp = $anciennBtp;
        return $this;
    }

    /**
     * Set the annee somme isol.
     *
     * @param string $anneeSommeIsol The annee somme isol.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol($anneeSommeIsol) {
        $this->anneeSommeIsol = $anneeSommeIsol;
        return $this;
    }

    /**
     * Set the annee somme isol2.
     *
     * @param string $anneeSommeIsol2 The annee somme isol2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol2($anneeSommeIsol2) {
        $this->anneeSommeIsol2 = $anneeSommeIsol2;
        return $this;
    }

    /**
     * Set the annee somme isol3.
     *
     * @param string $anneeSommeIsol3 The annee somme isol3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol3($anneeSommeIsol3) {
        $this->anneeSommeIsol3 = $anneeSommeIsol3;
        return $this;
    }

    /**
     * Set the annee somme isol4.
     *
     * @param string $anneeSommeIsol4 The annee somme isol4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol4($anneeSommeIsol4) {
        $this->anneeSommeIsol4 = $anneeSommeIsol4;
        return $this;
    }

    /**
     * Set the annee somme isol5.
     *
     * @param string $anneeSommeIsol5 The annee somme isol5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setAnneeSommeIsol5($anneeSommeIsol5) {
        $this->anneeSommeIsol5 = $anneeSommeIsol5;
        return $this;
    }

    /**
     * Set the base brute cot ccpbtp.
     *
     * @param float $baseBruteCotCcpbtp The base brute cot ccpbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCotCcpbtp($baseBruteCotCcpbtp) {
        $this->baseBruteCotCcpbtp = $baseBruteCotCcpbtp;
        return $this;
    }

    /**
     * Set the base brute cot oppbtp.
     *
     * @param float $baseBruteCotOppbtp The base brute cot oppbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCotOppbtp($baseBruteCotOppbtp) {
        $this->baseBruteCotOppbtp = $baseBruteCotOppbtp;
        return $this;
    }

    /**
     * Set the base brute cpbtp.
     *
     * @param float $baseBruteCpbtp The base brute cpbtp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBaseBruteCpbtp($baseBruteCpbtp) {
        $this->baseBruteCpbtp = $baseBruteCpbtp;
        return $this;
    }

    /**
     * Set the benef assedic.
     *
     * @param string $benefAssedic The benef assedic.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBenefAssedic($benefAssedic) {
        $this->benefAssedic = $benefAssedic;
        return $this;
    }

    /**
     * Set the brut ircantec.
     *
     * @param float $brutIrcantec The brut ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBrutIrcantec($brutIrcantec) {
        $this->brutIrcantec = $brutIrcantec;
        return $this;
    }

    /**
     * Set the btp sal moyen.
     *
     * @param float $btpSalMoyen The btp sal moyen.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setBtpSalMoyen($btpSalMoyen) {
        $this->btpSalMoyen = $btpSalMoyen;
        return $this;
    }

    /**
     * Set the code class btp.
     *
     * @param string $codeClassBtp The code class btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeClassBtp($codeClassBtp) {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }

    /**
     * Set the code duree trav.
     *
     * @param string $codeDureeTrav The code duree trav.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeDureeTrav($codeDureeTrav) {
        $this->codeDureeTrav = $codeDureeTrav;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code lib b plaf.
     *
     * @param string $codeLibBPlaf The code lib b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf($codeLibBPlaf) {
        $this->codeLibBPlaf = $codeLibBPlaf;
        return $this;
    }

    /**
     * Set the code lib b plaf2.
     *
     * @param string $codeLibBPlaf2 The code lib b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf2($codeLibBPlaf2) {
        $this->codeLibBPlaf2 = $codeLibBPlaf2;
        return $this;
    }

    /**
     * Set the code lib b plaf3.
     *
     * @param string $codeLibBPlaf3 The code lib b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf3($codeLibBPlaf3) {
        $this->codeLibBPlaf3 = $codeLibBPlaf3;
        return $this;
    }

    /**
     * Set the code lib b plaf4.
     *
     * @param string $codeLibBPlaf4 The code lib b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf4($codeLibBPlaf4) {
        $this->codeLibBPlaf4 = $codeLibBPlaf4;
        return $this;
    }

    /**
     * Set the code lib b plaf5.
     *
     * @param string $codeLibBPlaf5 The code lib b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBPlaf5($codeLibBPlaf5) {
        $this->codeLibBPlaf5 = $codeLibBPlaf5;
        return $this;
    }

    /**
     * Set the code lib brut.
     *
     * @param string $codeLibBrut The code lib brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut($codeLibBrut) {
        $this->codeLibBrut = $codeLibBrut;
        return $this;
    }

    /**
     * Set the code lib brut2.
     *
     * @param string $codeLibBrut2 The code lib brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut2($codeLibBrut2) {
        $this->codeLibBrut2 = $codeLibBrut2;
        return $this;
    }

    /**
     * Set the code lib brut3.
     *
     * @param string $codeLibBrut3 The code lib brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut3($codeLibBrut3) {
        $this->codeLibBrut3 = $codeLibBrut3;
        return $this;
    }

    /**
     * Set the code lib brut4.
     *
     * @param string $codeLibBrut4 The code lib brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut4($codeLibBrut4) {
        $this->codeLibBrut4 = $codeLibBrut4;
        return $this;
    }

    /**
     * Set the code lib brut5.
     *
     * @param string $codeLibBrut5 The code lib brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibBrut5($codeLibBrut5) {
        $this->codeLibBrut5 = $codeLibBrut5;
        return $this;
    }

    /**
     * Set the code lib csg.
     *
     * @param string $codeLibCsg The code lib csg.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibCsg($codeLibCsg) {
        $this->codeLibCsg = $codeLibCsg;
        return $this;
    }

    /**
     * Set the code lib irc1.
     *
     * @param string $codeLibIrc1 The code lib irc1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc1($codeLibIrc1) {
        $this->codeLibIrc1 = $codeLibIrc1;
        return $this;
    }

    /**
     * Set the code lib irc2.
     *
     * @param string $codeLibIrc2 The code lib irc2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc2($codeLibIrc2) {
        $this->codeLibIrc2 = $codeLibIrc2;
        return $this;
    }

    /**
     * Set the code lib irc3.
     *
     * @param string $codeLibIrc3 The code lib irc3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibIrc3($codeLibIrc3) {
        $this->codeLibIrc3 = $codeLibIrc3;
        return $this;
    }

    /**
     * Set the code lib somme.
     *
     * @param string $codeLibSomme The code lib somme.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme($codeLibSomme) {
        $this->codeLibSomme = $codeLibSomme;
        return $this;
    }

    /**
     * Set the code lib somme2.
     *
     * @param string $codeLibSomme2 The code lib somme2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme2($codeLibSomme2) {
        $this->codeLibSomme2 = $codeLibSomme2;
        return $this;
    }

    /**
     * Set the code lib somme3.
     *
     * @param string $codeLibSomme3 The code lib somme3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme3($codeLibSomme3) {
        $this->codeLibSomme3 = $codeLibSomme3;
        return $this;
    }

    /**
     * Set the code lib somme4.
     *
     * @param string $codeLibSomme4 The code lib somme4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme4($codeLibSomme4) {
        $this->codeLibSomme4 = $codeLibSomme4;
        return $this;
    }

    /**
     * Set the code lib somme5.
     *
     * @param string $codeLibSomme5 The code lib somme5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeLibSomme5($codeLibSomme5) {
        $this->codeLibSomme5 = $codeLibSomme5;
        return $this;
    }

    /**
     * Set the code metier btp.
     *
     * @param string $codeMetierBtp The code metier btp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeMetierBtp($codeMetierBtp) {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }

    /**
     * Set the code type b plaf.
     *
     * @param string $codeTypeBPlaf The code type b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf($codeTypeBPlaf) {
        $this->codeTypeBPlaf = $codeTypeBPlaf;
        return $this;
    }

    /**
     * Set the code type b plaf2.
     *
     * @param string $codeTypeBPlaf2 The code type b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf2($codeTypeBPlaf2) {
        $this->codeTypeBPlaf2 = $codeTypeBPlaf2;
        return $this;
    }

    /**
     * Set the code type b plaf3.
     *
     * @param string $codeTypeBPlaf3 The code type b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf3($codeTypeBPlaf3) {
        $this->codeTypeBPlaf3 = $codeTypeBPlaf3;
        return $this;
    }

    /**
     * Set the code type b plaf4.
     *
     * @param string $codeTypeBPlaf4 The code type b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf4($codeTypeBPlaf4) {
        $this->codeTypeBPlaf4 = $codeTypeBPlaf4;
        return $this;
    }

    /**
     * Set the code type b plaf5.
     *
     * @param string $codeTypeBPlaf5 The code type b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBPlaf5($codeTypeBPlaf5) {
        $this->codeTypeBPlaf5 = $codeTypeBPlaf5;
        return $this;
    }

    /**
     * Set the code type brut.
     *
     * @param string $codeTypeBrut The code type brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut($codeTypeBrut) {
        $this->codeTypeBrut = $codeTypeBrut;
        return $this;
    }

    /**
     * Set the code type brut2.
     *
     * @param string $codeTypeBrut2 The code type brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut2($codeTypeBrut2) {
        $this->codeTypeBrut2 = $codeTypeBrut2;
        return $this;
    }

    /**
     * Set the code type brut3.
     *
     * @param string $codeTypeBrut3 The code type brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut3($codeTypeBrut3) {
        $this->codeTypeBrut3 = $codeTypeBrut3;
        return $this;
    }

    /**
     * Set the code type brut4.
     *
     * @param string $codeTypeBrut4 The code type brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut4($codeTypeBrut4) {
        $this->codeTypeBrut4 = $codeTypeBrut4;
        return $this;
    }

    /**
     * Set the code type brut5.
     *
     * @param string $codeTypeBrut5 The code type brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeBrut5($codeTypeBrut5) {
        $this->codeTypeBrut5 = $codeTypeBrut5;
        return $this;
    }

    /**
     * Set the code type somme.
     *
     * @param string $codeTypeSomme The code type somme.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme($codeTypeSomme) {
        $this->codeTypeSomme = $codeTypeSomme;
        return $this;
    }

    /**
     * Set the code type somme2.
     *
     * @param string $codeTypeSomme2 The code type somme2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme2($codeTypeSomme2) {
        $this->codeTypeSomme2 = $codeTypeSomme2;
        return $this;
    }

    /**
     * Set the code type somme3.
     *
     * @param string $codeTypeSomme3 The code type somme3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme3($codeTypeSomme3) {
        $this->codeTypeSomme3 = $codeTypeSomme3;
        return $this;
    }

    /**
     * Set the code type somme4.
     *
     * @param string $codeTypeSomme4 The code type somme4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme4($codeTypeSomme4) {
        $this->codeTypeSomme4 = $codeTypeSomme4;
        return $this;
    }

    /**
     * Set the code type somme5.
     *
     * @param string $codeTypeSomme5 The code type somme5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCodeTypeSomme5($codeTypeSomme5) {
        $this->codeTypeSomme5 = $codeTypeSomme5;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float $csgSpecif The csg specif.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setCsgSpecif($csgSpecif) {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the duree trav.
     *
     * @param float $dureeTrav The duree trav.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setDureeTrav($dureeTrav) {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }

    /**
     * Set the exo h code1.
     *
     * @param string $exoHCode1 The exo h code1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode1($exoHCode1) {
        $this->exoHCode1 = $exoHCode1;
        return $this;
    }

    /**
     * Set the exo h code2.
     *
     * @param string $exoHCode2 The exo h code2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode2($exoHCode2) {
        $this->exoHCode2 = $exoHCode2;
        return $this;
    }

    /**
     * Set the exo h code3.
     *
     * @param string $exoHCode3 The exo h code3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode3($exoHCode3) {
        $this->exoHCode3 = $exoHCode3;
        return $this;
    }

    /**
     * Set the exo h code4.
     *
     * @param string $exoHCode4 The exo h code4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode4($exoHCode4) {
        $this->exoHCode4 = $exoHCode4;
        return $this;
    }

    /**
     * Set the exo h code5.
     *
     * @param string $exoHCode5 The exo h code5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHCode5($exoHCode5) {
        $this->exoHCode5 = $exoHCode5;
        return $this;
    }

    /**
     * Set the exo h mnt1.
     *
     * @param float $exoHMnt1 The exo h mnt1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt1($exoHMnt1) {
        $this->exoHMnt1 = $exoHMnt1;
        return $this;
    }

    /**
     * Set the exo h mnt2.
     *
     * @param float $exoHMnt2 The exo h mnt2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt2($exoHMnt2) {
        $this->exoHMnt2 = $exoHMnt2;
        return $this;
    }

    /**
     * Set the exo h mnt3.
     *
     * @param float $exoHMnt3 The exo h mnt3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt3($exoHMnt3) {
        $this->exoHMnt3 = $exoHMnt3;
        return $this;
    }

    /**
     * Set the exo h mnt4.
     *
     * @param float $exoHMnt4 The exo h mnt4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt4($exoHMnt4) {
        $this->exoHMnt4 = $exoHMnt4;
        return $this;
    }

    /**
     * Set the exo h mnt5.
     *
     * @param float $exoHMnt5 The exo h mnt5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMnt5($exoHMnt5) {
        $this->exoHMnt5 = $exoHMnt5;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat1.
     *
     * @param float $exoHMntDeducCotPat1 The exo h mnt deduc cot pat1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat1($exoHMntDeducCotPat1) {
        $this->exoHMntDeducCotPat1 = $exoHMntDeducCotPat1;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat2.
     *
     * @param float $exoHMntDeducCotPat2 The exo h mnt deduc cot pat2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat2($exoHMntDeducCotPat2) {
        $this->exoHMntDeducCotPat2 = $exoHMntDeducCotPat2;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat3.
     *
     * @param float $exoHMntDeducCotPat3 The exo h mnt deduc cot pat3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat3($exoHMntDeducCotPat3) {
        $this->exoHMntDeducCotPat3 = $exoHMntDeducCotPat3;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat4.
     *
     * @param float $exoHMntDeducCotPat4 The exo h mnt deduc cot pat4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat4($exoHMntDeducCotPat4) {
        $this->exoHMntDeducCotPat4 = $exoHMntDeducCotPat4;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat5.
     *
     * @param float $exoHMntDeducCotPat5 The exo h mnt deduc cot pat5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPat5($exoHMntDeducCotPat5) {
        $this->exoHMntDeducCotPat5 = $exoHMntDeducCotPat5;
        return $this;
    }

    /**
     * Set the exo h mnt deduc cot pat tot.
     *
     * @param float $exoHMntDeducCotPatTot The exo h mnt deduc cot pat tot.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntDeducCotPatTot($exoHMntDeducCotPatTot) {
        $this->exoHMntDeducCotPatTot = $exoHMntDeducCotPatTot;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal1.
     *
     * @param float $exoHMntReducCotSal1 The exo h mnt reduc cot sal1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal1($exoHMntReducCotSal1) {
        $this->exoHMntReducCotSal1 = $exoHMntReducCotSal1;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal2.
     *
     * @param float $exoHMntReducCotSal2 The exo h mnt reduc cot sal2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal2($exoHMntReducCotSal2) {
        $this->exoHMntReducCotSal2 = $exoHMntReducCotSal2;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal3.
     *
     * @param float $exoHMntReducCotSal3 The exo h mnt reduc cot sal3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal3($exoHMntReducCotSal3) {
        $this->exoHMntReducCotSal3 = $exoHMntReducCotSal3;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal4.
     *
     * @param float $exoHMntReducCotSal4 The exo h mnt reduc cot sal4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal4($exoHMntReducCotSal4) {
        $this->exoHMntReducCotSal4 = $exoHMntReducCotSal4;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal5.
     *
     * @param float $exoHMntReducCotSal5 The exo h mnt reduc cot sal5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSal5($exoHMntReducCotSal5) {
        $this->exoHMntReducCotSal5 = $exoHMntReducCotSal5;
        return $this;
    }

    /**
     * Set the exo h mnt reduc cot sal tot.
     *
     * @param float $exoHMntReducCotSalTot The exo h mnt reduc cot sal tot.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHMntReducCotSalTot($exoHMntReducCotSalTot) {
        $this->exoHMntReducCotSalTot = $exoHMntReducCotSalTot;
        return $this;
    }

    /**
     * Set the exo h nb hj1.
     *
     * @param float $exoHNbHj1 The exo h nb hj1.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj1($exoHNbHj1) {
        $this->exoHNbHj1 = $exoHNbHj1;
        return $this;
    }

    /**
     * Set the exo h nb hj2.
     *
     * @param float $exoHNbHj2 The exo h nb hj2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj2($exoHNbHj2) {
        $this->exoHNbHj2 = $exoHNbHj2;
        return $this;
    }

    /**
     * Set the exo h nb hj3.
     *
     * @param float $exoHNbHj3 The exo h nb hj3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj3($exoHNbHj3) {
        $this->exoHNbHj3 = $exoHNbHj3;
        return $this;
    }

    /**
     * Set the exo h nb hj4.
     *
     * @param float $exoHNbHj4 The exo h nb hj4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj4($exoHNbHj4) {
        $this->exoHNbHj4 = $exoHNbHj4;
        return $this;
    }

    /**
     * Set the exo h nb hj5.
     *
     * @param float $exoHNbHj5 The exo h nb hj5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setExoHNbHj5($exoHNbHj5) {
        $this->exoHNbHj5 = $exoHNbHj5;
        return $this;
    }

    /**
     * Set the forma pro base.
     *
     * @param float $formaProBase The forma pro base.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setFormaProBase($formaProBase) {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float $formaProBaseCdd The forma pro base cdd.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setFormaProBaseCdd($formaProBaseCdd) {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float $indCp The ind cp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setIndCp($indCp) {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the ind intemp.
     *
     * @param float $indIntemp The ind intemp.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setIndIntemp($indIntemp) {
        $this->indIntemp = $indIntemp;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float $montantBPlaf The montant b plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf($montantBPlaf) {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float $montantBPlaf2 The montant b plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf2($montantBPlaf2) {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float $montantBPlaf3 The montant b plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf3($montantBPlaf3) {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float $montantBPlaf4 The montant b plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf4($montantBPlaf4) {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float $montantBPlaf5 The montant b plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBPlaf5($montantBPlaf5) {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float $montantBrut The montant brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut($montantBrut) {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float $montantBrut2 The montant brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut2($montantBrut2) {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float $montantBrut3 The montant brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut3($montantBrut3) {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float $montantBrut4 The montant brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut4($montantBrut4) {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float $montantBrut5 The montant brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantBrut5($montantBrut5) {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut($montantSommeIsolBrut) {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut2($montantSommeIsolBrut2) {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut3($montantSommeIsolBrut3) {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut4($montantSommeIsolBrut4) {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolBrut5($montantSommeIsolBrut5) {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf($montantSommeIsolPlaf) {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf2($montantSommeIsolPlaf2) {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf3($montantSommeIsolPlaf3) {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf4($montantSommeIsolPlaf4) {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMontantSommeIsolPlaf5($montantSommeIsolPlaf5) {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the mt j rtt2007.
     *
     * @param float $mtJRtt2007 The mt j rtt2007.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setMtJRtt2007($mtJRtt2007) {
        $this->mtJRtt2007 = $mtJRtt2007;
        return $this;
    }

    /**
     * Set the nb j rtt2007.
     *
     * @param float $nbJRtt2007 The nb j rtt2007.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbJRtt2007($nbJRtt2007) {
        $this->nbJRtt2007 = $nbJRtt2007;
        return $this;
    }

    /**
     * Set the nb periode.
     *
     * @param float $nbPeriode The nb periode.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbPeriode($nbPeriode) {
        $this->nbPeriode = $nbPeriode;
        return $this;
    }

    /**
     * Set the nbh chom partiel.
     *
     * @param float $nbhChomPartiel The nbh chom partiel.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbhChomPartiel($nbhChomPartiel) {
        $this->nbhChomPartiel = $nbhChomPartiel;
        return $this;
    }

    /**
     * Set the nbh sem ircantec.
     *
     * @param float $nbhSemIrcantec The nbh sem ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNbhSemIrcantec($nbhSemIrcantec) {
        $this->nbhSemIrcantec = $nbhSemIrcantec;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the plaf ircantec.
     *
     * @param float $plafIrcantec The plaf ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setPlafIrcantec($plafIrcantec) {
        $this->plafIrcantec = $plafIrcantec;
        return $this;
    }

    /**
     * Set the qualif unite temps.
     *
     * @param string $qualifUniteTemps The qualif unite temps.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setQualifUniteTemps($qualifUniteTemps) {
        $this->qualifUniteTemps = $qualifUniteTemps;
        return $this;
    }

    /**
     * Set the suppl fam.
     *
     * @param float $supplFam The suppl fam.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setSupplFam($supplFam) {
        $this->supplFam = $supplFam;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float $taxeApprentissageBase The taxe apprentissage base.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTaxeApprentissageBase($taxeApprentissageBase) {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float $taxeSalaire The taxe salaire.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tr a ircantec.
     *
     * @param float $trAIrcantec The tr a ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTrAIrcantec($trAIrcantec) {
        $this->trAIrcantec = $trAIrcantec;
        return $this;
    }

    /**
     * Set the tr b ircantec.
     *
     * @param float $trBIrcantec The tr b ircantec.
     * @return EmpDadsuCalcul Returns this Emp dadsu calcul.
     */
    public function setTrBIrcantec($trBIrcantec) {
        $this->trBIrcantec = $trBIrcantec;
        return $this;
    }
}
