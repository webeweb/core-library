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
 * Rg correspondances.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RgCorrespondances {

    /**
     * Fichiers publier web.
     *
     * @var string
     */
    private $fichiersPublierWeb;

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
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

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
     * Get the fichiers publier web.
     *
     * @return string Returns the fichiers publier web.
     */
    public function getFichiersPublierWeb() {
        return $this->fichiersPublierWeb;
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
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
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
     * Set the fichiers publier web.
     *
     * @param string $fichiersPublierWeb The fichiers publier web.
     */
    public function setFichiersPublierWeb($fichiersPublierWeb) {
        $this->fichiersPublierWeb = $fichiersPublierWeb;
        return $this;
    }

    /**
     * Set the ignorer.
     *
     * @param string $ignorer The ignorer.
     */
    public function setIgnorer($ignorer) {
        $this->ignorer = $ignorer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param int $niveau The niveau.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the type donnees.
     *
     * @param string $typeDonnees The type donnees.
     */
    public function setTypeDonnees($typeDonnees) {
        $this->typeDonnees = $typeDonnees;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param string $valeur The valeur.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Set the valeur origine.
     *
     * @param string $valeurOrigine The valeur origine.
     */
    public function setValeurOrigine($valeurOrigine) {
        $this->valeurOrigine = $valeurOrigine;
        return $this;
    }
}
