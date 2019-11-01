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
 * Ville rm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVilleRmTrait {

    /**
     * Ville rm.
     *
     * @var string
     */
    private $villeRm;

    /**
     * Get the ville rm.
     *
     * @return string Returns the ville rm.
     */
    public function getVilleRm() {
        return $this->villeRm;
    }

    /**
     * Set the ville rm.
     *
     * @param string $villeRm The ville rm.
     */
    public function setVilleRm($villeRm) {
        $this->villeRm = $villeRm;
        return $this;
    }
}
