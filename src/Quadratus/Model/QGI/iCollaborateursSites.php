<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * i collaborateurs sites model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iCollaborateursSites {

    /**
     * Adresse i p.
     *
     * @var string
     */
    private $adresseIP;

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Dossier.
     *
     * @var string
     */
    private $dossier;

    /**
     * Restr cli assist1.
     *
     * @var string
     */
    private $restrCliAssist1;

    /**
     * Restr cli assist2.
     *
     * @var string
     */
    private $restrCliAssist2;

    /**
     * Restr cli autre1.
     *
     * @var string
     */
    private $restrCliAutre1;

    /**
     * Restr cli autre2.
     *
     * @var string
     */
    private $restrCliAutre2;

    /**
     * Restr cli collab.
     *
     * @var string
     */
    private $restrCliCollab;

    /**
     * Restr cli expert.
     *
     * @var string
     */
    private $restrCliExpert;

    /**
     * Restr cli portef.
     *
     * @var string
     */
    private $restrCliPortef;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse i p.
     *
     * @return string Returns the adresse i p.
     */
    public function getAdresseIP() {
        return $this->adresseIP;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the dossier.
     *
     * @return string Returns the dossier.
     */
    public function getDossier() {
        return $this->dossier;
    }

    /**
     * Get the restr cli assist1.
     *
     * @return string Returns the restr cli assist1.
     */
    public function getRestrCliAssist1() {
        return $this->restrCliAssist1;
    }

    /**
     * Get the restr cli assist2.
     *
     * @return string Returns the restr cli assist2.
     */
    public function getRestrCliAssist2() {
        return $this->restrCliAssist2;
    }

    /**
     * Get the restr cli autre1.
     *
     * @return string Returns the restr cli autre1.
     */
    public function getRestrCliAutre1() {
        return $this->restrCliAutre1;
    }

    /**
     * Get the restr cli autre2.
     *
     * @return string Returns the restr cli autre2.
     */
    public function getRestrCliAutre2() {
        return $this->restrCliAutre2;
    }

    /**
     * Get the restr cli collab.
     *
     * @return string Returns the restr cli collab.
     */
    public function getRestrCliCollab() {
        return $this->restrCliCollab;
    }

    /**
     * Get the restr cli expert.
     *
     * @return string Returns the restr cli expert.
     */
    public function getRestrCliExpert() {
        return $this->restrCliExpert;
    }

    /**
     * Get the restr cli portef.
     *
     * @return string Returns the restr cli portef.
     */
    public function getRestrCliPortef() {
        return $this->restrCliPortef;
    }

    /**
     * Set the adresse i p.
     *
     * @param string $adresseIP The adresse i p.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setAdresseIP($adresseIP) {
        $this->adresseIP = $adresseIP;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the dossier.
     *
     * @param string $dossier The dossier.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setDossier($dossier) {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Set the restr cli assist1.
     *
     * @param string $restrCliAssist1 The restr cli assist1.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAssist1($restrCliAssist1) {
        $this->restrCliAssist1 = $restrCliAssist1;
        return $this;
    }

    /**
     * Set the restr cli assist2.
     *
     * @param string $restrCliAssist2 The restr cli assist2.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAssist2($restrCliAssist2) {
        $this->restrCliAssist2 = $restrCliAssist2;
        return $this;
    }

    /**
     * Set the restr cli autre1.
     *
     * @param string $restrCliAutre1 The restr cli autre1.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAutre1($restrCliAutre1) {
        $this->restrCliAutre1 = $restrCliAutre1;
        return $this;
    }

    /**
     * Set the restr cli autre2.
     *
     * @param string $restrCliAutre2 The restr cli autre2.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliAutre2($restrCliAutre2) {
        $this->restrCliAutre2 = $restrCliAutre2;
        return $this;
    }

    /**
     * Set the restr cli collab.
     *
     * @param string $restrCliCollab The restr cli collab.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliCollab($restrCliCollab) {
        $this->restrCliCollab = $restrCliCollab;
        return $this;
    }

    /**
     * Set the restr cli expert.
     *
     * @param string $restrCliExpert The restr cli expert.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliExpert($restrCliExpert) {
        $this->restrCliExpert = $restrCliExpert;
        return $this;
    }

    /**
     * Set the restr cli portef.
     *
     * @param string $restrCliPortef The restr cli portef.
     * @return iCollaborateursSites Returns this i collaborateurs sites.
     */
    public function setRestrCliPortef($restrCliPortef) {
        $this->restrCliPortef = $restrCliPortef;
        return $this;
    }

}
