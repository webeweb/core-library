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
 * Lib frais2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibFrais2Trait {

    /**
     * Lib frais2.
     *
     * @var string
     */
    private $libFrais2;

    /**
     * Get the lib frais2.
     *
     * @return string Returns the lib frais2.
     */
    public function getLibFrais2() {
        return $this->libFrais2;
    }

    /**
     * Set the lib frais2.
     *
     * @param string $libFrais2 The lib frais2.
     */
    public function setLibFrais2($libFrais2) {
        $this->libFrais2 = $libFrais2;
        return $this;
    }
}
