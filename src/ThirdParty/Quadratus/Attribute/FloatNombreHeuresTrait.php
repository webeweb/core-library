<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Nombre heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNombreHeuresTrait {

    /**
     * Nombre heures.
     *
     * @var float
     */
    private $nombreHeures;

    /**
     * Get the nombre heures.
     *
     * @return float Returns the nombre heures.
     */
    public function getNombreHeures() {
        return $this->nombreHeures;
    }

    /**
     * Set the nombre heures.
     *
     * @param float $nombreHeures The nombre heures.
     */
    public function setNombreHeures($nombreHeures) {
        $this->nombreHeures = $nombreHeures;
        return $this;
    }
}
