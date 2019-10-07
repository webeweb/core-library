<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dec tva c a12 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaCA12 {

    /**
     * Date cession.
     *
     * @var DateTime
     */
    private $dateCession;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Tx imposition.
     *
     * @var float
     */
    private $txImposition;

    /**
     * Type c a12.
     *
     * @var string
     */
    private $typeCA12;

    /**
     * z0008.
     *
     * @var float
     */
    private $z0008;

    /**
     * z0018.
     *
     * @var float
     */
    private $z0018;

    /**
     * z0019.
     *
     * @var float
     */
    private $z0019;

    /**
     * z0020.
     *
     * @var float
     */
    private $z0020;

    /**
     * z0028.
     *
     * @var float
     */
    private $z0028;

    /**
     * z0030b.
     *
     * @var float
     */
    private $z0030b;

    /**
     * z0058.
     *
     * @var float
     */
    private $z0058;

    /**
     * z0704.
     *
     * @var float
     */
    private $z0704;

    /**
     * z0709.
     *
     * @var float
     */
    private $z0709;

    /**
     * z0970.
     *
     * @var float
     */
    private $z0970;

    /**
     * z0970b.
     *
     * @var float
     */
    private $z0970b;

    /**
     * z0980.
     *
     * @var float
     */
    private $z0980;

    /**
     * z0980b.
     *
     * @var float
     */
    private $z0980b;

    /**
     * z0981.
     *
     * @var float
     */
    private $z0981;

    /**
     * z0981b.
     *
     * @var float
     */
    private $z0981b;

    /**
     * z0982.
     *
     * @var float
     */
    private $z0982;

    /**
     * z0983.
     *
     * @var float
     */
    private $z0983;

    /**
     * z3240.
     *
     * @var float
     */
    private $z3240;

    /**
     * z32 code.
     *
     * @var string
     */
    private $z32Code;

    /**
     * z32 libelle.
     *
     * @var string
     */
    private $z32Libelle;

    /**
     * z32 taxe.
     *
     * @var float
     */
    private $z32Taxe;

    /**
     * z35 b code.
     *
     * @var string
     */
    private $z35BCode;

    /**
     * z35 b libelle.
     *
     * @var string
     */
    private $z35BLibelle;

    /**
     * z35 b taxe.
     *
     * @var float
     */
    private $z35BTaxe;

    /**
     * z35 code.
     *
     * @var string
     */
    private $z35Code;

    /**
     * z35 libelle.
     *
     * @var string
     */
    private $z35Libelle;

    /**
     * z35 taxe.
     *
     * @var float
     */
    private $z35Taxe;

    /**
     * z4202.
     *
     * @var float
     */
    private $z4202;

    /**
     * z4213.
     *
     * @var float
     */
    private $z4213;

    /**
     * z4216.
     *
     * @var float
     */
    private $z4216;

    /**
     * z4217.
     *
     * @var float
     */
    private $z4217;

    /**
     * z4218.
     *
     * @var float
     */
    private $z4218;

    /**
     * z4220.
     *
     * @var float
     */
    private $z4220;

    /**
     * z45 c a12.
     *
     * @var float
     */
    private $z45CA12;

    /**
     * z45 c a12 code.
     *
     * @var string
     */
    private $z45CA12Code;

    /**
     * z45 c a12 libelle.
     *
     * @var string
     */
    private $z45CA12Libelle;

    /**
     * z47 c a12.
     *
     * @var float
     */
    private $z47CA12;

    /**
     * z47 c a12 code.
     *
     * @var string
     */
    private $z47CA12Code;

    /**
     * z47 c a12 libelle.
     *
     * @var string
     */
    private $z47CA12Libelle;

    /**
     * z4 a c a12.
     *
     * @var float
     */
    private $z4ACA12;

    /**
     * z4 a c a12 code.
     *
     * @var string
     */
    private $z4ACA12Code;

    /**
     * z4 a c a12 libelle.
     *
     * @var string
     */
    private $z4ACA12Libelle;

    /**
     * z4 b c a12.
     *
     * @var float
     */
    private $z4BCA12;

    /**
     * z4 b c a12 code.
     *
     * @var string
     */
    private $z4BCA12Code;

    /**
     * z4 b c a12 libelle.
     *
     * @var string
     */
    private $z4BCA12Libelle;

    /**
     * z4 c c a12.
     *
     * @var float
     */
    private $z4CCA12;

    /**
     * z4 c c a12 code.
     *
     * @var string
     */
    private $z4CCA12Code;

    /**
     * z4 c c a12 libelle.
     *
     * @var string
     */
    private $z4CCA12Libelle;

    /**
     * z5b code.
     *
     * @var string
     */
    private $z5bCode;

    /**
     * z5b h t.
     *
     * @var float
     */
    private $z5bHT;

    /**
     * z5b libelle.
     *
     * @var string
     */
    private $z5bLibelle;

    /**
     * z5b taxe.
     *
     * @var float
     */
    private $z5bTaxe;

    /**
     * z7b code.
     *
     * @var string
     */
    private $z7bCode;

    /**
     * z7b h t.
     *
     * @var float
     */
    private $z7bHT;

    /**
     * z7b libelle.
     *
     * @var string
     */
    private $z7bLibelle;

    /**
     * z7b taxe.
     *
     * @var float
     */
    private $z7bTaxe;

    /**
     * z8004.
     *
     * @var float
     */
    private $z8004;

    /**
     * z acompte deduit1.
     *
     * @var bool
     */
    private $zAcompteDeduit1;

    /**
     * z acompte deduit2.
     *
     * @var bool
     */
    private $zAcompteDeduit2;

    /**
     * z acompte deduit3.
     *
     * @var bool
     */
    private $zAcompteDeduit3;

    /**
     * z acompte deduit4.
     *
     * @var bool
     */
    private $zAcompteDeduit4;

    /**
     * z annee acompte1.
     *
     * @var int
     */
    private $zAnneeAcompte1;

    /**
     * z annee acompte2.
     *
     * @var int
     */
    private $zAnneeAcompte2;

    /**
     * z annee acompte3.
     *
     * @var int
     */
    private $zAnneeAcompte3;

    /**
     * z annee acompte4.
     *
     * @var int
     */
    private $zAnneeAcompte4;

    /**
     * z col1 acompte1.
     *
     * @var float
     */
    private $zCol1Acompte1;

    /**
     * z col1 acompte2.
     *
     * @var float
     */
    private $zCol1Acompte2;

    /**
     * z col1 acompte3.
     *
     * @var float
     */
    private $zCol1Acompte3;

    /**
     * z col1 acompte4.
     *
     * @var float
     */
    private $zCol1Acompte4;

    /**
     * z col2 acompte1.
     *
     * @var float
     */
    private $zCol2Acompte1;

    /**
     * z col2 acompte2.
     *
     * @var float
     */
    private $zCol2Acompte2;

    /**
     * z col2 acompte3.
     *
     * @var float
     */
    private $zCol2Acompte3;

    /**
     * z col2 acompte4.
     *
     * @var float
     */
    private $zCol2Acompte4;

    /**
     * z excedent versement.
     *
     * @var float
     */
    private $zExcedentVersement;

    /**
     * z nom demandeur rbt.
     *
     * @var string
     */
    private $zNomDemandeurRbt;

    /**
     * z num m s a.
     *
     * @var string
     */
    private $zNumMSA;

    /**
     * z r b t b i c.
     *
     * @var string
     */
    private $zRBTBIC;

    /**
     * z r b t i b a n.
     *
     * @var string
     */
    private $zRBTIBAN;

    /**
     * z r b t qualite.
     *
     * @var string
     */
    private $zRBTQualite;

    /**
     * z r b t r i b.
     *
     * @var string
     */
    private $zRBTRIB;

    /**
     * z r b t ville.
     *
     * @var string
     */
    private $zRBTVille;

    /**
     * z rbt demande.
     *
     * @var float
     */
    private $zRbtDemande;

    /**
     * z solde a payer.
     *
     * @var float
     */
    private $zSoldeAPayer;

    /**
     * z surface agr.
     *
     * @var int
     */
    private $zSurfaceAgr;

    /**
     * z taxes fiscales.
     *
     * @var float
     */
    private $zTaxesFiscales;

    /**
     * z ya demande rbt.
     *
     * @var bool
     */
    private $zYaDemandeRbt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the tx imposition.
     *
     * @return float Returns the tx imposition.
     */
    public function getTxImposition() {
        return $this->txImposition;
    }

    /**
     * Get the type c a12.
     *
     * @return string Returns the type c a12.
     */
    public function getTypeCA12() {
        return $this->typeCA12;
    }

    /**
     * Get the z0008.
     *
     * @return float Returns the z0008.
     */
    public function getz0008() {
        return $this->z0008;
    }

    /**
     * Get the z0018.
     *
     * @return float Returns the z0018.
     */
    public function getz0018() {
        return $this->z0018;
    }

    /**
     * Get the z0019.
     *
     * @return float Returns the z0019.
     */
    public function getz0019() {
        return $this->z0019;
    }

    /**
     * Get the z0020.
     *
     * @return float Returns the z0020.
     */
    public function getz0020() {
        return $this->z0020;
    }

    /**
     * Get the z0028.
     *
     * @return float Returns the z0028.
     */
    public function getz0028() {
        return $this->z0028;
    }

    /**
     * Get the z0030b.
     *
     * @return float Returns the z0030b.
     */
    public function getz0030b() {
        return $this->z0030b;
    }

    /**
     * Get the z0058.
     *
     * @return float Returns the z0058.
     */
    public function getz0058() {
        return $this->z0058;
    }

    /**
     * Get the z0704.
     *
     * @return float Returns the z0704.
     */
    public function getz0704() {
        return $this->z0704;
    }

    /**
     * Get the z0709.
     *
     * @return float Returns the z0709.
     */
    public function getz0709() {
        return $this->z0709;
    }

    /**
     * Get the z0970.
     *
     * @return float Returns the z0970.
     */
    public function getz0970() {
        return $this->z0970;
    }

    /**
     * Get the z0970b.
     *
     * @return float Returns the z0970b.
     */
    public function getz0970b() {
        return $this->z0970b;
    }

    /**
     * Get the z0980.
     *
     * @return float Returns the z0980.
     */
    public function getz0980() {
        return $this->z0980;
    }

    /**
     * Get the z0980b.
     *
     * @return float Returns the z0980b.
     */
    public function getz0980b() {
        return $this->z0980b;
    }

    /**
     * Get the z0981.
     *
     * @return float Returns the z0981.
     */
    public function getz0981() {
        return $this->z0981;
    }

    /**
     * Get the z0981b.
     *
     * @return float Returns the z0981b.
     */
    public function getz0981b() {
        return $this->z0981b;
    }

    /**
     * Get the z0982.
     *
     * @return float Returns the z0982.
     */
    public function getz0982() {
        return $this->z0982;
    }

    /**
     * Get the z0983.
     *
     * @return float Returns the z0983.
     */
    public function getz0983() {
        return $this->z0983;
    }

    /**
     * Get the z3240.
     *
     * @return float Returns the z3240.
     */
    public function getz3240() {
        return $this->z3240;
    }

    /**
     * Get the z32 code.
     *
     * @return string Returns the z32 code.
     */
    public function getz32Code() {
        return $this->z32Code;
    }

    /**
     * Get the z32 libelle.
     *
     * @return string Returns the z32 libelle.
     */
    public function getz32Libelle() {
        return $this->z32Libelle;
    }

    /**
     * Get the z32 taxe.
     *
     * @return float Returns the z32 taxe.
     */
    public function getz32Taxe() {
        return $this->z32Taxe;
    }

    /**
     * Get the z35 b code.
     *
     * @return string Returns the z35 b code.
     */
    public function getz35BCode() {
        return $this->z35BCode;
    }

    /**
     * Get the z35 b libelle.
     *
     * @return string Returns the z35 b libelle.
     */
    public function getz35BLibelle() {
        return $this->z35BLibelle;
    }

    /**
     * Get the z35 b taxe.
     *
     * @return float Returns the z35 b taxe.
     */
    public function getz35BTaxe() {
        return $this->z35BTaxe;
    }

    /**
     * Get the z35 code.
     *
     * @return string Returns the z35 code.
     */
    public function getz35Code() {
        return $this->z35Code;
    }

    /**
     * Get the z35 libelle.
     *
     * @return string Returns the z35 libelle.
     */
    public function getz35Libelle() {
        return $this->z35Libelle;
    }

    /**
     * Get the z35 taxe.
     *
     * @return float Returns the z35 taxe.
     */
    public function getz35Taxe() {
        return $this->z35Taxe;
    }

    /**
     * Get the z4202.
     *
     * @return float Returns the z4202.
     */
    public function getz4202() {
        return $this->z4202;
    }

    /**
     * Get the z4213.
     *
     * @return float Returns the z4213.
     */
    public function getz4213() {
        return $this->z4213;
    }

    /**
     * Get the z4216.
     *
     * @return float Returns the z4216.
     */
    public function getz4216() {
        return $this->z4216;
    }

    /**
     * Get the z4217.
     *
     * @return float Returns the z4217.
     */
    public function getz4217() {
        return $this->z4217;
    }

    /**
     * Get the z4218.
     *
     * @return float Returns the z4218.
     */
    public function getz4218() {
        return $this->z4218;
    }

    /**
     * Get the z4220.
     *
     * @return float Returns the z4220.
     */
    public function getz4220() {
        return $this->z4220;
    }

    /**
     * Get the z45 c a12.
     *
     * @return float Returns the z45 c a12.
     */
    public function getz45CA12() {
        return $this->z45CA12;
    }

    /**
     * Get the z45 c a12 code.
     *
     * @return string Returns the z45 c a12 code.
     */
    public function getz45CA12Code() {
        return $this->z45CA12Code;
    }

    /**
     * Get the z45 c a12 libelle.
     *
     * @return string Returns the z45 c a12 libelle.
     */
    public function getz45CA12Libelle() {
        return $this->z45CA12Libelle;
    }

    /**
     * Get the z47 c a12.
     *
     * @return float Returns the z47 c a12.
     */
    public function getz47CA12() {
        return $this->z47CA12;
    }

    /**
     * Get the z47 c a12 code.
     *
     * @return string Returns the z47 c a12 code.
     */
    public function getz47CA12Code() {
        return $this->z47CA12Code;
    }

    /**
     * Get the z47 c a12 libelle.
     *
     * @return string Returns the z47 c a12 libelle.
     */
    public function getz47CA12Libelle() {
        return $this->z47CA12Libelle;
    }

    /**
     * Get the z4 a c a12.
     *
     * @return float Returns the z4 a c a12.
     */
    public function getz4ACA12() {
        return $this->z4ACA12;
    }

    /**
     * Get the z4 a c a12 code.
     *
     * @return string Returns the z4 a c a12 code.
     */
    public function getz4ACA12Code() {
        return $this->z4ACA12Code;
    }

    /**
     * Get the z4 a c a12 libelle.
     *
     * @return string Returns the z4 a c a12 libelle.
     */
    public function getz4ACA12Libelle() {
        return $this->z4ACA12Libelle;
    }

    /**
     * Get the z4 b c a12.
     *
     * @return float Returns the z4 b c a12.
     */
    public function getz4BCA12() {
        return $this->z4BCA12;
    }

    /**
     * Get the z4 b c a12 code.
     *
     * @return string Returns the z4 b c a12 code.
     */
    public function getz4BCA12Code() {
        return $this->z4BCA12Code;
    }

    /**
     * Get the z4 b c a12 libelle.
     *
     * @return string Returns the z4 b c a12 libelle.
     */
    public function getz4BCA12Libelle() {
        return $this->z4BCA12Libelle;
    }

    /**
     * Get the z4 c c a12.
     *
     * @return float Returns the z4 c c a12.
     */
    public function getz4CCA12() {
        return $this->z4CCA12;
    }

    /**
     * Get the z4 c c a12 code.
     *
     * @return string Returns the z4 c c a12 code.
     */
    public function getz4CCA12Code() {
        return $this->z4CCA12Code;
    }

    /**
     * Get the z4 c c a12 libelle.
     *
     * @return string Returns the z4 c c a12 libelle.
     */
    public function getz4CCA12Libelle() {
        return $this->z4CCA12Libelle;
    }

    /**
     * Get the z5b code.
     *
     * @return string Returns the z5b code.
     */
    public function getz5bCode() {
        return $this->z5bCode;
    }

    /**
     * Get the z5b h t.
     *
     * @return float Returns the z5b h t.
     */
    public function getz5bHT() {
        return $this->z5bHT;
    }

    /**
     * Get the z5b libelle.
     *
     * @return string Returns the z5b libelle.
     */
    public function getz5bLibelle() {
        return $this->z5bLibelle;
    }

    /**
     * Get the z5b taxe.
     *
     * @return float Returns the z5b taxe.
     */
    public function getz5bTaxe() {
        return $this->z5bTaxe;
    }

    /**
     * Get the z7b code.
     *
     * @return string Returns the z7b code.
     */
    public function getz7bCode() {
        return $this->z7bCode;
    }

    /**
     * Get the z7b h t.
     *
     * @return float Returns the z7b h t.
     */
    public function getz7bHT() {
        return $this->z7bHT;
    }

    /**
     * Get the z7b libelle.
     *
     * @return string Returns the z7b libelle.
     */
    public function getz7bLibelle() {
        return $this->z7bLibelle;
    }

    /**
     * Get the z7b taxe.
     *
     * @return float Returns the z7b taxe.
     */
    public function getz7bTaxe() {
        return $this->z7bTaxe;
    }

    /**
     * Get the z8004.
     *
     * @return float Returns the z8004.
     */
    public function getz8004() {
        return $this->z8004;
    }

    /**
     * Get the z acompte deduit1.
     *
     * @return bool Returns the z acompte deduit1.
     */
    public function getzAcompteDeduit1() {
        return $this->zAcompteDeduit1;
    }

    /**
     * Get the z acompte deduit2.
     *
     * @return bool Returns the z acompte deduit2.
     */
    public function getzAcompteDeduit2() {
        return $this->zAcompteDeduit2;
    }

    /**
     * Get the z acompte deduit3.
     *
     * @return bool Returns the z acompte deduit3.
     */
    public function getzAcompteDeduit3() {
        return $this->zAcompteDeduit3;
    }

    /**
     * Get the z acompte deduit4.
     *
     * @return bool Returns the z acompte deduit4.
     */
    public function getzAcompteDeduit4() {
        return $this->zAcompteDeduit4;
    }

    /**
     * Get the z annee acompte1.
     *
     * @return int Returns the z annee acompte1.
     */
    public function getzAnneeAcompte1() {
        return $this->zAnneeAcompte1;
    }

    /**
     * Get the z annee acompte2.
     *
     * @return int Returns the z annee acompte2.
     */
    public function getzAnneeAcompte2() {
        return $this->zAnneeAcompte2;
    }

    /**
     * Get the z annee acompte3.
     *
     * @return int Returns the z annee acompte3.
     */
    public function getzAnneeAcompte3() {
        return $this->zAnneeAcompte3;
    }

    /**
     * Get the z annee acompte4.
     *
     * @return int Returns the z annee acompte4.
     */
    public function getzAnneeAcompte4() {
        return $this->zAnneeAcompte4;
    }

    /**
     * Get the z col1 acompte1.
     *
     * @return float Returns the z col1 acompte1.
     */
    public function getzCol1Acompte1() {
        return $this->zCol1Acompte1;
    }

    /**
     * Get the z col1 acompte2.
     *
     * @return float Returns the z col1 acompte2.
     */
    public function getzCol1Acompte2() {
        return $this->zCol1Acompte2;
    }

    /**
     * Get the z col1 acompte3.
     *
     * @return float Returns the z col1 acompte3.
     */
    public function getzCol1Acompte3() {
        return $this->zCol1Acompte3;
    }

    /**
     * Get the z col1 acompte4.
     *
     * @return float Returns the z col1 acompte4.
     */
    public function getzCol1Acompte4() {
        return $this->zCol1Acompte4;
    }

    /**
     * Get the z col2 acompte1.
     *
     * @return float Returns the z col2 acompte1.
     */
    public function getzCol2Acompte1() {
        return $this->zCol2Acompte1;
    }

    /**
     * Get the z col2 acompte2.
     *
     * @return float Returns the z col2 acompte2.
     */
    public function getzCol2Acompte2() {
        return $this->zCol2Acompte2;
    }

    /**
     * Get the z col2 acompte3.
     *
     * @return float Returns the z col2 acompte3.
     */
    public function getzCol2Acompte3() {
        return $this->zCol2Acompte3;
    }

    /**
     * Get the z col2 acompte4.
     *
     * @return float Returns the z col2 acompte4.
     */
    public function getzCol2Acompte4() {
        return $this->zCol2Acompte4;
    }

    /**
     * Get the z excedent versement.
     *
     * @return float Returns the z excedent versement.
     */
    public function getzExcedentVersement() {
        return $this->zExcedentVersement;
    }

    /**
     * Get the z nom demandeur rbt.
     *
     * @return string Returns the z nom demandeur rbt.
     */
    public function getzNomDemandeurRbt() {
        return $this->zNomDemandeurRbt;
    }

    /**
     * Get the z num m s a.
     *
     * @return string Returns the z num m s a.
     */
    public function getzNumMSA() {
        return $this->zNumMSA;
    }

    /**
     * Get the z r b t b i c.
     *
     * @return string Returns the z r b t b i c.
     */
    public function getzRBTBIC() {
        return $this->zRBTBIC;
    }

    /**
     * Get the z r b t i b a n.
     *
     * @return string Returns the z r b t i b a n.
     */
    public function getzRBTIBAN() {
        return $this->zRBTIBAN;
    }

    /**
     * Get the z r b t qualite.
     *
     * @return string Returns the z r b t qualite.
     */
    public function getzRBTQualite() {
        return $this->zRBTQualite;
    }

    /**
     * Get the z r b t r i b.
     *
     * @return string Returns the z r b t r i b.
     */
    public function getzRBTRIB() {
        return $this->zRBTRIB;
    }

    /**
     * Get the z r b t ville.
     *
     * @return string Returns the z r b t ville.
     */
    public function getzRBTVille() {
        return $this->zRBTVille;
    }

    /**
     * Get the z rbt demande.
     *
     * @return float Returns the z rbt demande.
     */
    public function getzRbtDemande() {
        return $this->zRbtDemande;
    }

    /**
     * Get the z solde a payer.
     *
     * @return float Returns the z solde a payer.
     */
    public function getzSoldeAPayer() {
        return $this->zSoldeAPayer;
    }

    /**
     * Get the z surface agr.
     *
     * @return int Returns the z surface agr.
     */
    public function getzSurfaceAgr() {
        return $this->zSurfaceAgr;
    }

    /**
     * Get the z taxes fiscales.
     *
     * @return float Returns the z taxes fiscales.
     */
    public function getzTaxesFiscales() {
        return $this->zTaxesFiscales;
    }

    /**
     * Get the z ya demande rbt.
     *
     * @return bool Returns the z ya demande rbt.
     */
    public function getzYaDemandeRbt() {
        return $this->zYaDemandeRbt;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime $dateCession The date cession.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the tx imposition.
     *
     * @param float $txImposition The tx imposition.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setTxImposition($txImposition) {
        $this->txImposition = $txImposition;
        return $this;
    }

    /**
     * Set the type c a12.
     *
     * @param string $typeCA12 The type c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setTypeCA12($typeCA12) {
        $this->typeCA12 = $typeCA12;
        return $this;
    }

    /**
     * Set the z0008.
     *
     * @param float $z0008 The z0008.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0008($z0008) {
        $this->z0008 = $z0008;
        return $this;
    }

    /**
     * Set the z0018.
     *
     * @param float $z0018 The z0018.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0018($z0018) {
        $this->z0018 = $z0018;
        return $this;
    }

    /**
     * Set the z0019.
     *
     * @param float $z0019 The z0019.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0019($z0019) {
        $this->z0019 = $z0019;
        return $this;
    }

    /**
     * Set the z0020.
     *
     * @param float $z0020 The z0020.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0020($z0020) {
        $this->z0020 = $z0020;
        return $this;
    }

    /**
     * Set the z0028.
     *
     * @param float $z0028 The z0028.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0028($z0028) {
        $this->z0028 = $z0028;
        return $this;
    }

    /**
     * Set the z0030b.
     *
     * @param float $z0030b The z0030b.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0030b($z0030b) {
        $this->z0030b = $z0030b;
        return $this;
    }

    /**
     * Set the z0058.
     *
     * @param float $z0058 The z0058.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0058($z0058) {
        $this->z0058 = $z0058;
        return $this;
    }

    /**
     * Set the z0704.
     *
     * @param float $z0704 The z0704.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0704($z0704) {
        $this->z0704 = $z0704;
        return $this;
    }

    /**
     * Set the z0709.
     *
     * @param float $z0709 The z0709.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0709($z0709) {
        $this->z0709 = $z0709;
        return $this;
    }

    /**
     * Set the z0970.
     *
     * @param float $z0970 The z0970.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0970($z0970) {
        $this->z0970 = $z0970;
        return $this;
    }

    /**
     * Set the z0970b.
     *
     * @param float $z0970b The z0970b.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0970b($z0970b) {
        $this->z0970b = $z0970b;
        return $this;
    }

    /**
     * Set the z0980.
     *
     * @param float $z0980 The z0980.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0980($z0980) {
        $this->z0980 = $z0980;
        return $this;
    }

    /**
     * Set the z0980b.
     *
     * @param float $z0980b The z0980b.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0980b($z0980b) {
        $this->z0980b = $z0980b;
        return $this;
    }

    /**
     * Set the z0981.
     *
     * @param float $z0981 The z0981.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0981($z0981) {
        $this->z0981 = $z0981;
        return $this;
    }

    /**
     * Set the z0981b.
     *
     * @param float $z0981b The z0981b.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0981b($z0981b) {
        $this->z0981b = $z0981b;
        return $this;
    }

    /**
     * Set the z0982.
     *
     * @param float $z0982 The z0982.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0982($z0982) {
        $this->z0982 = $z0982;
        return $this;
    }

    /**
     * Set the z0983.
     *
     * @param float $z0983 The z0983.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz0983($z0983) {
        $this->z0983 = $z0983;
        return $this;
    }

    /**
     * Set the z3240.
     *
     * @param float $z3240 The z3240.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz3240($z3240) {
        $this->z3240 = $z3240;
        return $this;
    }

    /**
     * Set the z32 code.
     *
     * @param string $z32Code The z32 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz32Code($z32Code) {
        $this->z32Code = $z32Code;
        return $this;
    }

    /**
     * Set the z32 libelle.
     *
     * @param string $z32Libelle The z32 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz32Libelle($z32Libelle) {
        $this->z32Libelle = $z32Libelle;
        return $this;
    }

    /**
     * Set the z32 taxe.
     *
     * @param float $z32Taxe The z32 taxe.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz32Taxe($z32Taxe) {
        $this->z32Taxe = $z32Taxe;
        return $this;
    }

    /**
     * Set the z35 b code.
     *
     * @param string $z35BCode The z35 b code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35BCode($z35BCode) {
        $this->z35BCode = $z35BCode;
        return $this;
    }

    /**
     * Set the z35 b libelle.
     *
     * @param string $z35BLibelle The z35 b libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35BLibelle($z35BLibelle) {
        $this->z35BLibelle = $z35BLibelle;
        return $this;
    }

    /**
     * Set the z35 b taxe.
     *
     * @param float $z35BTaxe The z35 b taxe.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35BTaxe($z35BTaxe) {
        $this->z35BTaxe = $z35BTaxe;
        return $this;
    }

    /**
     * Set the z35 code.
     *
     * @param string $z35Code The z35 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35Code($z35Code) {
        $this->z35Code = $z35Code;
        return $this;
    }

    /**
     * Set the z35 libelle.
     *
     * @param string $z35Libelle The z35 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35Libelle($z35Libelle) {
        $this->z35Libelle = $z35Libelle;
        return $this;
    }

    /**
     * Set the z35 taxe.
     *
     * @param float $z35Taxe The z35 taxe.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz35Taxe($z35Taxe) {
        $this->z35Taxe = $z35Taxe;
        return $this;
    }

    /**
     * Set the z4202.
     *
     * @param float $z4202 The z4202.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4202($z4202) {
        $this->z4202 = $z4202;
        return $this;
    }

    /**
     * Set the z4213.
     *
     * @param float $z4213 The z4213.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4213($z4213) {
        $this->z4213 = $z4213;
        return $this;
    }

    /**
     * Set the z4216.
     *
     * @param float $z4216 The z4216.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4216($z4216) {
        $this->z4216 = $z4216;
        return $this;
    }

    /**
     * Set the z4217.
     *
     * @param float $z4217 The z4217.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4217($z4217) {
        $this->z4217 = $z4217;
        return $this;
    }

    /**
     * Set the z4218.
     *
     * @param float $z4218 The z4218.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4218($z4218) {
        $this->z4218 = $z4218;
        return $this;
    }

    /**
     * Set the z4220.
     *
     * @param float $z4220 The z4220.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4220($z4220) {
        $this->z4220 = $z4220;
        return $this;
    }

    /**
     * Set the z45 c a12.
     *
     * @param float $z45CA12 The z45 c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz45CA12($z45CA12) {
        $this->z45CA12 = $z45CA12;
        return $this;
    }

    /**
     * Set the z45 c a12 code.
     *
     * @param string $z45CA12Code The z45 c a12 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz45CA12Code($z45CA12Code) {
        $this->z45CA12Code = $z45CA12Code;
        return $this;
    }

    /**
     * Set the z45 c a12 libelle.
     *
     * @param string $z45CA12Libelle The z45 c a12 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz45CA12Libelle($z45CA12Libelle) {
        $this->z45CA12Libelle = $z45CA12Libelle;
        return $this;
    }

    /**
     * Set the z47 c a12.
     *
     * @param float $z47CA12 The z47 c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz47CA12($z47CA12) {
        $this->z47CA12 = $z47CA12;
        return $this;
    }

    /**
     * Set the z47 c a12 code.
     *
     * @param string $z47CA12Code The z47 c a12 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz47CA12Code($z47CA12Code) {
        $this->z47CA12Code = $z47CA12Code;
        return $this;
    }

    /**
     * Set the z47 c a12 libelle.
     *
     * @param string $z47CA12Libelle The z47 c a12 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz47CA12Libelle($z47CA12Libelle) {
        $this->z47CA12Libelle = $z47CA12Libelle;
        return $this;
    }

    /**
     * Set the z4 a c a12.
     *
     * @param float $z4ACA12 The z4 a c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4ACA12($z4ACA12) {
        $this->z4ACA12 = $z4ACA12;
        return $this;
    }

    /**
     * Set the z4 a c a12 code.
     *
     * @param string $z4ACA12Code The z4 a c a12 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4ACA12Code($z4ACA12Code) {
        $this->z4ACA12Code = $z4ACA12Code;
        return $this;
    }

    /**
     * Set the z4 a c a12 libelle.
     *
     * @param string $z4ACA12Libelle The z4 a c a12 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4ACA12Libelle($z4ACA12Libelle) {
        $this->z4ACA12Libelle = $z4ACA12Libelle;
        return $this;
    }

    /**
     * Set the z4 b c a12.
     *
     * @param float $z4BCA12 The z4 b c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4BCA12($z4BCA12) {
        $this->z4BCA12 = $z4BCA12;
        return $this;
    }

    /**
     * Set the z4 b c a12 code.
     *
     * @param string $z4BCA12Code The z4 b c a12 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4BCA12Code($z4BCA12Code) {
        $this->z4BCA12Code = $z4BCA12Code;
        return $this;
    }

    /**
     * Set the z4 b c a12 libelle.
     *
     * @param string $z4BCA12Libelle The z4 b c a12 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4BCA12Libelle($z4BCA12Libelle) {
        $this->z4BCA12Libelle = $z4BCA12Libelle;
        return $this;
    }

    /**
     * Set the z4 c c a12.
     *
     * @param float $z4CCA12 The z4 c c a12.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4CCA12($z4CCA12) {
        $this->z4CCA12 = $z4CCA12;
        return $this;
    }

    /**
     * Set the z4 c c a12 code.
     *
     * @param string $z4CCA12Code The z4 c c a12 code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4CCA12Code($z4CCA12Code) {
        $this->z4CCA12Code = $z4CCA12Code;
        return $this;
    }

    /**
     * Set the z4 c c a12 libelle.
     *
     * @param string $z4CCA12Libelle The z4 c c a12 libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz4CCA12Libelle($z4CCA12Libelle) {
        $this->z4CCA12Libelle = $z4CCA12Libelle;
        return $this;
    }

    /**
     * Set the z5b code.
     *
     * @param string $z5bCode The z5b code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz5bCode($z5bCode) {
        $this->z5bCode = $z5bCode;
        return $this;
    }

    /**
     * Set the z5b h t.
     *
     * @param float $z5bHT The z5b h t.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz5bHT($z5bHT) {
        $this->z5bHT = $z5bHT;
        return $this;
    }

    /**
     * Set the z5b libelle.
     *
     * @param string $z5bLibelle The z5b libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz5bLibelle($z5bLibelle) {
        $this->z5bLibelle = $z5bLibelle;
        return $this;
    }

    /**
     * Set the z5b taxe.
     *
     * @param float $z5bTaxe The z5b taxe.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz5bTaxe($z5bTaxe) {
        $this->z5bTaxe = $z5bTaxe;
        return $this;
    }

    /**
     * Set the z7b code.
     *
     * @param string $z7bCode The z7b code.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz7bCode($z7bCode) {
        $this->z7bCode = $z7bCode;
        return $this;
    }

    /**
     * Set the z7b h t.
     *
     * @param float $z7bHT The z7b h t.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz7bHT($z7bHT) {
        $this->z7bHT = $z7bHT;
        return $this;
    }

    /**
     * Set the z7b libelle.
     *
     * @param string $z7bLibelle The z7b libelle.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz7bLibelle($z7bLibelle) {
        $this->z7bLibelle = $z7bLibelle;
        return $this;
    }

    /**
     * Set the z7b taxe.
     *
     * @param float $z7bTaxe The z7b taxe.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz7bTaxe($z7bTaxe) {
        $this->z7bTaxe = $z7bTaxe;
        return $this;
    }

    /**
     * Set the z8004.
     *
     * @param float $z8004 The z8004.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setz8004($z8004) {
        $this->z8004 = $z8004;
        return $this;
    }

    /**
     * Set the z acompte deduit1.
     *
     * @param bool $zAcompteDeduit1 The z acompte deduit1.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAcompteDeduit1($zAcompteDeduit1) {
        $this->zAcompteDeduit1 = $zAcompteDeduit1;
        return $this;
    }

    /**
     * Set the z acompte deduit2.
     *
     * @param bool $zAcompteDeduit2 The z acompte deduit2.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAcompteDeduit2($zAcompteDeduit2) {
        $this->zAcompteDeduit2 = $zAcompteDeduit2;
        return $this;
    }

    /**
     * Set the z acompte deduit3.
     *
     * @param bool $zAcompteDeduit3 The z acompte deduit3.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAcompteDeduit3($zAcompteDeduit3) {
        $this->zAcompteDeduit3 = $zAcompteDeduit3;
        return $this;
    }

    /**
     * Set the z acompte deduit4.
     *
     * @param bool $zAcompteDeduit4 The z acompte deduit4.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAcompteDeduit4($zAcompteDeduit4) {
        $this->zAcompteDeduit4 = $zAcompteDeduit4;
        return $this;
    }

    /**
     * Set the z annee acompte1.
     *
     * @param int $zAnneeAcompte1 The z annee acompte1.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAnneeAcompte1($zAnneeAcompte1) {
        $this->zAnneeAcompte1 = $zAnneeAcompte1;
        return $this;
    }

    /**
     * Set the z annee acompte2.
     *
     * @param int $zAnneeAcompte2 The z annee acompte2.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAnneeAcompte2($zAnneeAcompte2) {
        $this->zAnneeAcompte2 = $zAnneeAcompte2;
        return $this;
    }

    /**
     * Set the z annee acompte3.
     *
     * @param int $zAnneeAcompte3 The z annee acompte3.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAnneeAcompte3($zAnneeAcompte3) {
        $this->zAnneeAcompte3 = $zAnneeAcompte3;
        return $this;
    }

    /**
     * Set the z annee acompte4.
     *
     * @param int $zAnneeAcompte4 The z annee acompte4.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzAnneeAcompte4($zAnneeAcompte4) {
        $this->zAnneeAcompte4 = $zAnneeAcompte4;
        return $this;
    }

    /**
     * Set the z col1 acompte1.
     *
     * @param float $zCol1Acompte1 The z col1 acompte1.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol1Acompte1($zCol1Acompte1) {
        $this->zCol1Acompte1 = $zCol1Acompte1;
        return $this;
    }

    /**
     * Set the z col1 acompte2.
     *
     * @param float $zCol1Acompte2 The z col1 acompte2.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol1Acompte2($zCol1Acompte2) {
        $this->zCol1Acompte2 = $zCol1Acompte2;
        return $this;
    }

    /**
     * Set the z col1 acompte3.
     *
     * @param float $zCol1Acompte3 The z col1 acompte3.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol1Acompte3($zCol1Acompte3) {
        $this->zCol1Acompte3 = $zCol1Acompte3;
        return $this;
    }

    /**
     * Set the z col1 acompte4.
     *
     * @param float $zCol1Acompte4 The z col1 acompte4.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol1Acompte4($zCol1Acompte4) {
        $this->zCol1Acompte4 = $zCol1Acompte4;
        return $this;
    }

    /**
     * Set the z col2 acompte1.
     *
     * @param float $zCol2Acompte1 The z col2 acompte1.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol2Acompte1($zCol2Acompte1) {
        $this->zCol2Acompte1 = $zCol2Acompte1;
        return $this;
    }

    /**
     * Set the z col2 acompte2.
     *
     * @param float $zCol2Acompte2 The z col2 acompte2.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol2Acompte2($zCol2Acompte2) {
        $this->zCol2Acompte2 = $zCol2Acompte2;
        return $this;
    }

    /**
     * Set the z col2 acompte3.
     *
     * @param float $zCol2Acompte3 The z col2 acompte3.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol2Acompte3($zCol2Acompte3) {
        $this->zCol2Acompte3 = $zCol2Acompte3;
        return $this;
    }

    /**
     * Set the z col2 acompte4.
     *
     * @param float $zCol2Acompte4 The z col2 acompte4.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzCol2Acompte4($zCol2Acompte4) {
        $this->zCol2Acompte4 = $zCol2Acompte4;
        return $this;
    }

    /**
     * Set the z excedent versement.
     *
     * @param float $zExcedentVersement The z excedent versement.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzExcedentVersement($zExcedentVersement) {
        $this->zExcedentVersement = $zExcedentVersement;
        return $this;
    }

    /**
     * Set the z nom demandeur rbt.
     *
     * @param string $zNomDemandeurRbt The z nom demandeur rbt.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzNomDemandeurRbt($zNomDemandeurRbt) {
        $this->zNomDemandeurRbt = $zNomDemandeurRbt;
        return $this;
    }

    /**
     * Set the z num m s a.
     *
     * @param string $zNumMSA The z num m s a.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzNumMSA($zNumMSA) {
        $this->zNumMSA = $zNumMSA;
        return $this;
    }

    /**
     * Set the z r b t b i c.
     *
     * @param string $zRBTBIC The z r b t b i c.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRBTBIC($zRBTBIC) {
        $this->zRBTBIC = $zRBTBIC;
        return $this;
    }

    /**
     * Set the z r b t i b a n.
     *
     * @param string $zRBTIBAN The z r b t i b a n.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRBTIBAN($zRBTIBAN) {
        $this->zRBTIBAN = $zRBTIBAN;
        return $this;
    }

    /**
     * Set the z r b t qualite.
     *
     * @param string $zRBTQualite The z r b t qualite.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRBTQualite($zRBTQualite) {
        $this->zRBTQualite = $zRBTQualite;
        return $this;
    }

    /**
     * Set the z r b t r i b.
     *
     * @param string $zRBTRIB The z r b t r i b.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRBTRIB($zRBTRIB) {
        $this->zRBTRIB = $zRBTRIB;
        return $this;
    }

    /**
     * Set the z r b t ville.
     *
     * @param string $zRBTVille The z r b t ville.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRBTVille($zRBTVille) {
        $this->zRBTVille = $zRBTVille;
        return $this;
    }

    /**
     * Set the z rbt demande.
     *
     * @param float $zRbtDemande The z rbt demande.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzRbtDemande($zRbtDemande) {
        $this->zRbtDemande = $zRbtDemande;
        return $this;
    }

    /**
     * Set the z solde a payer.
     *
     * @param float $zSoldeAPayer The z solde a payer.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzSoldeAPayer($zSoldeAPayer) {
        $this->zSoldeAPayer = $zSoldeAPayer;
        return $this;
    }

    /**
     * Set the z surface agr.
     *
     * @param int $zSurfaceAgr The z surface agr.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzSurfaceAgr($zSurfaceAgr) {
        $this->zSurfaceAgr = $zSurfaceAgr;
        return $this;
    }

    /**
     * Set the z taxes fiscales.
     *
     * @param float $zTaxesFiscales The z taxes fiscales.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzTaxesFiscales($zTaxesFiscales) {
        $this->zTaxesFiscales = $zTaxesFiscales;
        return $this;
    }

    /**
     * Set the z ya demande rbt.
     *
     * @param bool $zYaDemandeRbt The z ya demande rbt.
     * @return DecTvaCA12 Returns this dec tva c a12.
     */
    public function setzYaDemandeRbt($zYaDemandeRbt) {
        $this->zYaDemandeRbt = $zYaDemandeRbt;
        return $this;
    }
}
