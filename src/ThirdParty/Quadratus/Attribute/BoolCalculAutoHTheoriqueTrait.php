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
 * Calcul auto h theorique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculAutoHTheoriqueTrait {

    /**
     * Calcul auto h theorique.
     *
     * @var bool
     */
    private $calculAutoHTheorique;

    /**
     * Get the calcul auto h theorique.
     *
     * @return bool Returns the calcul auto h theorique.
     */
    public function getCalculAutoHTheorique() {
        return $this->calculAutoHTheorique;
    }

    /**
     * Set the calcul auto h theorique.
     *
     * @param bool $calculAutoHTheorique The calcul auto h theorique.
     */
    public function setCalculAutoHTheorique($calculAutoHTheorique) {
        $this->calculAutoHTheorique = $calculAutoHTheorique;
        return $this;
    }
}
