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
 * Lib frais1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibFrais1Trait {

    /**
     * Lib frais1.
     *
     * @var string
     */
    private $libFrais1;

    /**
     * Get the lib frais1.
     *
     * @return string Returns the lib frais1.
     */
    public function getLibFrais1() {
        return $this->libFrais1;
    }

    /**
     * Set the lib frais1.
     *
     * @param string $libFrais1 The lib frais1.
     */
    public function setLibFrais1($libFrais1) {
        $this->libFrais1 = $libFrais1;
        return $this;
    }
}
