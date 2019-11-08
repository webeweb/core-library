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
 * Postes charge.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PostesCharge {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Code charge.
     *
     * @var string
     */
    private $codeCharge;

    /**
     * Dern poste affecte.
     *
     * @var string
     */
    private $dernPosteAffecte;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Type prorata.
     *
     * @var string
     */
    private $typeProrata;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the code charge.
     *
     * @return string Returns the code charge.
     */
    public function getCodeCharge() {
        return $this->codeCharge;
    }

    /**
     * Get the dern poste affecte.
     *
     * @return string Returns the dern poste affecte.
     */
    public function getDernPosteAffecte() {
        return $this->dernPosteAffecte;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the type prorata.
     *
     * @return string Returns the type prorata.
     */
    public function getTypeProrata() {
        return $this->typeProrata;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the code charge.
     *
     * @param string $codeCharge The code charge.
     */
    public function setCodeCharge($codeCharge) {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the dern poste affecte.
     *
     * @param string $dernPosteAffecte The dern poste affecte.
     */
    public function setDernPosteAffecte($dernPosteAffecte) {
        $this->dernPosteAffecte = $dernPosteAffecte;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the type prorata.
     *
     * @param string $typeProrata The type prorata.
     */
    public function setTypeProrata($typeProrata) {
        $this->typeProrata = $typeProrata;
        return $this;
    }
}
