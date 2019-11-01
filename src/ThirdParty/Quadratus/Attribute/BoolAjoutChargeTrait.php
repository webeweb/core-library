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
 * Ajout charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAjoutChargeTrait {

    /**
     * Ajout charge.
     *
     * @var bool
     */
    private $ajoutCharge;

    /**
     * Get the ajout charge.
     *
     * @return bool Returns the ajout charge.
     */
    public function getAjoutCharge() {
        return $this->ajoutCharge;
    }

    /**
     * Set the ajout charge.
     *
     * @param bool $ajoutCharge The ajout charge.
     */
    public function setAjoutCharge($ajoutCharge) {
        $this->ajoutCharge = $ajoutCharge;
        return $this;
    }
}
