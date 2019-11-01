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
 * Ville rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVilleRcTrait {

    /**
     * Ville rc.
     *
     * @var string
     */
    private $villeRc;

    /**
     * Get the ville rc.
     *
     * @return string Returns the ville rc.
     */
    public function getVilleRc() {
        return $this->villeRc;
    }

    /**
     * Set the ville rc.
     *
     * @param string $villeRc The ville rc.
     */
    public function setVilleRc($villeRc) {
        $this->villeRc = $villeRc;
        return $this;
    }
}
