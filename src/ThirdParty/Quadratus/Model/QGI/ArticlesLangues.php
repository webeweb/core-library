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
 * Articles langues.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesLangues {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code langue.
     *
     * @var string
     */
    private $codeLangue;

    /**
     * Designation apres.
     *
     * @var string
     */
    private $designationApres;

    /**
     * Designation avant.
     *
     * @var string
     */
    private $designationAvant;

    /**
     * Intitule1.
     *
     * @var string
     */
    private $intitule1;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * Intitule4.
     *
     * @var string
     */
    private $intitule4;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code langue.
     *
     * @return string Returns the code langue.
     */
    public function getCodeLangue() {
        return $this->codeLangue;
    }

    /**
     * Get the designation apres.
     *
     * @return string Returns the designation apres.
     */
    public function getDesignationApres() {
        return $this->designationApres;
    }

    /**
     * Get the designation avant.
     *
     * @return string Returns the designation avant.
     */
    public function getDesignationAvant() {
        return $this->designationAvant;
    }

    /**
     * Get the intitule1.
     *
     * @return string Returns the intitule1.
     */
    public function getIntitule1() {
        return $this->intitule1;
    }

    /**
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Get the intitule4.
     *
     * @return string Returns the intitule4.
     */
    public function getIntitule4() {
        return $this->intitule4;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code langue.
     *
     * @param string $codeLangue The code langue.
     */
    public function setCodeLangue($codeLangue) {
        $this->codeLangue = $codeLangue;
        return $this;
    }

    /**
     * Set the designation apres.
     *
     * @param string $designationApres The designation apres.
     */
    public function setDesignationApres($designationApres) {
        $this->designationApres = $designationApres;
        return $this;
    }

    /**
     * Set the designation avant.
     *
     * @param string $designationAvant The designation avant.
     */
    public function setDesignationAvant($designationAvant) {
        $this->designationAvant = $designationAvant;
        return $this;
    }

    /**
     * Set the intitule1.
     *
     * @param string $intitule1 The intitule1.
     */
    public function setIntitule1($intitule1) {
        $this->intitule1 = $intitule1;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the intitule4.
     *
     * @param string $intitule4 The intitule4.
     */
    public function setIntitule4($intitule4) {
        $this->intitule4 = $intitule4;
        return $this;
    }
}
