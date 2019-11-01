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
 * Numero cas part secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroCasPartSecuTrait {

    /**
     * Numero cas part secu.
     *
     * @var int
     */
    private $numeroCasPartSecu;

    /**
     * Get the numero cas part secu.
     *
     * @return int Returns the numero cas part secu.
     */
    public function getNumeroCasPartSecu() {
        return $this->numeroCasPartSecu;
    }

    /**
     * Set the numero cas part secu.
     *
     * @param int $numeroCasPartSecu The numero cas part secu.
     */
    public function setNumeroCasPartSecu($numeroCasPartSecu) {
        $this->numeroCasPartSecu = $numeroCasPartSecu;
        return $this;
    }
}
