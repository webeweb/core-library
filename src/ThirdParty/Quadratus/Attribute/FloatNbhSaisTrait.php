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
 * Nbh sais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhSaisTrait {

    /**
     * Nbh sais.
     *
     * @var float
     */
    private $nbhSais;

    /**
     * Get the nbh sais.
     *
     * @return float Returns the nbh sais.
     */
    public function getNbhSais() {
        return $this->nbhSais;
    }

    /**
     * Set the nbh sais.
     *
     * @param float $nbhSais The nbh sais.
     */
    public function setNbhSais($nbhSais) {
        $this->nbhSais = $nbhSais;
        return $this;
    }
}
