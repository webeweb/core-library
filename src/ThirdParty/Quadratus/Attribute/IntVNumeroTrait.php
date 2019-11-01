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
 * V numero trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVNumeroTrait {

    /**
     * V numero.
     *
     * @var int
     */
    private $vNumero;

    /**
     * Get the v numero.
     *
     * @return int Returns the v numero.
     */
    public function getVNumero() {
        return $this->vNumero;
    }

    /**
     * Set the v numero.
     *
     * @param int $vNumero The v numero.
     */
    public function setVNumero($vNumero) {
        $this->vNumero = $vNumero;
        return $this;
    }
}
