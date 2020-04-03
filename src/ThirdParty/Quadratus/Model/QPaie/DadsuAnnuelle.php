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
 * Dadsu annuelle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuAnnuelle {

    /**
     * Nom fichier dadsu.
     *
     * @var string
     */
    private $nomFichierDadsu;

    /**
     * Tds annee.
     *
     * @var int
     */
    private $tdsAnnee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the nom fichier dadsu.
     *
     * @return string Returns the nom fichier dadsu.
     */
    public function getNomFichierDadsu() {
        return $this->nomFichierDadsu;
    }

    /**
     * Get the tds annee.
     *
     * @return int Returns the tds annee.
     */
    public function getTdsAnnee() {
        return $this->tdsAnnee;
    }

    /**
     * Set the nom fichier dadsu.
     *
     * @param string $nomFichierDadsu The nom fichier dadsu.
     * @return DadsuAnnuelle Returns this Dadsu annuelle.
     */
    public function setNomFichierDadsu($nomFichierDadsu) {
        $this->nomFichierDadsu = $nomFichierDadsu;
        return $this;
    }

    /**
     * Set the tds annee.
     *
     * @param int $tdsAnnee The tds annee.
     * @return DadsuAnnuelle Returns this Dadsu annuelle.
     */
    public function setTdsAnnee($tdsAnnee) {
        $this->tdsAnnee = $tdsAnnee;
        return $this;
    }
}
