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
 * Effectif das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEffectifDasTrait {

    /**
     * Effectif das.
     *
     * @var bool
     */
    private $effectifDas;

    /**
     * Get the effectif das.
     *
     * @return bool Returns the effectif das.
     */
    public function getEffectifDas() {
        return $this->effectifDas;
    }

    /**
     * Set the effectif das.
     *
     * @param bool $effectifDas The effectif das.
     */
    public function setEffectifDas($effectifDas) {
        $this->effectifDas = $effectifDas;
        return $this;
    }
}
