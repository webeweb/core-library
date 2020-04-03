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
 * Confidentialite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * Active conf menus qb.
     *
     * @var bool
     */
    private $activeConfMenusQb;

    /**
     * Active conf menus qb2.
     *
     * @var bool
     */
    private $activeConfMenusQb2;

    /**
     * Active conf menus qc.
     *
     * @var bool
     */
    private $activeConfMenusQc;

    /**
     * Active conf menus qfact.
     *
     * @var bool
     */
    private $activeConfMenusQfact;

    /**
     * Active conf menus qgi.
     *
     * @var bool
     */
    private $activeConfMenusQgi;

    /**
     * Active conf menus qp.
     *
     * @var bool
     */
    private $activeConfMenusQp;

    /**
     * Active conf menus qprop.
     *
     * @var bool
     */
    private $activeConfMenusQprop;

    /**
     * Active conf menus qtrs.
     *
     * @var bool
     */
    private $activeConfMenusQtrs;

    /**
     * Masquer base access.
     *
     * @var bool
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
     * Get the active conf menus qb.
     *
     * @return bool Returns the active conf menus qb.
     */
    public function getActiveConfMenusQb() {
        return $this->activeConfMenusQb;
    }

    /**
     * Get the active conf menus qb2.
     *
     * @return bool Returns the active conf menus qb2.
     */
    public function getActiveConfMenusQb2() {
        return $this->activeConfMenusQb2;
    }

    /**
     * Get the active conf menus qc.
     *
     * @return bool Returns the active conf menus qc.
     */
    public function getActiveConfMenusQc() {
        return $this->activeConfMenusQc;
    }

    /**
     * Get the active conf menus qfact.
     *
     * @return bool Returns the active conf menus qfact.
     */
    public function getActiveConfMenusQfact() {
        return $this->activeConfMenusQfact;
    }

    /**
     * Get the active conf menus qgi.
     *
     * @return bool Returns the active conf menus qgi.
     */
    public function getActiveConfMenusQgi() {
        return $this->activeConfMenusQgi;
    }

    /**
     * Get the active conf menus qp.
     *
     * @return bool Returns the active conf menus qp.
     */
    public function getActiveConfMenusQp() {
        return $this->activeConfMenusQp;
    }

    /**
     * Get the active conf menus qprop.
     *
     * @return bool Returns the active conf menus qprop.
     */
    public function getActiveConfMenusQprop() {
        return $this->activeConfMenusQprop;
    }

    /**
     * Get the active conf menus qtrs.
     *
     * @return bool Returns the active conf menus qtrs.
     */
    public function getActiveConfMenusQtrs() {
        return $this->activeConfMenusQtrs;
    }

    /**
     * Get the masquer base access.
     *
     * @return bool Returns the masquer base access.
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
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriArt($activationLstRestriArt) {
        $this->activationLstRestriArt = $activationLstRestriArt;
        return $this;
    }

    /**
     * Set the activation lst restri cli.
     *
     * @param int $activationLstRestriCli The activation lst restri cli.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriCli($activationLstRestriCli) {
        $this->activationLstRestriCli = $activationLstRestriCli;
        return $this;
    }

    /**
     * Set the activation lst restri frn.
     *
     * @param int $activationLstRestriFrn The activation lst restri frn.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActivationLstRestriFrn($activationLstRestriFrn) {
        $this->activationLstRestriFrn = $activationLstRestriFrn;
        return $this;
    }

    /**
     * Set the active conf menus qb.
     *
     * @param bool $activeConfMenusQb The active conf menus qb.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQb($activeConfMenusQb) {
        $this->activeConfMenusQb = $activeConfMenusQb;
        return $this;
    }

    /**
     * Set the active conf menus qb2.
     *
     * @param bool $activeConfMenusQb2 The active conf menus qb2.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQb2($activeConfMenusQb2) {
        $this->activeConfMenusQb2 = $activeConfMenusQb2;
        return $this;
    }

    /**
     * Set the active conf menus qc.
     *
     * @param bool $activeConfMenusQc The active conf menus qc.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQc($activeConfMenusQc) {
        $this->activeConfMenusQc = $activeConfMenusQc;
        return $this;
    }

    /**
     * Set the active conf menus qfact.
     *
     * @param bool $activeConfMenusQfact The active conf menus qfact.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQfact($activeConfMenusQfact) {
        $this->activeConfMenusQfact = $activeConfMenusQfact;
        return $this;
    }

    /**
     * Set the active conf menus qgi.
     *
     * @param bool $activeConfMenusQgi The active conf menus qgi.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQgi($activeConfMenusQgi) {
        $this->activeConfMenusQgi = $activeConfMenusQgi;
        return $this;
    }

    /**
     * Set the active conf menus qp.
     *
     * @param bool $activeConfMenusQp The active conf menus qp.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQp($activeConfMenusQp) {
        $this->activeConfMenusQp = $activeConfMenusQp;
        return $this;
    }

    /**
     * Set the active conf menus qprop.
     *
     * @param bool $activeConfMenusQprop The active conf menus qprop.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQprop($activeConfMenusQprop) {
        $this->activeConfMenusQprop = $activeConfMenusQprop;
        return $this;
    }

    /**
     * Set the active conf menus qtrs.
     *
     * @param bool $activeConfMenusQtrs The active conf menus qtrs.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setActiveConfMenusQtrs($activeConfMenusQtrs) {
        $this->activeConfMenusQtrs = $activeConfMenusQtrs;
        return $this;
    }

    /**
     * Set the masquer base access.
     *
     * @param bool $masquerBaseAccess The masquer base access.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setMasquerBaseAccess($masquerBaseAccess) {
        $this->masquerBaseAccess = $masquerBaseAccess;
        return $this;
    }

    /**
     * Set the sel lst restri art def.
     *
     * @param string $selLstRestriArtDef The sel lst restri art def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriArtDef($selLstRestriArtDef) {
        $this->selLstRestriArtDef = $selLstRestriArtDef;
        return $this;
    }

    /**
     * Set the sel lst restri cli def.
     *
     * @param string $selLstRestriCliDef The sel lst restri cli def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriCliDef($selLstRestriCliDef) {
        $this->selLstRestriCliDef = $selLstRestriCliDef;
        return $this;
    }

    /**
     * Set the sel lst restri frn def.
     *
     * @param string $selLstRestriFrnDef The sel lst restri frn def.
     * @return Confidentialite Returns this Confidentialite.
     */
    public function setSelLstRestriFrnDef($selLstRestriFrnDef) {
        $this->selLstRestriFrnDef = $selLstRestriFrnDef;
        return $this;
    }
}
