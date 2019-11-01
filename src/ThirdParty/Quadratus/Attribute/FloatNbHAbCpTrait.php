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
 * Nb h ab cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbCpTrait {

    /**
     * Nb h ab cp.
     *
     * @var float
     */
    private $nbHAbCp;

    /**
     * Get the nb h ab cp.
     *
     * @return float Returns the nb h ab cp.
     */
    public function getNbHAbCp() {
        return $this->nbHAbCp;
    }

    /**
     * Set the nb h ab cp.
     *
     * @param float $nbHAbCp The nb h ab cp.
     */
    public function setNbHAbCp($nbHAbCp) {
        $this->nbHAbCp = $nbHAbCp;
        return $this;
    }
}
