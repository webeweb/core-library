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
 * Adresse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresse3Trait {

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }
}
