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
 * Alerte rouge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAlerteRougeTrait {

    /**
     * Alerte rouge.
     *
     * @var bool
     */
    private $alerteRouge;

    /**
     * Get the alerte rouge.
     *
     * @return bool Returns the alerte rouge.
     */
    public function getAlerteRouge() {
        return $this->alerteRouge;
    }

    /**
     * Set the alerte rouge.
     *
     * @param bool $alerteRouge The alerte rouge.
     */
    public function setAlerteRouge($alerteRouge) {
        $this->alerteRouge = $alerteRouge;
        return $this;
    }
}
