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
 * Lib frais3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibFrais3Trait {

    /**
     * Lib frais3.
     *
     * @var string
     */
    private $libFrais3;

    /**
     * Get the lib frais3.
     *
     * @return string Returns the lib frais3.
     */
    public function getLibFrais3() {
        return $this->libFrais3;
    }

    /**
     * Set the lib frais3.
     *
     * @param string $libFrais3 The lib frais3.
     */
    public function setLibFrais3($libFrais3) {
        $this->libFrais3 = $libFrais3;
        return $this;
    }
}
