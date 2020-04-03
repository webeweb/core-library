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
 * Dadsu retraite entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuRetraiteEntete {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Mail contact.
     *
     * @var string
     */
    private $mailContact;

    /**
     * Nom contact.
     *
     * @var string
     */
    private $nomContact;

    /**
     * Tel contact.
     *
     * @var string
     */
    private $telContact;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the mail contact.
     *
     * @return string Returns the mail contact.
     */
    public function getMailContact() {
        return $this->mailContact;
    }

    /**
     * Get the nom contact.
     *
     * @return string Returns the nom contact.
     */
    public function getNomContact() {
        return $this->nomContact;
    }

    /**
     * Get the tel contact.
     *
     * @return string Returns the tel contact.
     */
    public function getTelContact() {
        return $this->telContact;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the mail contact.
     *
     * @param string $mailContact The mail contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setMailContact($mailContact) {
        $this->mailContact = $mailContact;
        return $this;
    }

    /**
     * Set the nom contact.
     *
     * @param string $nomContact The nom contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setNomContact($nomContact) {
        $this->nomContact = $nomContact;
        return $this;
    }

    /**
     * Set the tel contact.
     *
     * @param string $telContact The tel contact.
     * @return DadsuRetraiteEntete Returns this Dadsu retraite entete.
     */
    public function setTelContact($telContact) {
        $this->telContact = $telContact;
        return $this;
    }
}
