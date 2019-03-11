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
 * R g_ correspondances model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RG_Correspondances {

    /**
     * Fichiers_ publier web.
     *
     * @var string
     */
    private $fichiers_PublierWeb;

    /**
     * Ignorer.
     *
     * @var string
     */
    private $ignorer;

    /**
     * Niveau.
     *
     * @var int
     */
    private $niveau;

    /**
     * Type donnees.
     *
     * @var string
     */
    private $typeDonnees;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Valeur.
     *
     * @var string
     */
    private $valeur;

    /**
     * Valeur origine.
     *
     * @var string
     */
    private $valeurOrigine;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the fichiers_ publier web.
     *
     * @return string Returns the fichiers_ publier web.
     */
    public function getFichiers_PublierWeb() {
        return $this->fichiers_PublierWeb;
    }

    /**
     * Get the ignorer.
     *
     * @return string Returns the ignorer.
     */
    public function getIgnorer() {
        return $this->ignorer;
    }

    /**
     * Get the niveau.
     *
     * @return int Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the type donnees.
     *
     * @return string Returns the type donnees.
     */
    public function getTypeDonnees() {
        return $this->typeDonnees;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Get the valeur.
     *
     * @return string Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Get the valeur origine.
     *
     * @return string Returns the valeur origine.
     */
    public function getValeurOrigine() {
        return $this->valeurOrigine;
    }

    /**
     * Set the fichiers_ publier web.
     *
     * @param string $fichiers_PublierWeb The fichiers_ publier web.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setFichiers_PublierWeb($fichiers_PublierWeb) {
        $this->fichiers_PublierWeb = $fichiers_PublierWeb;
        return $this;
    }

    /**
     * Set the ignorer.
     *
     * @param string $ignorer The ignorer.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setIgnorer($ignorer) {
        $this->ignorer = $ignorer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the type donnees.
     *
     * @param string $typeDonnees The type donnees.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setTypeDonnees($typeDonnees) {
        $this->typeDonnees = $typeDonnees;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param string $valeur The valeur.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Set the valeur origine.
     *
     * @param string $valeurOrigine The valeur origine.
     * @return RG_Correspondances Returns this r g_ correspondances.
     */
    public function setValeurOrigine($valeurOrigine) {
        $this->valeurOrigine = $valeurOrigine;
        return $this;
    }
}
