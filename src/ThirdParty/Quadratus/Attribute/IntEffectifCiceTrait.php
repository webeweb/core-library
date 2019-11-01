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
 * Effectif cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEffectifCiceTrait {

    /**
     * Effectif cice.
     *
     * @var int
     */
    private $effectifCice;

    /**
     * Get the effectif cice.
     *
     * @return int Returns the effectif cice.
     */
    public function getEffectifCice() {
        return $this->effectifCice;
    }

    /**
     * Set the effectif cice.
     *
     * @param int $effectifCice The effectif cice.
     */
    public function setEffectifCice($effectifCice) {
        $this->effectifCice = $effectifCice;
        return $this;
    }
}
