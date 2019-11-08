<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Chantiers periodes fermeture.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersPeriodesFermeture {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Date au.
     *
     * @var DateTime|null
     */
    private $dateAu;

    /**
     * Date du.
     *
     * @var DateTime|null
     */
    private $dateDu;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the date au.
     *
     * @return DateTime|null Returns the date au.
     */
    public function getDateAu() {
        return $this->dateAu;
    }

    /**
     * Get the date du.
     *
     * @return DateTime|null Returns the date du.
     */
    public function getDateDu() {
        return $this->dateDu;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date au.
     *
     * @param DateTime|null $dateAu The date au.
     */
    public function setDateAu(DateTime $dateAu = null) {
        $this->dateAu = $dateAu;
        return $this;
    }

    /**
     * Set the date du.
     *
     * @param DateTime|null $dateDu The date du.
     */
    public function setDateDu(DateTime $dateDu = null) {
        $this->dateDu = $dateDu;
        return $this;
    }
}
