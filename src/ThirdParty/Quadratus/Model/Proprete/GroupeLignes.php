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
 * Groupe lignes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class GroupeLignes {

    /**
     * Code element.
     *
     * @var string
     */
    private $codeElement;

    /**
     * Groupe.
     *
     * @var string
     */
    private $groupe;

    /**
     * Ordre.
     *
     * @var int
     */
    private $ordre;

    /**
     * Type element.
     *
     * @var string
     */
    private $typeElement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getGroupe() {
        return $this->groupe;
    }

    /**
     * Get the ordre.
     *
     * @return int Returns the ordre.
     */
    public function getOrdre() {
        return $this->ordre;
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
     * Set the code element.
     *
     * @param string $codeElement The code element.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setCodeElement($codeElement) {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the groupe.
     *
     * @param string $groupe The groupe.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setGroupe($groupe) {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int $ordre The ordre.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setOrdre($ordre) {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string $typeElement The type element.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setTypeElement($typeElement) {
        $this->typeElement = $typeElement;
        return $this;
    }
}
