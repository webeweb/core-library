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
 * Numero cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroCbTrait {

    /**
     * Numero cb.
     *
     * @var int
     */
    private $numeroCb;

    /**
     * Get the numero cb.
     *
     * @return int Returns the numero cb.
     */
    public function getNumeroCb() {
        return $this->numeroCb;
    }

    /**
     * Set the numero cb.
     *
     * @param int $numeroCb The numero cb.
     */
    public function setNumeroCb($numeroCb) {
        $this->numeroCb = $numeroCb;
        return $this;
    }
}
