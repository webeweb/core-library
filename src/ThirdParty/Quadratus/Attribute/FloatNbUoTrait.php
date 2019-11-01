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
 * Nb uo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbUoTrait {

    /**
     * Nb uo.
     *
     * @var float
     */
    private $nbUo;

    /**
     * Get the nb uo.
     *
     * @return float Returns the nb uo.
     */
    public function getNbUo() {
        return $this->nbUo;
    }

    /**
     * Set the nb uo.
     *
     * @param float $nbUo The nb uo.
     */
    public function setNbUo($nbUo) {
        $this->nbUo = $nbUo;
        return $this;
    }
}
