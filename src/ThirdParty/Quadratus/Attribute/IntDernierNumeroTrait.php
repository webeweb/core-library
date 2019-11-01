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
 * Dernier numero trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDernierNumeroTrait {

    /**
     * Dernier numero.
     *
     * @var int
     */
    private $dernierNumero;

    /**
     * Get the dernier numero.
     *
     * @return int Returns the dernier numero.
     */
    public function getDernierNumero() {
        return $this->dernierNumero;
    }

    /**
     * Set the dernier numero.
     *
     * @param int $dernierNumero The dernier numero.
     */
    public function setDernierNumero($dernierNumero) {
        $this->dernierNumero = $dernierNumero;
        return $this;
    }
}
