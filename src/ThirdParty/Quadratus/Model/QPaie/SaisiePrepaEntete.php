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
 * Saisie prepa entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaEntete {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Desactive.
     *
     * @var bool
     */
    private $desactive;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Saisie abs cp.
     *
     * @var bool
     */
    private $saisieAbsCp;

    /**
     * Saisie acompte.
     *
     * @var bool
     */
    private $saisieAcompte;

    /**
     * Width bord.
     *
     * @var int
     */
    private $widthBord;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the desactive.
     *
     * @return bool Returns the desactive.
     */
    public function getDesactive() {
        return $this->desactive;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the saisie abs cp.
     *
     * @return bool Returns the saisie abs cp.
     */
    public function getSaisieAbsCp() {
        return $this->saisieAbsCp;
    }

    /**
     * Get the saisie acompte.
     *
     * @return bool Returns the saisie acompte.
     */
    public function getSaisieAcompte() {
        return $this->saisieAcompte;
    }

    /**
     * Get the width bord.
     *
     * @return int Returns the width bord.
     */
    public function getWidthBord() {
        return $this->widthBord;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the desactive.
     *
     * @param bool $desactive The desactive.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setDesactive($desactive) {
        $this->desactive = $desactive;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the saisie abs cp.
     *
     * @param bool $saisieAbsCp The saisie abs cp.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setSaisieAbsCp($saisieAbsCp) {
        $this->saisieAbsCp = $saisieAbsCp;
        return $this;
    }

    /**
     * Set the saisie acompte.
     *
     * @param bool $saisieAcompte The saisie acompte.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setSaisieAcompte($saisieAcompte) {
        $this->saisieAcompte = $saisieAcompte;
        return $this;
    }

    /**
     * Set the width bord.
     *
     * @param int $widthBord The width bord.
     * @return SaisiePrepaEntete Returns this saisie prepa entete.
     */
    public function setWidthBord($widthBord) {
        $this->widthBord = $widthBord;
        return $this;
    }
}
