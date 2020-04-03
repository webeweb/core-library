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

/**
 * Etiquettes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Etiquettes {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code barre.
     *
     * @var string
     */
    private $codeBarre;

    /**
     * Code cli four.
     *
     * @var string
     */
    private $codeCliFour;

    /**
     * Code modele.
     *
     * @var string
     */
    private $codeModele;

    /**
     * Etiq plus.
     *
     * @var bool
     */
    private $etiqPlus;

    /**
     * Imprimante.
     *
     * @var string
     */
    private $imprimante;

    /**
     * Prix vente.
     *
     * @var float
     */
    private $prixVente;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Zone1.
     *
     * @var string
     */
    private $zone1;

    /**
     * Zone10.
     *
     * @var string
     */
    private $zone10;

    /**
     * Zone11.
     *
     * @var string
     */
    private $zone11;

    /**
     * Zone12.
     *
     * @var string
     */
    private $zone12;

    /**
     * Zone13.
     *
     * @var string
     */
    private $zone13;

    /**
     * Zone14.
     *
     * @var string
     */
    private $zone14;

    /**
     * Zone15.
     *
     * @var string
     */
    private $zone15;

    /**
     * Zone2.
     *
     * @var string
     */
    private $zone2;

    /**
     * Zone3.
     *
     * @var string
     */
    private $zone3;

    /**
     * Zone4.
     *
     * @var string
     */
    private $zone4;

    /**
     * Zone5.
     *
     * @var string
     */
    private $zone5;

    /**
     * Zone6.
     *
     * @var string
     */
    private $zone6;

    /**
     * Zone7.
     *
     * @var string
     */
    private $zone7;

    /**
     * Zone8.
     *
     * @var string
     */
    private $zone8;

    /**
     * Zone9.
     *
     * @var string
     */
    private $zone9;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code barre.
     *
     * @return string Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Get the code cli four.
     *
     * @return string Returns the code cli four.
     */
    public function getCodeCliFour() {
        return $this->codeCliFour;
    }

    /**
     * Get the code modele.
     *
     * @return string Returns the code modele.
     */
    public function getCodeModele() {
        return $this->codeModele;
    }

    /**
     * Get the etiq plus.
     *
     * @return bool Returns the etiq plus.
     */
    public function getEtiqPlus() {
        return $this->etiqPlus;
    }

    /**
     * Get the imprimante.
     *
     * @return string Returns the imprimante.
     */
    public function getImprimante() {
        return $this->imprimante;
    }

    /**
     * Get the prix vente.
     *
     * @return float Returns the prix vente.
     */
    public function getPrixVente() {
        return $this->prixVente;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the zone1.
     *
     * @return string Returns the zone1.
     */
    public function getZone1() {
        return $this->zone1;
    }

    /**
     * Get the zone10.
     *
     * @return string Returns the zone10.
     */
    public function getZone10() {
        return $this->zone10;
    }

    /**
     * Get the zone11.
     *
     * @return string Returns the zone11.
     */
    public function getZone11() {
        return $this->zone11;
    }

    /**
     * Get the zone12.
     *
     * @return string Returns the zone12.
     */
    public function getZone12() {
        return $this->zone12;
    }

    /**
     * Get the zone13.
     *
     * @return string Returns the zone13.
     */
    public function getZone13() {
        return $this->zone13;
    }

    /**
     * Get the zone14.
     *
     * @return string Returns the zone14.
     */
    public function getZone14() {
        return $this->zone14;
    }

    /**
     * Get the zone15.
     *
     * @return string Returns the zone15.
     */
    public function getZone15() {
        return $this->zone15;
    }

    /**
     * Get the zone2.
     *
     * @return string Returns the zone2.
     */
    public function getZone2() {
        return $this->zone2;
    }

    /**
     * Get the zone3.
     *
     * @return string Returns the zone3.
     */
    public function getZone3() {
        return $this->zone3;
    }

    /**
     * Get the zone4.
     *
     * @return string Returns the zone4.
     */
    public function getZone4() {
        return $this->zone4;
    }

    /**
     * Get the zone5.
     *
     * @return string Returns the zone5.
     */
    public function getZone5() {
        return $this->zone5;
    }

    /**
     * Get the zone6.
     *
     * @return string Returns the zone6.
     */
    public function getZone6() {
        return $this->zone6;
    }

    /**
     * Get the zone7.
     *
     * @return string Returns the zone7.
     */
    public function getZone7() {
        return $this->zone7;
    }

    /**
     * Get the zone8.
     *
     * @return string Returns the zone8.
     */
    public function getZone8() {
        return $this->zone8;
    }

    /**
     * Get the zone9.
     *
     * @return string Returns the zone9.
     */
    public function getZone9() {
        return $this->zone9;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param string $codeBarre The code barre.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code cli four.
     *
     * @param string $codeCliFour The code cli four.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeCliFour($codeCliFour) {
        $this->codeCliFour = $codeCliFour;
        return $this;
    }

    /**
     * Set the code modele.
     *
     * @param string $codeModele The code modele.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeModele($codeModele) {
        $this->codeModele = $codeModele;
        return $this;
    }

    /**
     * Set the etiq plus.
     *
     * @param bool $etiqPlus The etiq plus.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setEtiqPlus($etiqPlus) {
        $this->etiqPlus = $etiqPlus;
        return $this;
    }

    /**
     * Set the imprimante.
     *
     * @param string $imprimante The imprimante.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setImprimante($imprimante) {
        $this->imprimante = $imprimante;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float $prixVente The prix vente.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setPrixVente($prixVente) {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the zone1.
     *
     * @param string $zone1 The zone1.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone1($zone1) {
        $this->zone1 = $zone1;
        return $this;
    }

    /**
     * Set the zone10.
     *
     * @param string $zone10 The zone10.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone10($zone10) {
        $this->zone10 = $zone10;
        return $this;
    }

    /**
     * Set the zone11.
     *
     * @param string $zone11 The zone11.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone11($zone11) {
        $this->zone11 = $zone11;
        return $this;
    }

    /**
     * Set the zone12.
     *
     * @param string $zone12 The zone12.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone12($zone12) {
        $this->zone12 = $zone12;
        return $this;
    }

    /**
     * Set the zone13.
     *
     * @param string $zone13 The zone13.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone13($zone13) {
        $this->zone13 = $zone13;
        return $this;
    }

    /**
     * Set the zone14.
     *
     * @param string $zone14 The zone14.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone14($zone14) {
        $this->zone14 = $zone14;
        return $this;
    }

    /**
     * Set the zone15.
     *
     * @param string $zone15 The zone15.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone15($zone15) {
        $this->zone15 = $zone15;
        return $this;
    }

    /**
     * Set the zone2.
     *
     * @param string $zone2 The zone2.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone2($zone2) {
        $this->zone2 = $zone2;
        return $this;
    }

    /**
     * Set the zone3.
     *
     * @param string $zone3 The zone3.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone3($zone3) {
        $this->zone3 = $zone3;
        return $this;
    }

    /**
     * Set the zone4.
     *
     * @param string $zone4 The zone4.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone4($zone4) {
        $this->zone4 = $zone4;
        return $this;
    }

    /**
     * Set the zone5.
     *
     * @param string $zone5 The zone5.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone5($zone5) {
        $this->zone5 = $zone5;
        return $this;
    }

    /**
     * Set the zone6.
     *
     * @param string $zone6 The zone6.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone6($zone6) {
        $this->zone6 = $zone6;
        return $this;
    }

    /**
     * Set the zone7.
     *
     * @param string $zone7 The zone7.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone7($zone7) {
        $this->zone7 = $zone7;
        return $this;
    }

    /**
     * Set the zone8.
     *
     * @param string $zone8 The zone8.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone8($zone8) {
        $this->zone8 = $zone8;
        return $this;
    }

    /**
     * Set the zone9.
     *
     * @param string $zone9 The zone9.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone9($zone9) {
        $this->zone9 = $zone9;
        return $this;
    }
}
