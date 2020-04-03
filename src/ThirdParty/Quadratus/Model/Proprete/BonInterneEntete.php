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
 * Bon interne entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonInterneEntete {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code livreur.
     *
     * @var string
     */
    private $codeLivreur;

    /**
     * Date livraison.
     *
     * @var DateTime|null
     */
    private $dateLivraison;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * No bon int.
     *
     * @var string
     */
    private $noBonInt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code livreur.
     *
     * @return string Returns the code livreur.
     */
    public function getCodeLivreur() {
        return $this->codeLivreur;
    }

    /**
     * Get the date livraison.
     *
     * @return DateTime|null Returns the date livraison.
     */
    public function getDateLivraison() {
        return $this->dateLivraison;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the no bon int.
     *
     * @return string Returns the no bon int.
     */
    public function getNoBonInt() {
        return $this->noBonInt;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code livreur.
     *
     * @param string $codeLivreur The code livreur.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setCodeLivreur($codeLivreur) {
        $this->codeLivreur = $codeLivreur;
        return $this;
    }

    /**
     * Set the date livraison.
     *
     * @param DateTime|null $dateLivraison The date livraison.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setDateLivraison(DateTime $dateLivraison = null) {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the no bon int.
     *
     * @param string $noBonInt The no bon int.
     * @return BonInterneEntete Returns this Bon interne entete.
     */
    public function setNoBonInt($noBonInt) {
        $this->noBonInt = $noBonInt;
        return $this;
    }
}
