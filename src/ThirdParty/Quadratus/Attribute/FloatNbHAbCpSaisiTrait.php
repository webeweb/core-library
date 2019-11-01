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
 * Nb h ab cp saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbCpSaisiTrait {

    /**
     * Nb h ab cp saisi.
     *
     * @var float
     */
    private $nbHAbCpSaisi;

    /**
     * Get the nb h ab cp saisi.
     *
     * @return float Returns the nb h ab cp saisi.
     */
    public function getNbHAbCpSaisi() {
        return $this->nbHAbCpSaisi;
    }

    /**
     * Set the nb h ab cp saisi.
     *
     * @param float $nbHAbCpSaisi The nb h ab cp saisi.
     */
    public function setNbHAbCpSaisi($nbHAbCpSaisi) {
        $this->nbHAbCpSaisi = $nbHAbCpSaisi;
        return $this;
    }
}
