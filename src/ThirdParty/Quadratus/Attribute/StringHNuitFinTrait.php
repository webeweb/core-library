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
 * H nuit fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHNuitFinTrait {

    /**
     * H nuit fin.
     *
     * @var string
     */
    private $hNuitFin;

    /**
     * Get the h nuit fin.
     *
     * @return string Returns the h nuit fin.
     */
    public function getHNuitFin() {
        return $this->hNuitFin;
    }

    /**
     * Set the h nuit fin.
     *
     * @param string $hNuitFin The h nuit fin.
     */
    public function setHNuitFin($hNuitFin) {
        $this->hNuitFin = $hNuitFin;
        return $this;
    }
}
