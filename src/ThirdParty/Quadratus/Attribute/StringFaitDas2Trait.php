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
 * Fait das2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitDas2Trait {

    /**
     * Fait das2.
     *
     * @var string
     */
    private $faitDas2;

    /**
     * Get the fait das2.
     *
     * @return string Returns the fait das2.
     */
    public function getFaitDas2() {
        return $this->faitDas2;
    }

    /**
     * Set the fait das2.
     *
     * @param string $faitDas2 The fait das2.
     */
    public function setFaitDas2($faitDas2) {
        $this->faitDas2 = $faitDas2;
        return $this;
    }
}
