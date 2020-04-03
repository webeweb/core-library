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

/**
 * Chantiers descriptif locaux elements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocauxElements {

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
     * Code element.
     *
     * @var string
     */
    private $codeElement;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Niveau noeud.
     *
     * @var int
     */
    private $niveauNoeud;

    /**
     * Numero noeud.
     *
     * @var int
     */
    private $numeroNoeud;

    /**
     * Type element.
     *
     * @var string
     */
    private $typeElement;

    /**
     * Uniq id local.
     *
     * @var string
     */
    private $uniqIdLocal;

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
     * Get the code element.
     *
     * @return string Returns the code element.
     */
    public function getCodeElement() {
        return $this->codeElement;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the niveau noeud.
     *
     * @return int Returns the niveau noeud.
     */
    public function getNiveauNoeud() {
        return $this->niveauNoeud;
    }

    /**
     * Get the numero noeud.
     *
     * @return int Returns the numero noeud.
     */
    public function getNumeroNoeud() {
        return $this->numeroNoeud;
    }

    /**
     * Get the type element.
     *
     * @return string Returns the type element.
     */
    public function getTypeElement() {
        return $this->typeElement;
    }

    /**
     * Get the uniq id local.
     *
     * @return string Returns the uniq id local.
     */
    public function getUniqIdLocal() {
        return $this->uniqIdLocal;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param string $codeElement The code element.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCodeElement($codeElement) {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int $niveauNoeud The niveau noeud.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setNiveauNoeud($niveauNoeud) {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }

    /**
     * Set the numero noeud.
     *
     * @param int $numeroNoeud The numero noeud.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setNumeroNoeud($numeroNoeud) {
        $this->numeroNoeud = $numeroNoeud;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string $typeElement The type element.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setTypeElement($typeElement) {
        $this->typeElement = $typeElement;
        return $this;
    }

    /**
     * Set the uniq id local.
     *
     * @param string $uniqIdLocal The uniq id local.
     * @return ChantiersDescriptifLocauxElements Returns this Chantiers descriptif locaux elements.
     */
    public function setUniqIdLocal($uniqIdLocal) {
        $this->uniqIdLocal = $uniqIdLocal;
        return $this;
    }
}
