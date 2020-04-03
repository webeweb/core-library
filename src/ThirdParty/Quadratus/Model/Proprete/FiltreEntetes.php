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
 * Filtre entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FiltreEntetes {

    /**
     * Code filtre.
     *
     * @var string
     */
    private $codeFiltre;

    /**
     * Collaborateur.
     *
     * @var string
     */
    private $collaborateur;

    /**
     * Commercial facture.
     *
     * @var bool
     */
    private $commercialFacture;

    /**
     * Fonctionnalite.
     *
     * @var string
     */
    private $fonctionnalite;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Type filtre.
     *
     * @var string
     */
    private $typeFiltre;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code filtre.
     *
     * @return string Returns the code filtre.
     */
    public function getCodeFiltre() {
        return $this->codeFiltre;
    }

    /**
     * Get the collaborateur.
     *
     * @return string Returns the collaborateur.
     */
    public function getCollaborateur() {
        return $this->collaborateur;
    }

    /**
     * Get the commercial facture.
     *
     * @return bool Returns the commercial facture.
     */
    public function getCommercialFacture() {
        return $this->commercialFacture;
    }

    /**
     * Get the fonctionnalite.
     *
     * @return string Returns the fonctionnalite.
     */
    public function getFonctionnalite() {
        return $this->fonctionnalite;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the type filtre.
     *
     * @return string Returns the type filtre.
     */
    public function getTypeFiltre() {
        return $this->typeFiltre;
    }

    /**
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Set the code filtre.
     *
     * @param string $codeFiltre The code filtre.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCodeFiltre($codeFiltre) {
        $this->codeFiltre = $codeFiltre;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the commercial facture.
     *
     * @param bool $commercialFacture The commercial facture.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setCommercialFacture($commercialFacture) {
        $this->commercialFacture = $commercialFacture;
        return $this;
    }

    /**
     * Set the fonctionnalite.
     *
     * @param string $fonctionnalite The fonctionnalite.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setFonctionnalite($fonctionnalite) {
        $this->fonctionnalite = $fonctionnalite;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type filtre.
     *
     * @param string $typeFiltre The type filtre.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setTypeFiltre($typeFiltre) {
        $this->typeFiltre = $typeFiltre;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return FiltreEntetes Returns this Filtre entetes.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
