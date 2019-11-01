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
 * Pas active trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasActiveTrait {

    /**
     * Pas active.
     *
     * @var bool
     */
    private $pasActive;

    /**
     * Get the pas active.
     *
     * @return bool Returns the pas active.
     */
    public function getPasActive() {
        return $this->pasActive;
    }

    /**
     * Set the pas active.
     *
     * @param bool $pasActive The pas active.
     */
    public function setPasActive($pasActive) {
        $this->pasActive = $pasActive;
        return $this;
    }
}
