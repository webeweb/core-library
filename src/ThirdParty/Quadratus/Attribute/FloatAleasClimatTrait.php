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
 * Aleas climat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAleasClimatTrait {

    /**
     * Aleas climat.
     *
     * @var float
     */
    private $aleasClimat;

    /**
     * Get the aleas climat.
     *
     * @return float Returns the aleas climat.
     */
    public function getAleasClimat() {
        return $this->aleasClimat;
    }

    /**
     * Set the aleas climat.
     *
     * @param float $aleasClimat The aleas climat.
     */
    public function setAleasClimat($aleasClimat) {
        $this->aleasClimat = $aleasClimat;
        return $this;
    }
}
