<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Saisie prepa colonne model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class SaisiePrepaColonne {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Intit col.
     *
     * @var string
     */
    private $intitCol;

    /**
     * Ligne abondement.
     *
     * @var string
     */
    private $ligneAbondement;

    /**
     * Num col.
     *
     * @var string
     */
    private $numCol;

    /**
     * Width.
     *
     * @var int
     */
    private $width;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the intit col.
     *
     * @return string Returns the intit col.
     */
    public function getIntitCol() {
        return $this->intitCol;
    }

    /**
     * Get the ligne abondement.
     *
     * @return string Returns the ligne abondement.
     */
    public function getLigneAbondement() {
        return $this->ligneAbondement;
    }

    /**
     * Get the num col.
     *
     * @return string Returns the num col.
     */
    public function getNumCol() {
        return $this->numCol;
    }

    /**
     * Get the width.
     *
     * @return int Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the intit col.
     *
     * @param string $intitCol The intit col.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setIntitCol($intitCol) {
        $this->intitCol = $intitCol;
        return $this;
    }

    /**
     * Set the ligne abondement.
     *
     * @param string $ligneAbondement The ligne abondement.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setLigneAbondement($ligneAbondement) {
        $this->ligneAbondement = $ligneAbondement;
        return $this;
    }

    /**
     * Set the num col.
     *
     * @param string $numCol The num col.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setNumCol($numCol) {
        $this->numCol = $numCol;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param int $width The width.
     * @return SaisiePrepaColonne Returns this saisie prepa colonne.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }
}
