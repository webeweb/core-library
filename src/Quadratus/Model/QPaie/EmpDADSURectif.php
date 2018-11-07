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

/**
 * Emp d a d s u rectif model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpDADSURectif {

    /**
     * Actif.
     *
     * @var boolean
     */
    private $actif;

    /**
     * Actions gratuites_ nbre.
     *
     * @var float
     */
    private $actionsGratuites_Nbre;

    /**
     * Actions gratuites_ valeur u.
     *
     * @var float
     */
    private $actionsGratuites_ValeurU;

    /**
     * Autres sommes exo_ mnt1.
     *
     * @var float
     */
    private $autresSommesExo_Mnt1;

    /**
     * Autres sommes exo_ mnt2.
     *
     * @var float
     */
    private $autresSommesExo_Mnt2;

    /**
     * Autres sommes exo_ mnt3.
     *
     * @var float
     */
    private $autresSommesExo_Mnt3;

    /**
     * Autres sommes exo_ mnt4.
     *
     * @var float
     */
    private $autresSommesExo_Mnt4;

    /**
     * Base exo brut1.
     *
     * @var float
     */
    private $baseExoBrut1;

    /**
     * Base exo brut2.
     *
     * @var float
     */
    private $baseExoBrut2;

    /**
     * Base exo brut3.
     *
     * @var float
     */
    private $baseExoBrut3;

    /**
     * Base exo plaf1.
     *
     * @var float
     */
    private $baseExoPlaf1;

    /**
     * Base exo plaf2.
     *
     * @var float
     */
    private $baseExoPlaf2;

    /**
     * Base exo plaf3.
     *
     * @var float
     */
    private $baseExoPlaf3;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Csg specif.
     *
     * @var float
     */
    private $csgSpecif;

    /**
     * Epargne sal_ mnt1.
     *
     * @var float
     */
    private $epargneSal_Mnt1;

    /**
     * Epargne sal_ mnt2.
     *
     * @var float
     */
    private $epargneSal_Mnt2;

    /**
     * Epargne sal_ mnt3.
     *
     * @var float
     */
    private $epargneSal_Mnt3;

    /**
     * Epargne sal_ mnt4.
     *
     * @var float
     */
    private $epargneSal_Mnt4;

    /**
     * G p e c_ mnt exo c s g c r d s.
     *
     * @var float
     */
    private $gPEC_MntExoCSGCRDS;

    /**
     * G p e c_ mnt exo cot secu.
     *
     * @var float
     */
    private $gPEC_MntExoCotSecu;

    /**
     * Ind cp.
     *
     * @var float
     */
    private $indCp;

    /**
     * Indemn cp plaf.
     *
     * @var float
     */
    private $indemnCpPlaf;

    /**
     * Indemn impat.
     *
     * @var float
     */
    private $indemnImpat;

    /**
     * Indemn rupture_ mnt1.
     *
     * @var float
     */
    private $indemnRupture_Mnt1;

    /**
     * Indemn rupture_ mnt2.
     *
     * @var float
     */
    private $indemnRupture_Mnt2;

    /**
     * Indice rectif.
     *
     * @var int
     */
    private $indiceRectif;

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
     * Particip patron avtge_ mnt1.
     *
     * @var float
     */
    private $participPatronAvtge_Mnt1;

    /**
     * Particip patron avtge_ mnt2.
     *
     * @var float
     */
    private $participPatronAvtge_Mnt2;

    /**
     * Particip serv pers.
     *
     * @var float
     */
    private $participServPers;

    /**
     * T d s100.
     *
     * @var float
     */
    private $tDS100;

    /**
     * T d s103.
     *
     * @var float
     */
    private $tDS103;

    /**
     * T d s105.
     *
     * @var float
     */
    private $tDS105;

    /**
     * T d s107.
     *
     * @var boolean
     */
    private $tDS107;

    /**
     * T d s108.
     *
     * @var boolean
     */
    private $tDS108;

    /**
     * T d s109.
     *
     * @var boolean
     */
    private $tDS109;

    /**
     * T d s110.
     *
     * @var boolean
     */
    private $tDS110;

    /**
     * T d s111.
     *
     * @var boolean
     */
    private $tDS111;

    /**
     * T d s112.
     *
     * @var float
     */
    private $tDS112;

    /**
     * T d s113.
     *
     * @var boolean
     */
    private $tDS113;

    /**
     * T d s117.
     *
     * @var float
     */
    private $tDS117;

    /**
     * T d s119.
     *
     * @var boolean
     */
    private $tDS119;

    /**
     * T d s120.
     *
     * @var boolean
     */
    private $tDS120;

    /**
     * T d s121.
     *
     * @var boolean
     */
    private $tDS121;

    /**
     * T d s122.
     *
     * @var boolean
     */
    private $tDS122;

    /**
     * T d s125.
     *
     * @var float
     */
    private $tDS125;

    /**
     * T d s132.
     *
     * @var float
     */
    private $tDS132;

    /**
     * T d s134.
     *
     * @var float
     */
    private $tDS134;

    /**
     * T d s135.
     *
     * @var float
     */
    private $tDS135;

    /**
     * T d s136.
     *
     * @var float
     */
    private $tDS136;

    /**
     * T d s141.
     *
     * @var float
     */
    private $tDS141;

    /**
     * T d s81.
     *
     * @var float
     */
    private $tDS81;

    /**
     * T d s82.
     *
     * @var float
     */
    private $tDS82;

    /**
     * Taxe salaire.
     *
     * @var float
     */
    private $taxeSalaire;

    /**
     * Tds137.
     *
     * @var float
     */
    private $tds137;

    /**
     * Tds142.
     *
     * @var float
     */
    private $tds142;

    /**
     * Tds alloc retraite.
     *
     * @var float
     */
    private $tdsAllocRetraite;

    /**
     * Total plaf.
     *
     * @var float
     */
    private $totalPlaf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return boolean Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the actions gratuites_ nbre.
     *
     * @return float Returns the actions gratuites_ nbre.
     */
    public function getActionsGratuites_Nbre() {
        return $this->actionsGratuites_Nbre;
    }

    /**
     * Get the actions gratuites_ valeur u.
     *
     * @return float Returns the actions gratuites_ valeur u.
     */
    public function getActionsGratuites_ValeurU() {
        return $this->actionsGratuites_ValeurU;
    }

    /**
     * Get the autres sommes exo_ mnt1.
     *
     * @return float Returns the autres sommes exo_ mnt1.
     */
    public function getAutresSommesExo_Mnt1() {
        return $this->autresSommesExo_Mnt1;
    }

    /**
     * Get the autres sommes exo_ mnt2.
     *
     * @return float Returns the autres sommes exo_ mnt2.
     */
    public function getAutresSommesExo_Mnt2() {
        return $this->autresSommesExo_Mnt2;
    }

    /**
     * Get the autres sommes exo_ mnt3.
     *
     * @return float Returns the autres sommes exo_ mnt3.
     */
    public function getAutresSommesExo_Mnt3() {
        return $this->autresSommesExo_Mnt3;
    }

    /**
     * Get the autres sommes exo_ mnt4.
     *
     * @return float Returns the autres sommes exo_ mnt4.
     */
    public function getAutresSommesExo_Mnt4() {
        return $this->autresSommesExo_Mnt4;
    }

    /**
     * Get the base exo brut1.
     *
     * @return float Returns the base exo brut1.
     */
    public function getBaseExoBrut1() {
        return $this->baseExoBrut1;
    }

    /**
     * Get the base exo brut2.
     *
     * @return float Returns the base exo brut2.
     */
    public function getBaseExoBrut2() {
        return $this->baseExoBrut2;
    }

    /**
     * Get the base exo brut3.
     *
     * @return float Returns the base exo brut3.
     */
    public function getBaseExoBrut3() {
        return $this->baseExoBrut3;
    }

    /**
     * Get the base exo plaf1.
     *
     * @return float Returns the base exo plaf1.
     */
    public function getBaseExoPlaf1() {
        return $this->baseExoPlaf1;
    }

    /**
     * Get the base exo plaf2.
     *
     * @return float Returns the base exo plaf2.
     */
    public function getBaseExoPlaf2() {
        return $this->baseExoPlaf2;
    }

    /**
     * Get the base exo plaf3.
     *
     * @return float Returns the base exo plaf3.
     */
    public function getBaseExoPlaf3() {
        return $this->baseExoPlaf3;
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
     * Get the csg specif.
     *
     * @return float Returns the csg specif.
     */
    public function getCsgSpecif() {
        return $this->csgSpecif;
    }

    /**
     * Get the epargne sal_ mnt1.
     *
     * @return float Returns the epargne sal_ mnt1.
     */
    public function getEpargneSal_Mnt1() {
        return $this->epargneSal_Mnt1;
    }

    /**
     * Get the epargne sal_ mnt2.
     *
     * @return float Returns the epargne sal_ mnt2.
     */
    public function getEpargneSal_Mnt2() {
        return $this->epargneSal_Mnt2;
    }

    /**
     * Get the epargne sal_ mnt3.
     *
     * @return float Returns the epargne sal_ mnt3.
     */
    public function getEpargneSal_Mnt3() {
        return $this->epargneSal_Mnt3;
    }

    /**
     * Get the epargne sal_ mnt4.
     *
     * @return float Returns the epargne sal_ mnt4.
     */
    public function getEpargneSal_Mnt4() {
        return $this->epargneSal_Mnt4;
    }

    /**
     * Get the g p e c_ mnt exo c s g c r d s.
     *
     * @return float Returns the g p e c_ mnt exo c s g c r d s.
     */
    public function getGPEC_MntExoCSGCRDS() {
        return $this->gPEC_MntExoCSGCRDS;
    }

    /**
     * Get the g p e c_ mnt exo cot secu.
     *
     * @return float Returns the g p e c_ mnt exo cot secu.
     */
    public function getGPEC_MntExoCotSecu() {
        return $this->gPEC_MntExoCotSecu;
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
     * Get the indemn cp plaf.
     *
     * @return float Returns the indemn cp plaf.
     */
    public function getIndemnCpPlaf() {
        return $this->indemnCpPlaf;
    }

    /**
     * Get the indemn impat.
     *
     * @return float Returns the indemn impat.
     */
    public function getIndemnImpat() {
        return $this->indemnImpat;
    }

    /**
     * Get the indemn rupture_ mnt1.
     *
     * @return float Returns the indemn rupture_ mnt1.
     */
    public function getIndemnRupture_Mnt1() {
        return $this->indemnRupture_Mnt1;
    }

    /**
     * Get the indemn rupture_ mnt2.
     *
     * @return float Returns the indemn rupture_ mnt2.
     */
    public function getIndemnRupture_Mnt2() {
        return $this->indemnRupture_Mnt2;
    }

    /**
     * Get the indice rectif.
     *
     * @return int Returns the indice rectif.
     */
    public function getIndiceRectif() {
        return $this->indiceRectif;
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
     * Get the particip patron avtge_ mnt1.
     *
     * @return float Returns the particip patron avtge_ mnt1.
     */
    public function getParticipPatronAvtge_Mnt1() {
        return $this->participPatronAvtge_Mnt1;
    }

    /**
     * Get the particip patron avtge_ mnt2.
     *
     * @return float Returns the particip patron avtge_ mnt2.
     */
    public function getParticipPatronAvtge_Mnt2() {
        return $this->participPatronAvtge_Mnt2;
    }

    /**
     * Get the particip serv pers.
     *
     * @return float Returns the particip serv pers.
     */
    public function getParticipServPers() {
        return $this->participServPers;
    }

    /**
     * Get the t d s100.
     *
     * @return float Returns the t d s100.
     */
    public function getTDS100() {
        return $this->tDS100;
    }

    /**
     * Get the t d s103.
     *
     * @return float Returns the t d s103.
     */
    public function getTDS103() {
        return $this->tDS103;
    }

    /**
     * Get the t d s105.
     *
     * @return float Returns the t d s105.
     */
    public function getTDS105() {
        return $this->tDS105;
    }

    /**
     * Get the t d s107.
     *
     * @return boolean Returns the t d s107.
     */
    public function getTDS107() {
        return $this->tDS107;
    }

    /**
     * Get the t d s108.
     *
     * @return boolean Returns the t d s108.
     */
    public function getTDS108() {
        return $this->tDS108;
    }

    /**
     * Get the t d s109.
     *
     * @return boolean Returns the t d s109.
     */
    public function getTDS109() {
        return $this->tDS109;
    }

    /**
     * Get the t d s110.
     *
     * @return boolean Returns the t d s110.
     */
    public function getTDS110() {
        return $this->tDS110;
    }

    /**
     * Get the t d s111.
     *
     * @return boolean Returns the t d s111.
     */
    public function getTDS111() {
        return $this->tDS111;
    }

    /**
     * Get the t d s112.
     *
     * @return float Returns the t d s112.
     */
    public function getTDS112() {
        return $this->tDS112;
    }

    /**
     * Get the t d s113.
     *
     * @return boolean Returns the t d s113.
     */
    public function getTDS113() {
        return $this->tDS113;
    }

    /**
     * Get the t d s117.
     *
     * @return float Returns the t d s117.
     */
    public function getTDS117() {
        return $this->tDS117;
    }

    /**
     * Get the t d s119.
     *
     * @return boolean Returns the t d s119.
     */
    public function getTDS119() {
        return $this->tDS119;
    }

    /**
     * Get the t d s120.
     *
     * @return boolean Returns the t d s120.
     */
    public function getTDS120() {
        return $this->tDS120;
    }

    /**
     * Get the t d s121.
     *
     * @return boolean Returns the t d s121.
     */
    public function getTDS121() {
        return $this->tDS121;
    }

    /**
     * Get the t d s122.
     *
     * @return boolean Returns the t d s122.
     */
    public function getTDS122() {
        return $this->tDS122;
    }

    /**
     * Get the t d s125.
     *
     * @return float Returns the t d s125.
     */
    public function getTDS125() {
        return $this->tDS125;
    }

    /**
     * Get the t d s132.
     *
     * @return float Returns the t d s132.
     */
    public function getTDS132() {
        return $this->tDS132;
    }

    /**
     * Get the t d s134.
     *
     * @return float Returns the t d s134.
     */
    public function getTDS134() {
        return $this->tDS134;
    }

    /**
     * Get the t d s135.
     *
     * @return float Returns the t d s135.
     */
    public function getTDS135() {
        return $this->tDS135;
    }

    /**
     * Get the t d s136.
     *
     * @return float Returns the t d s136.
     */
    public function getTDS136() {
        return $this->tDS136;
    }

    /**
     * Get the t d s141.
     *
     * @return float Returns the t d s141.
     */
    public function getTDS141() {
        return $this->tDS141;
    }

    /**
     * Get the t d s81.
     *
     * @return float Returns the t d s81.
     */
    public function getTDS81() {
        return $this->tDS81;
    }

    /**
     * Get the t d s82.
     *
     * @return float Returns the t d s82.
     */
    public function getTDS82() {
        return $this->tDS82;
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
     * Get the tds137.
     *
     * @return float Returns the tds137.
     */
    public function getTds137() {
        return $this->tds137;
    }

    /**
     * Get the tds142.
     *
     * @return float Returns the tds142.
     */
    public function getTds142() {
        return $this->tds142;
    }

    /**
     * Get the tds alloc retraite.
     *
     * @return float Returns the tds alloc retraite.
     */
    public function getTdsAllocRetraite() {
        return $this->tdsAllocRetraite;
    }

    /**
     * Get the total plaf.
     *
     * @return float Returns the total plaf.
     */
    public function getTotalPlaf() {
        return $this->totalPlaf;
    }

    /**
     * Set the actif.
     *
     * @param boolean $actif The actif.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the actions gratuites_ nbre.
     *
     * @param float $actionsGratuites_Nbre The actions gratuites_ nbre.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setActionsGratuites_Nbre($actionsGratuites_Nbre) {
        $this->actionsGratuites_Nbre = $actionsGratuites_Nbre;
        return $this;
    }

    /**
     * Set the actions gratuites_ valeur u.
     *
     * @param float $actionsGratuites_ValeurU The actions gratuites_ valeur u.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setActionsGratuites_ValeurU($actionsGratuites_ValeurU) {
        $this->actionsGratuites_ValeurU = $actionsGratuites_ValeurU;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt1.
     *
     * @param float $autresSommesExo_Mnt1 The autres sommes exo_ mnt1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setAutresSommesExo_Mnt1($autresSommesExo_Mnt1) {
        $this->autresSommesExo_Mnt1 = $autresSommesExo_Mnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt2.
     *
     * @param float $autresSommesExo_Mnt2 The autres sommes exo_ mnt2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setAutresSommesExo_Mnt2($autresSommesExo_Mnt2) {
        $this->autresSommesExo_Mnt2 = $autresSommesExo_Mnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt3.
     *
     * @param float $autresSommesExo_Mnt3 The autres sommes exo_ mnt3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setAutresSommesExo_Mnt3($autresSommesExo_Mnt3) {
        $this->autresSommesExo_Mnt3 = $autresSommesExo_Mnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo_ mnt4.
     *
     * @param float $autresSommesExo_Mnt4 The autres sommes exo_ mnt4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setAutresSommesExo_Mnt4($autresSommesExo_Mnt4) {
        $this->autresSommesExo_Mnt4 = $autresSommesExo_Mnt4;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float $baseExoBrut1 The base exo brut1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoBrut1($baseExoBrut1) {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float $baseExoBrut2 The base exo brut2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoBrut2($baseExoBrut2) {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float $baseExoBrut3 The base exo brut3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoBrut3($baseExoBrut3) {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float $baseExoPlaf1 The base exo plaf1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoPlaf1($baseExoPlaf1) {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float $baseExoPlaf2 The base exo plaf2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoPlaf2($baseExoPlaf2) {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float $baseExoPlaf3 The base exo plaf3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setBaseExoPlaf3($baseExoPlaf3) {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float $csgSpecif The csg specif.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setCsgSpecif($csgSpecif) {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt1.
     *
     * @param float $epargneSal_Mnt1 The epargne sal_ mnt1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setEpargneSal_Mnt1($epargneSal_Mnt1) {
        $this->epargneSal_Mnt1 = $epargneSal_Mnt1;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt2.
     *
     * @param float $epargneSal_Mnt2 The epargne sal_ mnt2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setEpargneSal_Mnt2($epargneSal_Mnt2) {
        $this->epargneSal_Mnt2 = $epargneSal_Mnt2;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt3.
     *
     * @param float $epargneSal_Mnt3 The epargne sal_ mnt3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setEpargneSal_Mnt3($epargneSal_Mnt3) {
        $this->epargneSal_Mnt3 = $epargneSal_Mnt3;
        return $this;
    }

    /**
     * Set the epargne sal_ mnt4.
     *
     * @param float $epargneSal_Mnt4 The epargne sal_ mnt4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setEpargneSal_Mnt4($epargneSal_Mnt4) {
        $this->epargneSal_Mnt4 = $epargneSal_Mnt4;
        return $this;
    }

    /**
     * Set the g p e c_ mnt exo c s g c r d s.
     *
     * @param float $gPEC_MntExoCSGCRDS The g p e c_ mnt exo c s g c r d s.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setGPEC_MntExoCSGCRDS($gPEC_MntExoCSGCRDS) {
        $this->gPEC_MntExoCSGCRDS = $gPEC_MntExoCSGCRDS;
        return $this;
    }

    /**
     * Set the g p e c_ mnt exo cot secu.
     *
     * @param float $gPEC_MntExoCotSecu The g p e c_ mnt exo cot secu.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setGPEC_MntExoCotSecu($gPEC_MntExoCotSecu) {
        $this->gPEC_MntExoCotSecu = $gPEC_MntExoCotSecu;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float $indCp The ind cp.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndCp($indCp) {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float $indemnCpPlaf The indemn cp plaf.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndemnCpPlaf($indemnCpPlaf) {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn impat.
     *
     * @param float $indemnImpat The indemn impat.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndemnImpat($indemnImpat) {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }

    /**
     * Set the indemn rupture_ mnt1.
     *
     * @param float $indemnRupture_Mnt1 The indemn rupture_ mnt1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndemnRupture_Mnt1($indemnRupture_Mnt1) {
        $this->indemnRupture_Mnt1 = $indemnRupture_Mnt1;
        return $this;
    }

    /**
     * Set the indemn rupture_ mnt2.
     *
     * @param float $indemnRupture_Mnt2 The indemn rupture_ mnt2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndemnRupture_Mnt2($indemnRupture_Mnt2) {
        $this->indemnRupture_Mnt2 = $indemnRupture_Mnt2;
        return $this;
    }

    /**
     * Set the indice rectif.
     *
     * @param int $indiceRectif The indice rectif.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setIndiceRectif($indiceRectif) {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float $montantBPlaf The montant b plaf.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBPlaf($montantBPlaf) {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float $montantBPlaf2 The montant b plaf2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBPlaf2($montantBPlaf2) {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float $montantBPlaf3 The montant b plaf3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBPlaf3($montantBPlaf3) {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float $montantBPlaf4 The montant b plaf4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBPlaf4($montantBPlaf4) {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float $montantBPlaf5 The montant b plaf5.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBPlaf5($montantBPlaf5) {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float $montantBrut The montant brut.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBrut($montantBrut) {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float $montantBrut2 The montant brut2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBrut2($montantBrut2) {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float $montantBrut3 The montant brut3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBrut3($montantBrut3) {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float $montantBrut4 The montant brut4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBrut4($montantBrut4) {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float $montantBrut5 The montant brut5.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantBrut5($montantBrut5) {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolBrut($montantSommeIsolBrut) {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolBrut2($montantSommeIsolBrut2) {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolBrut3($montantSommeIsolBrut3) {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolBrut4($montantSommeIsolBrut4) {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolBrut5($montantSommeIsolBrut5) {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolPlaf($montantSommeIsolPlaf) {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolPlaf2($montantSommeIsolPlaf2) {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolPlaf3($montantSommeIsolPlaf3) {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolPlaf4($montantSommeIsolPlaf4) {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setMontantSommeIsolPlaf5($montantSommeIsolPlaf5) {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the particip patron avtge_ mnt1.
     *
     * @param float $participPatronAvtge_Mnt1 The particip patron avtge_ mnt1.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setParticipPatronAvtge_Mnt1($participPatronAvtge_Mnt1) {
        $this->participPatronAvtge_Mnt1 = $participPatronAvtge_Mnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge_ mnt2.
     *
     * @param float $participPatronAvtge_Mnt2 The particip patron avtge_ mnt2.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setParticipPatronAvtge_Mnt2($participPatronAvtge_Mnt2) {
        $this->participPatronAvtge_Mnt2 = $participPatronAvtge_Mnt2;
        return $this;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float $participServPers The particip serv pers.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setParticipServPers($participServPers) {
        $this->participServPers = $participServPers;
        return $this;
    }

    /**
     * Set the t d s100.
     *
     * @param float $tDS100 The t d s100.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS100($tDS100) {
        $this->tDS100 = $tDS100;
        return $this;
    }

    /**
     * Set the t d s103.
     *
     * @param float $tDS103 The t d s103.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS103($tDS103) {
        $this->tDS103 = $tDS103;
        return $this;
    }

    /**
     * Set the t d s105.
     *
     * @param float $tDS105 The t d s105.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS105($tDS105) {
        $this->tDS105 = $tDS105;
        return $this;
    }

    /**
     * Set the t d s107.
     *
     * @param boolean $tDS107 The t d s107.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS107($tDS107) {
        $this->tDS107 = $tDS107;
        return $this;
    }

    /**
     * Set the t d s108.
     *
     * @param boolean $tDS108 The t d s108.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS108($tDS108) {
        $this->tDS108 = $tDS108;
        return $this;
    }

    /**
     * Set the t d s109.
     *
     * @param boolean $tDS109 The t d s109.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS109($tDS109) {
        $this->tDS109 = $tDS109;
        return $this;
    }

    /**
     * Set the t d s110.
     *
     * @param boolean $tDS110 The t d s110.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS110($tDS110) {
        $this->tDS110 = $tDS110;
        return $this;
    }

    /**
     * Set the t d s111.
     *
     * @param boolean $tDS111 The t d s111.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS111($tDS111) {
        $this->tDS111 = $tDS111;
        return $this;
    }

    /**
     * Set the t d s112.
     *
     * @param float $tDS112 The t d s112.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS112($tDS112) {
        $this->tDS112 = $tDS112;
        return $this;
    }

    /**
     * Set the t d s113.
     *
     * @param boolean $tDS113 The t d s113.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS113($tDS113) {
        $this->tDS113 = $tDS113;
        return $this;
    }

    /**
     * Set the t d s117.
     *
     * @param float $tDS117 The t d s117.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS117($tDS117) {
        $this->tDS117 = $tDS117;
        return $this;
    }

    /**
     * Set the t d s119.
     *
     * @param boolean $tDS119 The t d s119.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS119($tDS119) {
        $this->tDS119 = $tDS119;
        return $this;
    }

    /**
     * Set the t d s120.
     *
     * @param boolean $tDS120 The t d s120.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS120($tDS120) {
        $this->tDS120 = $tDS120;
        return $this;
    }

    /**
     * Set the t d s121.
     *
     * @param boolean $tDS121 The t d s121.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS121($tDS121) {
        $this->tDS121 = $tDS121;
        return $this;
    }

    /**
     * Set the t d s122.
     *
     * @param boolean $tDS122 The t d s122.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS122($tDS122) {
        $this->tDS122 = $tDS122;
        return $this;
    }

    /**
     * Set the t d s125.
     *
     * @param float $tDS125 The t d s125.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS125($tDS125) {
        $this->tDS125 = $tDS125;
        return $this;
    }

    /**
     * Set the t d s132.
     *
     * @param float $tDS132 The t d s132.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS132($tDS132) {
        $this->tDS132 = $tDS132;
        return $this;
    }

    /**
     * Set the t d s134.
     *
     * @param float $tDS134 The t d s134.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS134($tDS134) {
        $this->tDS134 = $tDS134;
        return $this;
    }

    /**
     * Set the t d s135.
     *
     * @param float $tDS135 The t d s135.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS135($tDS135) {
        $this->tDS135 = $tDS135;
        return $this;
    }

    /**
     * Set the t d s136.
     *
     * @param float $tDS136 The t d s136.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS136($tDS136) {
        $this->tDS136 = $tDS136;
        return $this;
    }

    /**
     * Set the t d s141.
     *
     * @param float $tDS141 The t d s141.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS141($tDS141) {
        $this->tDS141 = $tDS141;
        return $this;
    }

    /**
     * Set the t d s81.
     *
     * @param float $tDS81 The t d s81.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS81($tDS81) {
        $this->tDS81 = $tDS81;
        return $this;
    }

    /**
     * Set the t d s82.
     *
     * @param float $tDS82 The t d s82.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTDS82($tDS82) {
        $this->tDS82 = $tDS82;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float $taxeSalaire The taxe salaire.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tds137.
     *
     * @param float $tds137 The tds137.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTds137($tds137) {
        $this->tds137 = $tds137;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the total plaf.
     *
     * @param float $totalPlaf The total plaf.
     * @return EmpDADSURectif Returns this emp d a d s u rectif.
     */
    public function setTotalPlaf($totalPlaf) {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }

}
