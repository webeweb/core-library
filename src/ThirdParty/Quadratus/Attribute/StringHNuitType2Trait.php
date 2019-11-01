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
 * H nuit type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHNuitType2Trait {

    /**
     * H nuit type2.
     *
     * @var string
     */
    private $hNuitType2;

    /**
     * Get the h nuit type2.
     *
     * @return string Returns the h nuit type2.
     */
    public function getHNuitType2() {
        return $this->hNuitType2;
    }

    /**
     * Set the h nuit type2.
     *
     * @param string $hNuitType2 The h nuit type2.
     */
    public function setHNuitType2($hNuitType2) {
        $this->hNuitType2 = $hNuitType2;
        return $this;
    }
}
