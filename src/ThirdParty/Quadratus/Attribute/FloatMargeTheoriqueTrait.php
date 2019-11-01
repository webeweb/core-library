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
 * Marge theorique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMargeTheoriqueTrait {

    /**
     * Marge theorique.
     *
     * @var float
     */
    private $margeTheorique;

    /**
     * Get the marge theorique.
     *
     * @return float Returns the marge theorique.
     */
    public function getMargeTheorique() {
        return $this->margeTheorique;
    }

    /**
     * Set the marge theorique.
     *
     * @param float $margeTheorique The marge theorique.
     */
    public function setMargeTheorique($margeTheorique) {
        $this->margeTheorique = $margeTheorique;
        return $this;
    }
}
