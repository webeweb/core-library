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
 * Immatriculation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImmatriculationTrait {

    /**
     * Immatriculation.
     *
     * @var string
     */
    private $immatriculation;

    /**
     * Get the immatriculation.
     *
     * @return string Returns the immatriculation.
     */
    public function getImmatriculation() {
        return $this->immatriculation;
    }

    /**
     * Set the immatriculation.
     *
     * @param string $immatriculation The immatriculation.
     */
    public function setImmatriculation($immatriculation) {
        $this->immatriculation = $immatriculation;
        return $this;
    }
}
