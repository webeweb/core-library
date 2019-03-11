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
 * Clients lst perso model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPerso {

    /**
     * Chapitre.
     *
     * @var string
     */
    private $chapitre;

    /**
     * Coll creat.
     *
     * @var string
     */
    private $collCreat;

    /**
     * Coll modif.
     *
     * @var string
     */
    private $collModif;

    /**
     * Date creat.
     *
     * @var DateTime
     */
    private $dateCreat;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * G uniq i d.
     *
     * @var string
     */
    private $gUniqID;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Lst collab.
     *
     * @var string
     */
    private $lstCollab;

    /**
     * Option visu.
     *
     * @var string
     */
    private $optionVisu;

    /**
     * Origine.
     *
     * @var int
     */
    private $origine;

    /**
     * Periode deb.
     *
     * @var DateTime
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime
     */
    private $periodeFin;

    /**
     * Type saisie.
     *
     * @var bool
     */
    private $typeSaisie;

    /**
     * Type sel.
     *
     * @var string
     */
    private $typeSel;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chapitre.
     *
     * @return string Returns the chapitre.
     */
    public function getChapitre() {
        return $this->chapitre;
    }

    /**
     * Get the coll creat.
     *
     * @return string Returns the coll creat.
     */
    public function getCollCreat() {
        return $this->collCreat;
    }

    /**
     * Get the coll modif.
     *
     * @return string Returns the coll modif.
     */
    public function getCollModif() {
        return $this->collModif;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
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
     * Get the g uniq i d.
     *
     * @return string Returns the g uniq i d.
     */
    public function getGUniqID() {
        return $this->gUniqID;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the lst collab.
     *
     * @return string Returns the lst collab.
     */
    public function getLstCollab() {
        return $this->lstCollab;
    }

    /**
     * Get the option visu.
     *
     * @return string Returns the option visu.
     */
    public function getOptionVisu() {
        return $this->optionVisu;
    }

    /**
     * Get the origine.
     *
     * @return int Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime Returns the periode deb.
     */
    public function getPeriodeDeb() {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime Returns the periode fin.
     */
    public function getPeriodeFin() {
        return $this->periodeFin;
    }

    /**
     * Get the type saisie.
     *
     * @return bool Returns the type saisie.
     */
    public function getTypeSaisie() {
        return $this->typeSaisie;
    }

    /**
     * Get the type sel.
     *
     * @return string Returns the type sel.
     */
    public function getTypeSel() {
        return $this->typeSel;
    }

    /**
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the coll creat.
     *
     * @param string $collCreat The coll creat.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setCollCreat($collCreat) {
        $this->collCreat = $collCreat;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string $collModif The coll modif.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setCollModif($collModif) {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime $dateCreat The date creat.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the g uniq i d.
     *
     * @param string $gUniqID The g uniq i d.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setGUniqID($gUniqID) {
        $this->gUniqID = $gUniqID;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the lst collab.
     *
     * @param string $lstCollab The lst collab.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setLstCollab($lstCollab) {
        $this->lstCollab = $lstCollab;
        return $this;
    }

    /**
     * Set the option visu.
     *
     * @param string $optionVisu The option visu.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setOptionVisu($optionVisu) {
        $this->optionVisu = $optionVisu;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param int $origine The origine.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime $periodeDeb The periode deb.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setPeriodeDeb(DateTime $periodeDeb = null) {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime $periodeFin The periode fin.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setPeriodeFin(DateTime $periodeFin = null) {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param bool $typeSaisie The type saisie.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setTypeSaisie($typeSaisie) {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }

    /**
     * Set the type sel.
     *
     * @param string $typeSel The type sel.
     * @return ClientsLstPerso Returns this clients lst perso.
     */
    public function setTypeSel($typeSel) {
        $this->typeSel = $typeSel;
        return $this;
    }
}
