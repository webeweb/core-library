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

/**
 * Criteres chantier model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class CriteresChantier {

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
     * Code ref1.
     *
     * @var string
     */
    private $codeRef1;

    /**
     * Code ref2.
     *
     * @var string
     */
    private $codeRef2;

    /**
     * Code ref3.
     *
     * @var string
     */
    private $codeRef3;

    /**
     * Code ref4.
     *
     * @var string
     */
    private $codeRef4;

    /**
     * Code ref5.
     *
     * @var string
     */
    private $codeRef5;

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Texte2.
     *
     * @var string
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string
     */
    private $texte5;

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
     * Get the code ref1.
     *
     * @return string Returns the code ref1.
     */
    public function getCodeRef1() {
        return $this->codeRef1;
    }

    /**
     * Get the code ref2.
     *
     * @return string Returns the code ref2.
     */
    public function getCodeRef2() {
        return $this->codeRef2;
    }

    /**
     * Get the code ref3.
     *
     * @return string Returns the code ref3.
     */
    public function getCodeRef3() {
        return $this->codeRef3;
    }

    /**
     * Get the code ref4.
     *
     * @return string Returns the code ref4.
     */
    public function getCodeRef4() {
        return $this->codeRef4;
    }

    /**
     * Get the code ref5.
     *
     * @return string Returns the code ref5.
     */
    public function getCodeRef5() {
        return $this->codeRef5;
    }

    /**
     * Get the texte1.
     *
     * @return string Returns the texte1.
     */
    public function getTexte1() {
        return $this->texte1;
    }

    /**
     * Get the texte2.
     *
     * @return string Returns the texte2.
     */
    public function getTexte2() {
        return $this->texte2;
    }

    /**
     * Get the texte3.
     *
     * @return string Returns the texte3.
     */
    public function getTexte3() {
        return $this->texte3;
    }

    /**
     * Get the texte4.
     *
     * @return string Returns the texte4.
     */
    public function getTexte4() {
        return $this->texte4;
    }

    /**
     * Get the texte5.
     *
     * @return string Returns the texte5.
     */
    public function getTexte5() {
        return $this->texte5;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code ref1.
     *
     * @param string $codeRef1 The code ref1.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeRef1($codeRef1) {
        $this->codeRef1 = $codeRef1;
        return $this;
    }

    /**
     * Set the code ref2.
     *
     * @param string $codeRef2 The code ref2.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeRef2($codeRef2) {
        $this->codeRef2 = $codeRef2;
        return $this;
    }

    /**
     * Set the code ref3.
     *
     * @param string $codeRef3 The code ref3.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeRef3($codeRef3) {
        $this->codeRef3 = $codeRef3;
        return $this;
    }

    /**
     * Set the code ref4.
     *
     * @param string $codeRef4 The code ref4.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeRef4($codeRef4) {
        $this->codeRef4 = $codeRef4;
        return $this;
    }

    /**
     * Set the code ref5.
     *
     * @param string $codeRef5 The code ref5.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setCodeRef5($codeRef5) {
        $this->codeRef5 = $codeRef5;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string $texte1 The texte1.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setTexte1($texte1) {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string $texte2 The texte2.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setTexte2($texte2) {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string $texte3 The texte3.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setTexte3($texte3) {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string $texte4 The texte4.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setTexte4($texte4) {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string $texte5 The texte5.
     * @return CriteresChantier Returns this criteres chantier.
     */
    public function setTexte5($texte5) {
        $this->texte5 = $texte5;
        return $this;
    }

}
