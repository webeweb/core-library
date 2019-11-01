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
 * Base sans reintegration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseSansReintegrationTrait {

    /**
     * Base sans reintegration.
     *
     * @var float
     */
    private $baseSansReintegration;

    /**
     * Get the base sans reintegration.
     *
     * @return float Returns the base sans reintegration.
     */
    public function getBaseSansReintegration() {
        return $this->baseSansReintegration;
    }

    /**
     * Set the base sans reintegration.
     *
     * @param float $baseSansReintegration The base sans reintegration.
     */
    public function setBaseSansReintegration($baseSansReintegration) {
        $this->baseSansReintegration = $baseSansReintegration;
        return $this;
    }
}
