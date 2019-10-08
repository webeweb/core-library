<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Treso parametrage model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class TresoParametrage {

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Regle.
     *
     * @var string
     */
    private $regle;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the regle.
     *
     * @return string Returns the regle.
     */
    public function getRegle() {
        return $this->regle;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TresoParametrage Returns this treso parametrage.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string $regle The regle.
     * @return TresoParametrage Returns this treso parametrage.
     */
    public function setRegle($regle) {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return TresoParametrage Returns this treso parametrage.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
