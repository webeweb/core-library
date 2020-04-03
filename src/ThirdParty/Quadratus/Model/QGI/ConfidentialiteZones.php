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
 * Confidentialite zones.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ConfidentialiteZones {

    /**
     * Champ.
     *
     * @var string
     */
    private $champ;

    /**
     * Chapitre.
     *
     * @var string
     */
    private $chapitre;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the champ.
     *
     * @return string Returns the champ.
     */
    public function getChamp() {
        return $this->champ;
    }

    /**
     * Get the chapitre.
     *
     * @return string Returns the chapitre.
     */
    public function getChapitre() {
        return $this->chapitre;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
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
     * Set the champ.
     *
     * @param string $champ The champ.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setChamp($champ) {
        $this->champ = $champ;
        return $this;
    }

    /**
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return ConfidentialiteZones Returns this Confidentialite zones.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
