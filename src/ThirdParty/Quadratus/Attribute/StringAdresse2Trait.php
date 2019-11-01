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
 * Adresse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresse2Trait {

    /**
     * Adresse2.
     *
     * @var string
     */
    private $adresse2;

    /**
     * Get the adresse2.
     *
     * @return string Returns the adresse2.
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }
}
