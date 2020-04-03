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
 * Regroupement ds.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RegroupementDs {

    /**
     * Code rds.
     *
     * @var string
     */
    private $codeRds;

    /**
     * Code rupture.
     *
     * @var string
     */
    private $codeRupture;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code rds.
     *
     * @return string Returns the code rds.
     */
    public function getCodeRds() {
        return $this->codeRds;
    }

    /**
     * Get the code rupture.
     *
     * @return string Returns the code rupture.
     */
    public function getCodeRupture() {
        return $this->codeRupture;
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
     * Get the organisme.
     *
     * @return string Returns the organisme.
     */
    public function getOrganisme() {
        return $this->organisme;
    }

    /**
     * Set the code rds.
     *
     * @param string $codeRds The code rds.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setCodeRds($codeRds) {
        $this->codeRds = $codeRds;
        return $this;
    }

    /**
     * Set the code rupture.
     *
     * @param string $codeRupture The code rupture.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setCodeRupture($codeRupture) {
        $this->codeRupture = $codeRupture;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     * @return RegroupementDs Returns this Regroupement ds.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }
}
