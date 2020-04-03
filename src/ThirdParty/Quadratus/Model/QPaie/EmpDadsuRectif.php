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

/**
 * Emp dadsu rectif.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuRectif {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Actions gratuites nbre.
     *
     * @var float
     */
    private $actionsGratuitesNbre;

    /**
     * Actions gratuites valeur u.
     *
     * @var float
     */
    private $actionsGratuitesValeurU;

    /**
     * Autres sommes exo mnt1.
     *
     * @var float
     */
    private $autresSommesExoMnt1;

    /**
     * Autres sommes exo mnt2.
     *
     * @var float
     */
    private $autresSommesExoMnt2;

    /**
     * Autres sommes exo mnt3.
     *
     * @var float
     */
    private $autresSommesExoMnt3;

    /**
     * Autres sommes exo mnt4.
     *
     * @var float
     */
    private $autresSommesExoMnt4;

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
     * Epargne sal mnt1.
     *
     * @var float
     */
    private $epargneSalMnt1;

    /**
     * Epargne sal mnt2.
     *
     * @var float
     */
    private $epargneSalMnt2;

    /**
     * Epargne sal mnt3.
     *
     * @var float
     */
    private $epargneSalMnt3;

    /**
     * Epargne sal mnt4.
     *
     * @var float
     */
    private $epargneSalMnt4;

    /**
     * Gpec mnt exo cot secu.
     *
     * @var float
     */
    private $gpecMntExoCotSecu;

    /**
     * Gpec mnt exo csgcrds.
     *
     * @var float
     */
    private $gpecMntExoCsgcrds;

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
     * Indemn rupture mnt1.
     *
     * @var float
     */
    private $indemnRuptureMnt1;

    /**
     * Indemn rupture mnt2.
     *
     * @var float
     */
    private $indemnRuptureMnt2;

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
     * Particip patron avtge mnt1.
     *
     * @var float
     */
    private $participPatronAvtgeMnt1;

    /**
     * Particip patron avtge mnt2.
     *
     * @var float
     */
    private $participPatronAvtgeMnt2;

    /**
     * Particip serv pers.
     *
     * @var float
     */
    private $participServPers;

    /**
     * Taxe salaire.
     *
     * @var float
     */
    private $taxeSalaire;

    /**
     * Tds100.
     *
     * @var float
     */
    private $tds100;

    /**
     * Tds103.
     *
     * @var float
     */
    private $tds103;

    /**
     * Tds105.
     *
     * @var float
     */
    private $tds105;

    /**
     * Tds107.
     *
     * @var bool
     */
    private $tds107;

    /**
     * Tds108.
     *
     * @var bool
     */
    private $tds108;

    /**
     * Tds109.
     *
     * @var bool
     */
    private $tds109;

    /**
     * Tds110.
     *
     * @var bool
     */
    private $tds110;

    /**
     * Tds111.
     *
     * @var bool
     */
    private $tds111;

    /**
     * Tds112.
     *
     * @var float
     */
    private $tds112;

    /**
     * Tds113.
     *
     * @var bool
     */
    private $tds113;

    /**
     * Tds117.
     *
     * @var float
     */
    private $tds117;

    /**
     * Tds119.
     *
     * @var bool
     */
    private $tds119;

    /**
     * Tds120.
     *
     * @var bool
     */
    private $tds120;

    /**
     * Tds121.
     *
     * @var bool
     */
    private $tds121;

    /**
     * Tds122.
     *
     * @var bool
     */
    private $tds122;

    /**
     * Tds125.
     *
     * @var float
     */
    private $tds125;

    /**
     * Tds132.
     *
     * @var float
     */
    private $tds132;

    /**
     * Tds134.
     *
     * @var float
     */
    private $tds134;

    /**
     * Tds135.
     *
     * @var float
     */
    private $tds135;

    /**
     * Tds136.
     *
     * @var float
     */
    private $tds136;

    /**
     * Tds137.
     *
     * @var float
     */
    private $tds137;

    /**
     * Tds141.
     *
     * @var float
     */
    private $tds141;

    /**
     * Tds142.
     *
     * @var float
     */
    private $tds142;

    /**
     * Tds81.
     *
     * @var float
     */
    private $tds81;

    /**
     * Tds82.
     *
     * @var float
     */
    private $tds82;

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
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the actions gratuites nbre.
     *
     * @return float Returns the actions gratuites nbre.
     */
    public function getActionsGratuitesNbre() {
        return $this->actionsGratuitesNbre;
    }

    /**
     * Get the actions gratuites valeur u.
     *
     * @return float Returns the actions gratuites valeur u.
     */
    public function getActionsGratuitesValeurU() {
        return $this->actionsGratuitesValeurU;
    }

    /**
     * Get the autres sommes exo mnt1.
     *
     * @return float Returns the autres sommes exo mnt1.
     */
    public function getAutresSommesExoMnt1() {
        return $this->autresSommesExoMnt1;
    }

    /**
     * Get the autres sommes exo mnt2.
     *
     * @return float Returns the autres sommes exo mnt2.
     */
    public function getAutresSommesExoMnt2() {
        return $this->autresSommesExoMnt2;
    }

    /**
     * Get the autres sommes exo mnt3.
     *
     * @return float Returns the autres sommes exo mnt3.
     */
    public function getAutresSommesExoMnt3() {
        return $this->autresSommesExoMnt3;
    }

    /**
     * Get the autres sommes exo mnt4.
     *
     * @return float Returns the autres sommes exo mnt4.
     */
    public function getAutresSommesExoMnt4() {
        return $this->autresSommesExoMnt4;
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
     * Get the epargne sal mnt1.
     *
     * @return float Returns the epargne sal mnt1.
     */
    public function getEpargneSalMnt1() {
        return $this->epargneSalMnt1;
    }

    /**
     * Get the epargne sal mnt2.
     *
     * @return float Returns the epargne sal mnt2.
     */
    public function getEpargneSalMnt2() {
        return $this->epargneSalMnt2;
    }

    /**
     * Get the epargne sal mnt3.
     *
     * @return float Returns the epargne sal mnt3.
     */
    public function getEpargneSalMnt3() {
        return $this->epargneSalMnt3;
    }

    /**
     * Get the epargne sal mnt4.
     *
     * @return float Returns the epargne sal mnt4.
     */
    public function getEpargneSalMnt4() {
        return $this->epargneSalMnt4;
    }

    /**
     * Get the gpec mnt exo cot secu.
     *
     * @return float Returns the gpec mnt exo cot secu.
     */
    public function getGpecMntExoCotSecu() {
        return $this->gpecMntExoCotSecu;
    }

    /**
     * Get the gpec mnt exo csgcrds.
     *
     * @return float Returns the gpec mnt exo csgcrds.
     */
    public function getGpecMntExoCsgcrds() {
        return $this->gpecMntExoCsgcrds;
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
     * Get the indemn rupture mnt1.
     *
     * @return float Returns the indemn rupture mnt1.
     */
    public function getIndemnRuptureMnt1() {
        return $this->indemnRuptureMnt1;
    }

    /**
     * Get the indemn rupture mnt2.
     *
     * @return float Returns the indemn rupture mnt2.
     */
    public function getIndemnRuptureMnt2() {
        return $this->indemnRuptureMnt2;
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
     * Get the particip patron avtge mnt1.
     *
     * @return float Returns the particip patron avtge mnt1.
     */
    public function getParticipPatronAvtgeMnt1() {
        return $this->participPatronAvtgeMnt1;
    }

    /**
     * Get the particip patron avtge mnt2.
     *
     * @return float Returns the particip patron avtge mnt2.
     */
    public function getParticipPatronAvtgeMnt2() {
        return $this->participPatronAvtgeMnt2;
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
     * Get the taxe salaire.
     *
     * @return float Returns the taxe salaire.
     */
    public function getTaxeSalaire() {
        return $this->taxeSalaire;
    }

    /**
     * Get the tds100.
     *
     * @return float Returns the tds100.
     */
    public function getTds100() {
        return $this->tds100;
    }

    /**
     * Get the tds103.
     *
     * @return float Returns the tds103.
     */
    public function getTds103() {
        return $this->tds103;
    }

    /**
     * Get the tds105.
     *
     * @return float Returns the tds105.
     */
    public function getTds105() {
        return $this->tds105;
    }

    /**
     * Get the tds107.
     *
     * @return bool Returns the tds107.
     */
    public function getTds107() {
        return $this->tds107;
    }

    /**
     * Get the tds108.
     *
     * @return bool Returns the tds108.
     */
    public function getTds108() {
        return $this->tds108;
    }

    /**
     * Get the tds109.
     *
     * @return bool Returns the tds109.
     */
    public function getTds109() {
        return $this->tds109;
    }

    /**
     * Get the tds110.
     *
     * @return bool Returns the tds110.
     */
    public function getTds110() {
        return $this->tds110;
    }

    /**
     * Get the tds111.
     *
     * @return bool Returns the tds111.
     */
    public function getTds111() {
        return $this->tds111;
    }

    /**
     * Get the tds112.
     *
     * @return float Returns the tds112.
     */
    public function getTds112() {
        return $this->tds112;
    }

    /**
     * Get the tds113.
     *
     * @return bool Returns the tds113.
     */
    public function getTds113() {
        return $this->tds113;
    }

    /**
     * Get the tds117.
     *
     * @return float Returns the tds117.
     */
    public function getTds117() {
        return $this->tds117;
    }

    /**
     * Get the tds119.
     *
     * @return bool Returns the tds119.
     */
    public function getTds119() {
        return $this->tds119;
    }

    /**
     * Get the tds120.
     *
     * @return bool Returns the tds120.
     */
    public function getTds120() {
        return $this->tds120;
    }

    /**
     * Get the tds121.
     *
     * @return bool Returns the tds121.
     */
    public function getTds121() {
        return $this->tds121;
    }

    /**
     * Get the tds122.
     *
     * @return bool Returns the tds122.
     */
    public function getTds122() {
        return $this->tds122;
    }

    /**
     * Get the tds125.
     *
     * @return float Returns the tds125.
     */
    public function getTds125() {
        return $this->tds125;
    }

    /**
     * Get the tds132.
     *
     * @return float Returns the tds132.
     */
    public function getTds132() {
        return $this->tds132;
    }

    /**
     * Get the tds134.
     *
     * @return float Returns the tds134.
     */
    public function getTds134() {
        return $this->tds134;
    }

    /**
     * Get the tds135.
     *
     * @return float Returns the tds135.
     */
    public function getTds135() {
        return $this->tds135;
    }

    /**
     * Get the tds136.
     *
     * @return float Returns the tds136.
     */
    public function getTds136() {
        return $this->tds136;
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
     * Get the tds141.
     *
     * @return float Returns the tds141.
     */
    public function getTds141() {
        return $this->tds141;
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
     * Get the tds81.
     *
     * @return float Returns the tds81.
     */
    public function getTds81() {
        return $this->tds81;
    }

    /**
     * Get the tds82.
     *
     * @return float Returns the tds82.
     */
    public function getTds82() {
        return $this->tds82;
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
     * @param bool $actif The actif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the actions gratuites nbre.
     *
     * @param float $actionsGratuitesNbre The actions gratuites nbre.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActionsGratuitesNbre($actionsGratuitesNbre) {
        $this->actionsGratuitesNbre = $actionsGratuitesNbre;
        return $this;
    }

    /**
     * Set the actions gratuites valeur u.
     *
     * @param float $actionsGratuitesValeurU The actions gratuites valeur u.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setActionsGratuitesValeurU($actionsGratuitesValeurU) {
        $this->actionsGratuitesValeurU = $actionsGratuitesValeurU;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt1.
     *
     * @param float $autresSommesExoMnt1 The autres sommes exo mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt1($autresSommesExoMnt1) {
        $this->autresSommesExoMnt1 = $autresSommesExoMnt1;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt2.
     *
     * @param float $autresSommesExoMnt2 The autres sommes exo mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt2($autresSommesExoMnt2) {
        $this->autresSommesExoMnt2 = $autresSommesExoMnt2;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt3.
     *
     * @param float $autresSommesExoMnt3 The autres sommes exo mnt3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt3($autresSommesExoMnt3) {
        $this->autresSommesExoMnt3 = $autresSommesExoMnt3;
        return $this;
    }

    /**
     * Set the autres sommes exo mnt4.
     *
     * @param float $autresSommesExoMnt4 The autres sommes exo mnt4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setAutresSommesExoMnt4($autresSommesExoMnt4) {
        $this->autresSommesExoMnt4 = $autresSommesExoMnt4;
        return $this;
    }

    /**
     * Set the base exo brut1.
     *
     * @param float $baseExoBrut1 The base exo brut1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut1($baseExoBrut1) {
        $this->baseExoBrut1 = $baseExoBrut1;
        return $this;
    }

    /**
     * Set the base exo brut2.
     *
     * @param float $baseExoBrut2 The base exo brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut2($baseExoBrut2) {
        $this->baseExoBrut2 = $baseExoBrut2;
        return $this;
    }

    /**
     * Set the base exo brut3.
     *
     * @param float $baseExoBrut3 The base exo brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoBrut3($baseExoBrut3) {
        $this->baseExoBrut3 = $baseExoBrut3;
        return $this;
    }

    /**
     * Set the base exo plaf1.
     *
     * @param float $baseExoPlaf1 The base exo plaf1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf1($baseExoPlaf1) {
        $this->baseExoPlaf1 = $baseExoPlaf1;
        return $this;
    }

    /**
     * Set the base exo plaf2.
     *
     * @param float $baseExoPlaf2 The base exo plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf2($baseExoPlaf2) {
        $this->baseExoPlaf2 = $baseExoPlaf2;
        return $this;
    }

    /**
     * Set the base exo plaf3.
     *
     * @param float $baseExoPlaf3 The base exo plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setBaseExoPlaf3($baseExoPlaf3) {
        $this->baseExoPlaf3 = $baseExoPlaf3;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the csg specif.
     *
     * @param float $csgSpecif The csg specif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setCsgSpecif($csgSpecif) {
        $this->csgSpecif = $csgSpecif;
        return $this;
    }

    /**
     * Set the epargne sal mnt1.
     *
     * @param float $epargneSalMnt1 The epargne sal mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt1($epargneSalMnt1) {
        $this->epargneSalMnt1 = $epargneSalMnt1;
        return $this;
    }

    /**
     * Set the epargne sal mnt2.
     *
     * @param float $epargneSalMnt2 The epargne sal mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt2($epargneSalMnt2) {
        $this->epargneSalMnt2 = $epargneSalMnt2;
        return $this;
    }

    /**
     * Set the epargne sal mnt3.
     *
     * @param float $epargneSalMnt3 The epargne sal mnt3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt3($epargneSalMnt3) {
        $this->epargneSalMnt3 = $epargneSalMnt3;
        return $this;
    }

    /**
     * Set the epargne sal mnt4.
     *
     * @param float $epargneSalMnt4 The epargne sal mnt4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setEpargneSalMnt4($epargneSalMnt4) {
        $this->epargneSalMnt4 = $epargneSalMnt4;
        return $this;
    }

    /**
     * Set the gpec mnt exo cot secu.
     *
     * @param float $gpecMntExoCotSecu The gpec mnt exo cot secu.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setGpecMntExoCotSecu($gpecMntExoCotSecu) {
        $this->gpecMntExoCotSecu = $gpecMntExoCotSecu;
        return $this;
    }

    /**
     * Set the gpec mnt exo csgcrds.
     *
     * @param float $gpecMntExoCsgcrds The gpec mnt exo csgcrds.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setGpecMntExoCsgcrds($gpecMntExoCsgcrds) {
        $this->gpecMntExoCsgcrds = $gpecMntExoCsgcrds;
        return $this;
    }

    /**
     * Set the ind cp.
     *
     * @param float $indCp The ind cp.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndCp($indCp) {
        $this->indCp = $indCp;
        return $this;
    }

    /**
     * Set the indemn cp plaf.
     *
     * @param float $indemnCpPlaf The indemn cp plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnCpPlaf($indemnCpPlaf) {
        $this->indemnCpPlaf = $indemnCpPlaf;
        return $this;
    }

    /**
     * Set the indemn impat.
     *
     * @param float $indemnImpat The indemn impat.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnImpat($indemnImpat) {
        $this->indemnImpat = $indemnImpat;
        return $this;
    }

    /**
     * Set the indemn rupture mnt1.
     *
     * @param float $indemnRuptureMnt1 The indemn rupture mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnRuptureMnt1($indemnRuptureMnt1) {
        $this->indemnRuptureMnt1 = $indemnRuptureMnt1;
        return $this;
    }

    /**
     * Set the indemn rupture mnt2.
     *
     * @param float $indemnRuptureMnt2 The indemn rupture mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndemnRuptureMnt2($indemnRuptureMnt2) {
        $this->indemnRuptureMnt2 = $indemnRuptureMnt2;
        return $this;
    }

    /**
     * Set the indice rectif.
     *
     * @param int $indiceRectif The indice rectif.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setIndiceRectif($indiceRectif) {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }

    /**
     * Set the montant b plaf.
     *
     * @param float $montantBPlaf The montant b plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf($montantBPlaf) {
        $this->montantBPlaf = $montantBPlaf;
        return $this;
    }

    /**
     * Set the montant b plaf2.
     *
     * @param float $montantBPlaf2 The montant b plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf2($montantBPlaf2) {
        $this->montantBPlaf2 = $montantBPlaf2;
        return $this;
    }

    /**
     * Set the montant b plaf3.
     *
     * @param float $montantBPlaf3 The montant b plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf3($montantBPlaf3) {
        $this->montantBPlaf3 = $montantBPlaf3;
        return $this;
    }

    /**
     * Set the montant b plaf4.
     *
     * @param float $montantBPlaf4 The montant b plaf4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf4($montantBPlaf4) {
        $this->montantBPlaf4 = $montantBPlaf4;
        return $this;
    }

    /**
     * Set the montant b plaf5.
     *
     * @param float $montantBPlaf5 The montant b plaf5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBPlaf5($montantBPlaf5) {
        $this->montantBPlaf5 = $montantBPlaf5;
        return $this;
    }

    /**
     * Set the montant brut.
     *
     * @param float $montantBrut The montant brut.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut($montantBrut) {
        $this->montantBrut = $montantBrut;
        return $this;
    }

    /**
     * Set the montant brut2.
     *
     * @param float $montantBrut2 The montant brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut2($montantBrut2) {
        $this->montantBrut2 = $montantBrut2;
        return $this;
    }

    /**
     * Set the montant brut3.
     *
     * @param float $montantBrut3 The montant brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut3($montantBrut3) {
        $this->montantBrut3 = $montantBrut3;
        return $this;
    }

    /**
     * Set the montant brut4.
     *
     * @param float $montantBrut4 The montant brut4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut4($montantBrut4) {
        $this->montantBrut4 = $montantBrut4;
        return $this;
    }

    /**
     * Set the montant brut5.
     *
     * @param float $montantBrut5 The montant brut5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantBrut5($montantBrut5) {
        $this->montantBrut5 = $montantBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol brut.
     *
     * @param float $montantSommeIsolBrut The montant somme isol brut.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut($montantSommeIsolBrut) {
        $this->montantSommeIsolBrut = $montantSommeIsolBrut;
        return $this;
    }

    /**
     * Set the montant somme isol brut2.
     *
     * @param float $montantSommeIsolBrut2 The montant somme isol brut2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut2($montantSommeIsolBrut2) {
        $this->montantSommeIsolBrut2 = $montantSommeIsolBrut2;
        return $this;
    }

    /**
     * Set the montant somme isol brut3.
     *
     * @param float $montantSommeIsolBrut3 The montant somme isol brut3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut3($montantSommeIsolBrut3) {
        $this->montantSommeIsolBrut3 = $montantSommeIsolBrut3;
        return $this;
    }

    /**
     * Set the montant somme isol brut4.
     *
     * @param float $montantSommeIsolBrut4 The montant somme isol brut4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut4($montantSommeIsolBrut4) {
        $this->montantSommeIsolBrut4 = $montantSommeIsolBrut4;
        return $this;
    }

    /**
     * Set the montant somme isol brut5.
     *
     * @param float $montantSommeIsolBrut5 The montant somme isol brut5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolBrut5($montantSommeIsolBrut5) {
        $this->montantSommeIsolBrut5 = $montantSommeIsolBrut5;
        return $this;
    }

    /**
     * Set the montant somme isol plaf.
     *
     * @param float $montantSommeIsolPlaf The montant somme isol plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf($montantSommeIsolPlaf) {
        $this->montantSommeIsolPlaf = $montantSommeIsolPlaf;
        return $this;
    }

    /**
     * Set the montant somme isol plaf2.
     *
     * @param float $montantSommeIsolPlaf2 The montant somme isol plaf2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf2($montantSommeIsolPlaf2) {
        $this->montantSommeIsolPlaf2 = $montantSommeIsolPlaf2;
        return $this;
    }

    /**
     * Set the montant somme isol plaf3.
     *
     * @param float $montantSommeIsolPlaf3 The montant somme isol plaf3.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf3($montantSommeIsolPlaf3) {
        $this->montantSommeIsolPlaf3 = $montantSommeIsolPlaf3;
        return $this;
    }

    /**
     * Set the montant somme isol plaf4.
     *
     * @param float $montantSommeIsolPlaf4 The montant somme isol plaf4.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf4($montantSommeIsolPlaf4) {
        $this->montantSommeIsolPlaf4 = $montantSommeIsolPlaf4;
        return $this;
    }

    /**
     * Set the montant somme isol plaf5.
     *
     * @param float $montantSommeIsolPlaf5 The montant somme isol plaf5.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setMontantSommeIsolPlaf5($montantSommeIsolPlaf5) {
        $this->montantSommeIsolPlaf5 = $montantSommeIsolPlaf5;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero ordre.
     *
     * @param int $numeroOrdre The numero ordre.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setNumeroOrdre($numeroOrdre) {
        $this->numeroOrdre = $numeroOrdre;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt1.
     *
     * @param float $participPatronAvtgeMnt1 The particip patron avtge mnt1.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipPatronAvtgeMnt1($participPatronAvtgeMnt1) {
        $this->participPatronAvtgeMnt1 = $participPatronAvtgeMnt1;
        return $this;
    }

    /**
     * Set the particip patron avtge mnt2.
     *
     * @param float $participPatronAvtgeMnt2 The particip patron avtge mnt2.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipPatronAvtgeMnt2($participPatronAvtgeMnt2) {
        $this->participPatronAvtgeMnt2 = $participPatronAvtgeMnt2;
        return $this;
    }

    /**
     * Set the particip serv pers.
     *
     * @param float $participServPers The particip serv pers.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setParticipServPers($participServPers) {
        $this->participServPers = $participServPers;
        return $this;
    }

    /**
     * Set the taxe salaire.
     *
     * @param float $taxeSalaire The taxe salaire.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTaxeSalaire($taxeSalaire) {
        $this->taxeSalaire = $taxeSalaire;
        return $this;
    }

    /**
     * Set the tds100.
     *
     * @param float $tds100 The tds100.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds100($tds100) {
        $this->tds100 = $tds100;
        return $this;
    }

    /**
     * Set the tds103.
     *
     * @param float $tds103 The tds103.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds103($tds103) {
        $this->tds103 = $tds103;
        return $this;
    }

    /**
     * Set the tds105.
     *
     * @param float $tds105 The tds105.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds105($tds105) {
        $this->tds105 = $tds105;
        return $this;
    }

    /**
     * Set the tds107.
     *
     * @param bool $tds107 The tds107.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds107($tds107) {
        $this->tds107 = $tds107;
        return $this;
    }

    /**
     * Set the tds108.
     *
     * @param bool $tds108 The tds108.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds108($tds108) {
        $this->tds108 = $tds108;
        return $this;
    }

    /**
     * Set the tds109.
     *
     * @param bool $tds109 The tds109.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds109($tds109) {
        $this->tds109 = $tds109;
        return $this;
    }

    /**
     * Set the tds110.
     *
     * @param bool $tds110 The tds110.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds110($tds110) {
        $this->tds110 = $tds110;
        return $this;
    }

    /**
     * Set the tds111.
     *
     * @param bool $tds111 The tds111.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds111($tds111) {
        $this->tds111 = $tds111;
        return $this;
    }

    /**
     * Set the tds112.
     *
     * @param float $tds112 The tds112.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds112($tds112) {
        $this->tds112 = $tds112;
        return $this;
    }

    /**
     * Set the tds113.
     *
     * @param bool $tds113 The tds113.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds113($tds113) {
        $this->tds113 = $tds113;
        return $this;
    }

    /**
     * Set the tds117.
     *
     * @param float $tds117 The tds117.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds117($tds117) {
        $this->tds117 = $tds117;
        return $this;
    }

    /**
     * Set the tds119.
     *
     * @param bool $tds119 The tds119.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds119($tds119) {
        $this->tds119 = $tds119;
        return $this;
    }

    /**
     * Set the tds120.
     *
     * @param bool $tds120 The tds120.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds120($tds120) {
        $this->tds120 = $tds120;
        return $this;
    }

    /**
     * Set the tds121.
     *
     * @param bool $tds121 The tds121.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds121($tds121) {
        $this->tds121 = $tds121;
        return $this;
    }

    /**
     * Set the tds122.
     *
     * @param bool $tds122 The tds122.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds122($tds122) {
        $this->tds122 = $tds122;
        return $this;
    }

    /**
     * Set the tds125.
     *
     * @param float $tds125 The tds125.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds125($tds125) {
        $this->tds125 = $tds125;
        return $this;
    }

    /**
     * Set the tds132.
     *
     * @param float $tds132 The tds132.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds132($tds132) {
        $this->tds132 = $tds132;
        return $this;
    }

    /**
     * Set the tds134.
     *
     * @param float $tds134 The tds134.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds134($tds134) {
        $this->tds134 = $tds134;
        return $this;
    }

    /**
     * Set the tds135.
     *
     * @param float $tds135 The tds135.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds135($tds135) {
        $this->tds135 = $tds135;
        return $this;
    }

    /**
     * Set the tds136.
     *
     * @param float $tds136 The tds136.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds136($tds136) {
        $this->tds136 = $tds136;
        return $this;
    }

    /**
     * Set the tds137.
     *
     * @param float $tds137 The tds137.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds137($tds137) {
        $this->tds137 = $tds137;
        return $this;
    }

    /**
     * Set the tds141.
     *
     * @param float $tds141 The tds141.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds141($tds141) {
        $this->tds141 = $tds141;
        return $this;
    }

    /**
     * Set the tds142.
     *
     * @param float $tds142 The tds142.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds142($tds142) {
        $this->tds142 = $tds142;
        return $this;
    }

    /**
     * Set the tds81.
     *
     * @param float $tds81 The tds81.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds81($tds81) {
        $this->tds81 = $tds81;
        return $this;
    }

    /**
     * Set the tds82.
     *
     * @param float $tds82 The tds82.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTds82($tds82) {
        $this->tds82 = $tds82;
        return $this;
    }

    /**
     * Set the tds alloc retraite.
     *
     * @param float $tdsAllocRetraite The tds alloc retraite.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTdsAllocRetraite($tdsAllocRetraite) {
        $this->tdsAllocRetraite = $tdsAllocRetraite;
        return $this;
    }

    /**
     * Set the total plaf.
     *
     * @param float $totalPlaf The total plaf.
     * @return EmpDadsuRectif Returns this Emp dadsu rectif.
     */
    public function setTotalPlaf($totalPlaf) {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }
}
