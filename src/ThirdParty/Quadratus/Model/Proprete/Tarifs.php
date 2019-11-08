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
 * Tarifs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Tarifs {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

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
     * Code col creation.
     *
     * @var string
     */
    private $codeColCreation;

    /**
     * Code col modification.
     *
     * @var string
     */
    private $codeColModification;

    /**
     * Coeff tr1.
     *
     * @var float
     */
    private $coeffTr1;

    /**
     * Coeff tr2.
     *
     * @var float
     */
    private $coeffTr2;

    /**
     * Coeff tr3.
     *
     * @var float
     */
    private $coeffTr3;

    /**
     * Coeff tr4.
     *
     * @var float
     */
    private $coeffTr4;

    /**
     * Coeff tr5.
     *
     * @var float
     */
    private $coeffTr5;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Fam article.
     *
     * @var string
     */
    private $famArticle;

    /**
     * Fam client.
     *
     * @var string
     */
    private $famClient;

    /**
     * Prix net tr1.
     *
     * @var bool
     */
    private $prixNetTr1;

    /**
     * Prix net tr2.
     *
     * @var bool
     */
    private $prixNetTr2;

    /**
     * Prix net tr3.
     *
     * @var bool
     */
    private $prixNetTr3;

    /**
     * Prix net tr4.
     *
     * @var bool
     */
    private $prixNetTr4;

    /**
     * Prix net tr5.
     *
     * @var bool
     */
    private $prixNetTr5;

    /**
     * Pu article.
     *
     * @var bool
     */
    private $puArticle;

    /**
     * Pu base.
     *
     * @var float
     */
    private $puBase;

    /**
     * Pu tr1.
     *
     * @var float
     */
    private $puTr1;

    /**
     * Pu tr2.
     *
     * @var float
     */
    private $puTr2;

    /**
     * Pu tr3.
     *
     * @var float
     */
    private $puTr3;

    /**
     * Pu tr4.
     *
     * @var float
     */
    private $puTr4;

    /**
     * Pu tr5.
     *
     * @var float
     */
    private $puTr5;

    /**
     * Qte tr1.
     *
     * @var float
     */
    private $qteTr1;

    /**
     * Qte tr2.
     *
     * @var float
     */
    private $qteTr2;

    /**
     * Qte tr3.
     *
     * @var float
     */
    private $qteTr3;

    /**
     * Qte tr4.
     *
     * @var float
     */
    private $qteTr4;

    /**
     * Qte tr5.
     *
     * @var float
     */
    private $qteTr5;

    /**
     * Sous fam client.
     *
     * @var string
     */
    private $sousFamClient;

    /**
     * Type appli coef.
     *
     * @var string
     */
    private $typeAppliCoef;

    /**
     * Type article.
     *
     * @var string
     */
    private $typeArticle;

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
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
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
     * Get the code col creation.
     *
     * @return string Returns the code col creation.
     */
    public function getCodeColCreation() {
        return $this->codeColCreation;
    }

    /**
     * Get the code col modification.
     *
     * @return string Returns the code col modification.
     */
    public function getCodeColModification() {
        return $this->codeColModification;
    }

    /**
     * Get the coeff tr1.
     *
     * @return float Returns the coeff tr1.
     */
    public function getCoeffTr1() {
        return $this->coeffTr1;
    }

    /**
     * Get the coeff tr2.
     *
     * @return float Returns the coeff tr2.
     */
    public function getCoeffTr2() {
        return $this->coeffTr2;
    }

    /**
     * Get the coeff tr3.
     *
     * @return float Returns the coeff tr3.
     */
    public function getCoeffTr3() {
        return $this->coeffTr3;
    }

    /**
     * Get the coeff tr4.
     *
     * @return float Returns the coeff tr4.
     */
    public function getCoeffTr4() {
        return $this->coeffTr4;
    }

    /**
     * Get the coeff tr5.
     *
     * @return float Returns the coeff tr5.
     */
    public function getCoeffTr5() {
        return $this->coeffTr5;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the fam article.
     *
     * @return string Returns the fam article.
     */
    public function getFamArticle() {
        return $this->famArticle;
    }

    /**
     * Get the fam client.
     *
     * @return string Returns the fam client.
     */
    public function getFamClient() {
        return $this->famClient;
    }

    /**
     * Get the prix net tr1.
     *
     * @return bool Returns the prix net tr1.
     */
    public function getPrixNetTr1() {
        return $this->prixNetTr1;
    }

    /**
     * Get the prix net tr2.
     *
     * @return bool Returns the prix net tr2.
     */
    public function getPrixNetTr2() {
        return $this->prixNetTr2;
    }

    /**
     * Get the prix net tr3.
     *
     * @return bool Returns the prix net tr3.
     */
    public function getPrixNetTr3() {
        return $this->prixNetTr3;
    }

    /**
     * Get the prix net tr4.
     *
     * @return bool Returns the prix net tr4.
     */
    public function getPrixNetTr4() {
        return $this->prixNetTr4;
    }

    /**
     * Get the prix net tr5.
     *
     * @return bool Returns the prix net tr5.
     */
    public function getPrixNetTr5() {
        return $this->prixNetTr5;
    }

    /**
     * Get the pu article.
     *
     * @return bool Returns the pu article.
     */
    public function getPuArticle() {
        return $this->puArticle;
    }

    /**
     * Get the pu base.
     *
     * @return float Returns the pu base.
     */
    public function getPuBase() {
        return $this->puBase;
    }

    /**
     * Get the pu tr1.
     *
     * @return float Returns the pu tr1.
     */
    public function getPuTr1() {
        return $this->puTr1;
    }

    /**
     * Get the pu tr2.
     *
     * @return float Returns the pu tr2.
     */
    public function getPuTr2() {
        return $this->puTr2;
    }

    /**
     * Get the pu tr3.
     *
     * @return float Returns the pu tr3.
     */
    public function getPuTr3() {
        return $this->puTr3;
    }

    /**
     * Get the pu tr4.
     *
     * @return float Returns the pu tr4.
     */
    public function getPuTr4() {
        return $this->puTr4;
    }

    /**
     * Get the pu tr5.
     *
     * @return float Returns the pu tr5.
     */
    public function getPuTr5() {
        return $this->puTr5;
    }

    /**
     * Get the qte tr1.
     *
     * @return float Returns the qte tr1.
     */
    public function getQteTr1() {
        return $this->qteTr1;
    }

    /**
     * Get the qte tr2.
     *
     * @return float Returns the qte tr2.
     */
    public function getQteTr2() {
        return $this->qteTr2;
    }

    /**
     * Get the qte tr3.
     *
     * @return float Returns the qte tr3.
     */
    public function getQteTr3() {
        return $this->qteTr3;
    }

    /**
     * Get the qte tr4.
     *
     * @return float Returns the qte tr4.
     */
    public function getQteTr4() {
        return $this->qteTr4;
    }

    /**
     * Get the qte tr5.
     *
     * @return float Returns the qte tr5.
     */
    public function getQteTr5() {
        return $this->qteTr5;
    }

    /**
     * Get the sous fam client.
     *
     * @return string Returns the sous fam client.
     */
    public function getSousFamClient() {
        return $this->sousFamClient;
    }

    /**
     * Get the type appli coef.
     *
     * @return string Returns the type appli coef.
     */
    public function getTypeAppliCoef() {
        return $this->typeAppliCoef;
    }

    /**
     * Get the type article.
     *
     * @return string Returns the type article.
     */
    public function getTypeArticle() {
        return $this->typeArticle;
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
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
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
     * Set the code col creation.
     *
     * @param string $codeColCreation The code col creation.
     */
    public function setCodeColCreation($codeColCreation) {
        $this->codeColCreation = $codeColCreation;
        return $this;
    }

    /**
     * Set the code col modification.
     *
     * @param string $codeColModification The code col modification.
     */
    public function setCodeColModification($codeColModification) {
        $this->codeColModification = $codeColModification;
        return $this;
    }

    /**
     * Set the coeff tr1.
     *
     * @param float $coeffTr1 The coeff tr1.
     */
    public function setCoeffTr1($coeffTr1) {
        $this->coeffTr1 = $coeffTr1;
        return $this;
    }

    /**
     * Set the coeff tr2.
     *
     * @param float $coeffTr2 The coeff tr2.
     */
    public function setCoeffTr2($coeffTr2) {
        $this->coeffTr2 = $coeffTr2;
        return $this;
    }

    /**
     * Set the coeff tr3.
     *
     * @param float $coeffTr3 The coeff tr3.
     */
    public function setCoeffTr3($coeffTr3) {
        $this->coeffTr3 = $coeffTr3;
        return $this;
    }

    /**
     * Set the coeff tr4.
     *
     * @param float $coeffTr4 The coeff tr4.
     */
    public function setCoeffTr4($coeffTr4) {
        $this->coeffTr4 = $coeffTr4;
        return $this;
    }

    /**
     * Set the coeff tr5.
     *
     * @param float $coeffTr5 The coeff tr5.
     */
    public function setCoeffTr5($coeffTr5) {
        $this->coeffTr5 = $coeffTr5;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the fam article.
     *
     * @param string $famArticle The fam article.
     */
    public function setFamArticle($famArticle) {
        $this->famArticle = $famArticle;
        return $this;
    }

    /**
     * Set the fam client.
     *
     * @param string $famClient The fam client.
     */
    public function setFamClient($famClient) {
        $this->famClient = $famClient;
        return $this;
    }

    /**
     * Set the prix net tr1.
     *
     * @param bool $prixNetTr1 The prix net tr1.
     */
    public function setPrixNetTr1($prixNetTr1) {
        $this->prixNetTr1 = $prixNetTr1;
        return $this;
    }

    /**
     * Set the prix net tr2.
     *
     * @param bool $prixNetTr2 The prix net tr2.
     */
    public function setPrixNetTr2($prixNetTr2) {
        $this->prixNetTr2 = $prixNetTr2;
        return $this;
    }

    /**
     * Set the prix net tr3.
     *
     * @param bool $prixNetTr3 The prix net tr3.
     */
    public function setPrixNetTr3($prixNetTr3) {
        $this->prixNetTr3 = $prixNetTr3;
        return $this;
    }

    /**
     * Set the prix net tr4.
     *
     * @param bool $prixNetTr4 The prix net tr4.
     */
    public function setPrixNetTr4($prixNetTr4) {
        $this->prixNetTr4 = $prixNetTr4;
        return $this;
    }

    /**
     * Set the prix net tr5.
     *
     * @param bool $prixNetTr5 The prix net tr5.
     */
    public function setPrixNetTr5($prixNetTr5) {
        $this->prixNetTr5 = $prixNetTr5;
        return $this;
    }

    /**
     * Set the pu article.
     *
     * @param bool $puArticle The pu article.
     */
    public function setPuArticle($puArticle) {
        $this->puArticle = $puArticle;
        return $this;
    }

    /**
     * Set the pu base.
     *
     * @param float $puBase The pu base.
     */
    public function setPuBase($puBase) {
        $this->puBase = $puBase;
        return $this;
    }

    /**
     * Set the pu tr1.
     *
     * @param float $puTr1 The pu tr1.
     */
    public function setPuTr1($puTr1) {
        $this->puTr1 = $puTr1;
        return $this;
    }

    /**
     * Set the pu tr2.
     *
     * @param float $puTr2 The pu tr2.
     */
    public function setPuTr2($puTr2) {
        $this->puTr2 = $puTr2;
        return $this;
    }

    /**
     * Set the pu tr3.
     *
     * @param float $puTr3 The pu tr3.
     */
    public function setPuTr3($puTr3) {
        $this->puTr3 = $puTr3;
        return $this;
    }

    /**
     * Set the pu tr4.
     *
     * @param float $puTr4 The pu tr4.
     */
    public function setPuTr4($puTr4) {
        $this->puTr4 = $puTr4;
        return $this;
    }

    /**
     * Set the pu tr5.
     *
     * @param float $puTr5 The pu tr5.
     */
    public function setPuTr5($puTr5) {
        $this->puTr5 = $puTr5;
        return $this;
    }

    /**
     * Set the qte tr1.
     *
     * @param float $qteTr1 The qte tr1.
     */
    public function setQteTr1($qteTr1) {
        $this->qteTr1 = $qteTr1;
        return $this;
    }

    /**
     * Set the qte tr2.
     *
     * @param float $qteTr2 The qte tr2.
     */
    public function setQteTr2($qteTr2) {
        $this->qteTr2 = $qteTr2;
        return $this;
    }

    /**
     * Set the qte tr3.
     *
     * @param float $qteTr3 The qte tr3.
     */
    public function setQteTr3($qteTr3) {
        $this->qteTr3 = $qteTr3;
        return $this;
    }

    /**
     * Set the qte tr4.
     *
     * @param float $qteTr4 The qte tr4.
     */
    public function setQteTr4($qteTr4) {
        $this->qteTr4 = $qteTr4;
        return $this;
    }

    /**
     * Set the qte tr5.
     *
     * @param float $qteTr5 The qte tr5.
     */
    public function setQteTr5($qteTr5) {
        $this->qteTr5 = $qteTr5;
        return $this;
    }

    /**
     * Set the sous fam client.
     *
     * @param string $sousFamClient The sous fam client.
     */
    public function setSousFamClient($sousFamClient) {
        $this->sousFamClient = $sousFamClient;
        return $this;
    }

    /**
     * Set the type appli coef.
     *
     * @param string $typeAppliCoef The type appli coef.
     */
    public function setTypeAppliCoef($typeAppliCoef) {
        $this->typeAppliCoef = $typeAppliCoef;
        return $this;
    }

    /**
     * Set the type article.
     *
     * @param string $typeArticle The type article.
     */
    public function setTypeArticle($typeArticle) {
        $this->typeArticle = $typeArticle;
        return $this;
    }
}
