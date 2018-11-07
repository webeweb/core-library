<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Confidentialite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Confidentialite {

    /**
     * Activation lst restri art.
     *
     * @var int
     */
    private $activationLstRestriArt;

    /**
     * Activation lst restri cli.
     *
     * @var int
     */
    private $activationLstRestriCli;

    /**
     * Activation lst restri frn.
     *
     * @var int
     */
    private $activationLstRestriFrn;

    /**
     * Active conf menus q b.
     *
     * @var boolean
     */
    private $activeConfMenusQB;

    /**
     * Active conf menus q b2.
     *
     * @var boolean
     */
    private $activeConfMenusQB2;

    /**
     * Active conf menus q c.
     *
     * @var boolean
     */
    private $activeConfMenusQC;

    /**
     * Active conf menus q f a c t.
     *
     * @var boolean
     */
    private $activeConfMenusQFACT;

    /**
     * Active conf menus q g i.
     *
     * @var boolean
     */
    private $activeConfMenusQGI;

    /**
     * Active conf menus q p.
     *
     * @var boolean
     */
    private $activeConfMenusQP;

    /**
     * Active conf menus q p r o p.
     *
     * @var boolean
     */
    private $activeConfMenusQPROP;

    /**
     * Active conf menus q t r s.
     *
     * @var boolean
     */
    private $activeConfMenusQTRS;

    /**
     * Masquer base access.
     *
     * @var boolean
     */
    private $masquerBaseAccess;

    /**
     * Sel lst restri art def.
     *
     * @var string
     */
    private $selLstRestriArtDef;

    /**
     * Sel lst restri cli def.
     *
     * @var string
     */
    private $selLstRestriCliDef;

    /**
     * Sel lst restri frn def.
     *
     * @var string
     */
    private $selLstRestriFrnDef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the activation lst restri art.
     *
     * @return int Returns the activation lst restri art.
     */
    public function getActivationLstRestriArt() {
        return $this->activationLstRestriArt;
    }

    /**
     * Get the activation lst restri cli.
     *
     * @return int Returns the activation lst restri cli.
     */
    public function getActivationLstRestriCli() {
        return $this->activationLstRestriCli;
    }

    /**
     * Get the activation lst restri frn.
     *
     * @return int Returns the activation lst restri frn.
     */
    public function getActivationLstRestriFrn() {
        return $this->activationLstRestriFrn;
    }

    /**
     * Get the active conf menus q b.
     *
     * @return boolean Returns the active conf menus q b.
     */
    public function getActiveConfMenusQB() {
        return $this->activeConfMenusQB;
    }

    /**
     * Get the active conf menus q b2.
     *
     * @return boolean Returns the active conf menus q b2.
     */
    public function getActiveConfMenusQB2() {
        return $this->activeConfMenusQB2;
    }

    /**
     * Get the active conf menus q c.
     *
     * @return boolean Returns the active conf menus q c.
     */
    public function getActiveConfMenusQC() {
        return $this->activeConfMenusQC;
    }

    /**
     * Get the active conf menus q f a c t.
     *
     * @return boolean Returns the active conf menus q f a c t.
     */
    public function getActiveConfMenusQFACT() {
        return $this->activeConfMenusQFACT;
    }

    /**
     * Get the active conf menus q g i.
     *
     * @return boolean Returns the active conf menus q g i.
     */
    public function getActiveConfMenusQGI() {
        return $this->activeConfMenusQGI;
    }

    /**
     * Get the active conf menus q p.
     *
     * @return boolean Returns the active conf menus q p.
     */
    public function getActiveConfMenusQP() {
        return $this->activeConfMenusQP;
    }

    /**
     * Get the active conf menus q p r o p.
     *
     * @return boolean Returns the active conf menus q p r o p.
     */
    public function getActiveConfMenusQPROP() {
        return $this->activeConfMenusQPROP;
    }

    /**
     * Get the active conf menus q t r s.
     *
     * @return boolean Returns the active conf menus q t r s.
     */
    public function getActiveConfMenusQTRS() {
        return $this->activeConfMenusQTRS;
    }

    /**
     * Get the masquer base access.
     *
     * @return boolean Returns the masquer base access.
     */
    public function getMasquerBaseAccess() {
        return $this->masquerBaseAccess;
    }

    /**
     * Get the sel lst restri art def.
     *
     * @return string Returns the sel lst restri art def.
     */
    public function getSelLstRestriArtDef() {
        return $this->selLstRestriArtDef;
    }

    /**
     * Get the sel lst restri cli def.
     *
     * @return string Returns the sel lst restri cli def.
     */
    public function getSelLstRestriCliDef() {
        return $this->selLstRestriCliDef;
    }

    /**
     * Get the sel lst restri frn def.
     *
     * @return string Returns the sel lst restri frn def.
     */
    public function getSelLstRestriFrnDef() {
        return $this->selLstRestriFrnDef;
    }

    /**
     * Set the activation lst restri art.
     *
     * @param int $activationLstRestriArt The activation lst restri art.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActivationLstRestriArt($activationLstRestriArt) {
        $this->activationLstRestriArt = $activationLstRestriArt;
        return $this;
    }

    /**
     * Set the activation lst restri cli.
     *
     * @param int $activationLstRestriCli The activation lst restri cli.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActivationLstRestriCli($activationLstRestriCli) {
        $this->activationLstRestriCli = $activationLstRestriCli;
        return $this;
    }

    /**
     * Set the activation lst restri frn.
     *
     * @param int $activationLstRestriFrn The activation lst restri frn.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActivationLstRestriFrn($activationLstRestriFrn) {
        $this->activationLstRestriFrn = $activationLstRestriFrn;
        return $this;
    }

    /**
     * Set the active conf menus q b.
     *
     * @param boolean $activeConfMenusQB The active conf menus q b.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQB($activeConfMenusQB) {
        $this->activeConfMenusQB = $activeConfMenusQB;
        return $this;
    }

    /**
     * Set the active conf menus q b2.
     *
     * @param boolean $activeConfMenusQB2 The active conf menus q b2.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQB2($activeConfMenusQB2) {
        $this->activeConfMenusQB2 = $activeConfMenusQB2;
        return $this;
    }

    /**
     * Set the active conf menus q c.
     *
     * @param boolean $activeConfMenusQC The active conf menus q c.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQC($activeConfMenusQC) {
        $this->activeConfMenusQC = $activeConfMenusQC;
        return $this;
    }

    /**
     * Set the active conf menus q f a c t.
     *
     * @param boolean $activeConfMenusQFACT The active conf menus q f a c t.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQFACT($activeConfMenusQFACT) {
        $this->activeConfMenusQFACT = $activeConfMenusQFACT;
        return $this;
    }

    /**
     * Set the active conf menus q g i.
     *
     * @param boolean $activeConfMenusQGI The active conf menus q g i.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQGI($activeConfMenusQGI) {
        $this->activeConfMenusQGI = $activeConfMenusQGI;
        return $this;
    }

    /**
     * Set the active conf menus q p.
     *
     * @param boolean $activeConfMenusQP The active conf menus q p.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQP($activeConfMenusQP) {
        $this->activeConfMenusQP = $activeConfMenusQP;
        return $this;
    }

    /**
     * Set the active conf menus q p r o p.
     *
     * @param boolean $activeConfMenusQPROP The active conf menus q p r o p.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQPROP($activeConfMenusQPROP) {
        $this->activeConfMenusQPROP = $activeConfMenusQPROP;
        return $this;
    }

    /**
     * Set the active conf menus q t r s.
     *
     * @param boolean $activeConfMenusQTRS The active conf menus q t r s.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setActiveConfMenusQTRS($activeConfMenusQTRS) {
        $this->activeConfMenusQTRS = $activeConfMenusQTRS;
        return $this;
    }

    /**
     * Set the masquer base access.
     *
     * @param boolean $masquerBaseAccess The masquer base access.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setMasquerBaseAccess($masquerBaseAccess) {
        $this->masquerBaseAccess = $masquerBaseAccess;
        return $this;
    }

    /**
     * Set the sel lst restri art def.
     *
     * @param string $selLstRestriArtDef The sel lst restri art def.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setSelLstRestriArtDef($selLstRestriArtDef) {
        $this->selLstRestriArtDef = $selLstRestriArtDef;
        return $this;
    }

    /**
     * Set the sel lst restri cli def.
     *
     * @param string $selLstRestriCliDef The sel lst restri cli def.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setSelLstRestriCliDef($selLstRestriCliDef) {
        $this->selLstRestriCliDef = $selLstRestriCliDef;
        return $this;
    }

    /**
     * Set the sel lst restri frn def.
     *
     * @param string $selLstRestriFrnDef The sel lst restri frn def.
     * @return Confidentialite Returns this confidentialite.
     */
    public function setSelLstRestriFrnDef($selLstRestriFrnDef) {
        $this->selLstRestriFrnDef = $selLstRestriFrnDef;
        return $this;
    }

}
