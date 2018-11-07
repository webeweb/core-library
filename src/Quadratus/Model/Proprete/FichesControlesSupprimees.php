<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Fiches controles supprimees model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class FichesControlesSupprimees {

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
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Date transfert.
     *
     * @var DateTime
     */
    private $dateTransfert;

    /**
     * Numero fiche.
     *
     * @var int
     */
    private $numeroFiche;

    /**
     * Uniq i d blocage.
     *
     * @var string
     */
    private $uniqIDBlocage;

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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime Returns the date transfert.
     */
    public function getDateTransfert() {
        return $this->dateTransfert;
    }

    /**
     * Get the numero fiche.
     *
     * @return int Returns the numero fiche.
     */
    public function getNumeroFiche() {
        return $this->numeroFiche;
    }

    /**
     * Get the uniq i d blocage.
     *
     * @return string Returns the uniq i d blocage.
     */
    public function getUniqIDBlocage() {
        return $this->uniqIDBlocage;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime $dateTransfert The date transfert.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setDateTransfert(DateTime $dateTransfert = null) {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int $numeroFiche The numero fiche.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setNumeroFiche($numeroFiche) {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the uniq i d blocage.
     *
     * @param string $uniqIDBlocage The uniq i d blocage.
     * @return FichesControlesSupprimees Returns this fiches controles supprimees.
     */
    public function setUniqIDBlocage($uniqIDBlocage) {
        $this->uniqIDBlocage = $uniqIDBlocage;
        return $this;
    }

}
