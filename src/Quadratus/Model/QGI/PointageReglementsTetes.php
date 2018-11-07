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

use DateTime;

/**
 * Pointage reglements tetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class PointageReglementsTetes {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code coll creation.
     *
     * @var string
     */
    private $codeCollCreation;

    /**
     * Code coll genere.
     *
     * @var string
     */
    private $codeCollGenere;

    /**
     * Code coll modif.
     *
     * @var string
     */
    private $codeCollModif;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date genere.
     *
     * @var DateTime
     */
    private $dateGenere;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Montant saisi.
     *
     * @var float
     */
    private $montantSaisi;

    /**
     * Num cpt payeur.
     *
     * @var string
     */
    private $numCptPayeur;

    /**
     * Num doss.
     *
     * @var string
     */
    private $numDoss;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code coll creation.
     *
     * @return string Returns the code coll creation.
     */
    public function getCodeCollCreation() {
        return $this->codeCollCreation;
    }

    /**
     * Get the code coll genere.
     *
     * @return string Returns the code coll genere.
     */
    public function getCodeCollGenere() {
        return $this->codeCollGenere;
    }

    /**
     * Get the code coll modif.
     *
     * @return string Returns the code coll modif.
     */
    public function getCodeCollModif() {
        return $this->codeCollModif;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date genere.
     *
     * @return DateTime Returns the date genere.
     */
    public function getDateGenere() {
        return $this->dateGenere;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the montant saisi.
     *
     * @return float Returns the montant saisi.
     */
    public function getMontantSaisi() {
        return $this->montantSaisi;
    }

    /**
     * Get the num cpt payeur.
     *
     * @return string Returns the num cpt payeur.
     */
    public function getNumCptPayeur() {
        return $this->numCptPayeur;
    }

    /**
     * Get the num doss.
     *
     * @return string Returns the num doss.
     */
    public function getNumDoss() {
        return $this->numDoss;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code coll creation.
     *
     * @param string $codeCollCreation The code coll creation.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setCodeCollCreation($codeCollCreation) {
        $this->codeCollCreation = $codeCollCreation;
        return $this;
    }

    /**
     * Set the code coll genere.
     *
     * @param string $codeCollGenere The code coll genere.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setCodeCollGenere($codeCollGenere) {
        $this->codeCollGenere = $codeCollGenere;
        return $this;
    }

    /**
     * Set the code coll modif.
     *
     * @param string $codeCollModif The code coll modif.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setCodeCollModif($codeCollModif) {
        $this->codeCollModif = $codeCollModif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date genere.
     *
     * @param DateTime $dateGenere The date genere.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setDateGenere(DateTime $dateGenere = null) {
        $this->dateGenere = $dateGenere;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant saisi.
     *
     * @param float $montantSaisi The montant saisi.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setMontantSaisi($montantSaisi) {
        $this->montantSaisi = $montantSaisi;
        return $this;
    }

    /**
     * Set the num cpt payeur.
     *
     * @param string $numCptPayeur The num cpt payeur.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setNumCptPayeur($numCptPayeur) {
        $this->numCptPayeur = $numCptPayeur;
        return $this;
    }

    /**
     * Set the num doss.
     *
     * @param string $numDoss The num doss.
     * @return PointageReglementsTetes Returns this pointage reglements tetes.
     */
    public function setNumDoss($numDoss) {
        $this->numDoss = $numDoss;
        return $this;
    }

}
