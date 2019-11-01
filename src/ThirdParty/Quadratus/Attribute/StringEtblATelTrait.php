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
 * Etbl a tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblATelTrait {

    /**
     * Etbl a tel.
     *
     * @var string
     */
    private $etblATel;

    /**
     * Get the etbl a tel.
     *
     * @return string Returns the etbl a tel.
     */
    public function getEtblATel() {
        return $this->etblATel;
    }

    /**
     * Set the etbl a tel.
     *
     * @param string $etblATel The etbl a tel.
     */
    public function setEtblATel($etblATel) {
        $this->etblATel = $etblATel;
        return $this;
    }
}
