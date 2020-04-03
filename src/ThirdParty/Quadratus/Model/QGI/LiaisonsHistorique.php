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

use DateTime;

/**
 * Liaisons historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsHistorique {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Date liaison.
     *
     * @var DateTime|null
     */
    private $dateLiaison;

    /**
     * Date retour prevue.
     *
     * @var DateTime|null
     */
    private $dateRetourPrevue;

    /**
     * Destinataire.
     *
     * @var string
     */
    private $destinataire;

    /**
     * Modules.
     *
     * @var string
     */
    private $modules;

    /**
     * Modules bloques.
     *
     * @var string
     */
    private $modulesBloques;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Numero dossier.
     *
     * @var string
     */
    private $numeroDossier;

    /**
     * Sens.
     *
     * @var string
     */
    private $sens;

    /**
     * Type liaison.
     *
     * @var string
     */
    private $typeLiaison;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the date liaison.
     *
     * @return DateTime|null Returns the date liaison.
     */
    public function getDateLiaison() {
        return $this->dateLiaison;
    }

    /**
     * Get the date retour prevue.
     *
     * @return DateTime|null Returns the date retour prevue.
     */
    public function getDateRetourPrevue() {
        return $this->dateRetourPrevue;
    }

    /**
     * Get the destinataire.
     *
     * @return string Returns the destinataire.
     */
    public function getDestinataire() {
        return $this->destinataire;
    }

    /**
     * Get the modules.
     *
     * @return string Returns the modules.
     */
    public function getModules() {
        return $this->modules;
    }

    /**
     * Get the modules bloques.
     *
     * @return string Returns the modules bloques.
     */
    public function getModulesBloques() {
        return $this->modulesBloques;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the numero dossier.
     *
     * @return string Returns the numero dossier.
     */
    public function getNumeroDossier() {
        return $this->numeroDossier;
    }

    /**
     * Get the sens.
     *
     * @return string Returns the sens.
     */
    public function getSens() {
        return $this->sens;
    }

    /**
     * Get the type liaison.
     *
     * @return string Returns the type liaison.
     */
    public function getTypeLiaison() {
        return $this->typeLiaison;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the date liaison.
     *
     * @param DateTime|null $dateLiaison The date liaison.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDateLiaison(DateTime $dateLiaison = null) {
        $this->dateLiaison = $dateLiaison;
        return $this;
    }

    /**
     * Set the date retour prevue.
     *
     * @param DateTime|null $dateRetourPrevue The date retour prevue.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDateRetourPrevue(DateTime $dateRetourPrevue = null) {
        $this->dateRetourPrevue = $dateRetourPrevue;
        return $this;
    }

    /**
     * Set the destinataire.
     *
     * @param string $destinataire The destinataire.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setDestinataire($destinataire) {
        $this->destinataire = $destinataire;
        return $this;
    }

    /**
     * Set the modules.
     *
     * @param string $modules The modules.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setModules($modules) {
        $this->modules = $modules;
        return $this;
    }

    /**
     * Set the modules bloques.
     *
     * @param string $modulesBloques The modules bloques.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setModulesBloques($modulesBloques) {
        $this->modulesBloques = $modulesBloques;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero dossier.
     *
     * @param string $numeroDossier The numero dossier.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setNumeroDossier($numeroDossier) {
        $this->numeroDossier = $numeroDossier;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string $sens The sens.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setSens($sens) {
        $this->sens = $sens;
        return $this;
    }

    /**
     * Set the type liaison.
     *
     * @param string $typeLiaison The type liaison.
     * @return LiaisonsHistorique Returns this Liaisons historique.
     */
    public function setTypeLiaison($typeLiaison) {
        $this->typeLiaison = $typeLiaison;
        return $this;
    }
}
