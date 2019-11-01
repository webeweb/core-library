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
 * Adresse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresse1Trait {

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Get the adresse1.
     *
     * @return string Returns the adresse1.
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }
}
