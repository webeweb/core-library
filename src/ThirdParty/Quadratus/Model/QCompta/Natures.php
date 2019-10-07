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


/**
 * Natures model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Natures {

    /**
     * Chapitre affect.
     *
     * @var string
     */
    private $chapitreAffect;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Mode calcul repart.
     *
     * @var string
     */
    private $modeCalculRepart;

    /**
     * Nature inactive.
     *
     * @var bool
     */
    private $natureInactive;

    /**
     * Ordre edition.
     *
     * @var int
     */
    private $ordreEdition;

    /**
     * Suivi annee recolte.
     *
     * @var bool
     */
    private $suiviAnneeRecolte;

    /**
     * Suivi quantite.
     *
     * @var string
     */
    private $suiviQuantite;

    /**
     * Type nature.
     *
     * @var string
     */
    private $typeNature;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chapitre affect.
     *
     * @return string Returns the chapitre affect.
     */
    public function getChapitreAffect() {
        return $this->chapitreAffect;
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
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the mode calcul repart.
     *
     * @return string Returns the mode calcul repart.
     */
    public function getModeCalculRepart() {
        return $this->modeCalculRepart;
    }

    /**
     * Get the nature inactive.
     *
     * @return bool Returns the nature inactive.
     */
    public function getNatureInactive() {
        return $this->natureInactive;
    }

    /**
     * Get the ordre edition.
     *
     * @return int Returns the ordre edition.
     */
    public function getOrdreEdition() {
        return $this->ordreEdition;
    }

    /**
     * Get the suivi annee recolte.
     *
     * @return bool Returns the suivi annee recolte.
     */
    public function getSuiviAnneeRecolte() {
        return $this->suiviAnneeRecolte;
    }

    /**
     * Get the suivi quantite.
     *
     * @return string Returns the suivi quantite.
     */
    public function getSuiviQuantite() {
        return $this->suiviQuantite;
    }

    /**
     * Get the type nature.
     *
     * @return string Returns the type nature.
     */
    public function getTypeNature() {
        return $this->typeNature;
    }

    /**
     * Set the chapitre affect.
     *
     * @param string $chapitreAffect The chapitre affect.
     * @return Natures Returns this natures.
     */
    public function setChapitreAffect($chapitreAffect) {
        $this->chapitreAffect = $chapitreAffect;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Natures Returns this natures.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Natures Returns this natures.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mode calcul repart.
     *
     * @param string $modeCalculRepart The mode calcul repart.
     * @return Natures Returns this natures.
     */
    public function setModeCalculRepart($modeCalculRepart) {
        $this->modeCalculRepart = $modeCalculRepart;
        return $this;
    }

    /**
     * Set the nature inactive.
     *
     * @param bool $natureInactive The nature inactive.
     * @return Natures Returns this natures.
     */
    public function setNatureInactive($natureInactive) {
        $this->natureInactive = $natureInactive;
        return $this;
    }

    /**
     * Set the ordre edition.
     *
     * @param int $ordreEdition The ordre edition.
     * @return Natures Returns this natures.
     */
    public function setOrdreEdition($ordreEdition) {
        $this->ordreEdition = $ordreEdition;
        return $this;
    }

    /**
     * Set the suivi annee recolte.
     *
     * @param bool $suiviAnneeRecolte The suivi annee recolte.
     * @return Natures Returns this natures.
     */
    public function setSuiviAnneeRecolte($suiviAnneeRecolte) {
        $this->suiviAnneeRecolte = $suiviAnneeRecolte;
        return $this;
    }

    /**
     * Set the suivi quantite.
     *
     * @param string $suiviQuantite The suivi quantite.
     * @return Natures Returns this natures.
     */
    public function setSuiviQuantite($suiviQuantite) {
        $this->suiviQuantite = $suiviQuantite;
        return $this;
    }

    /**
     * Set the type nature.
     *
     * @param string $typeNature The type nature.
     * @return Natures Returns this natures.
     */
    public function setTypeNature($typeNature) {
        $this->typeNature = $typeNature;
        return $this;
    }
}
