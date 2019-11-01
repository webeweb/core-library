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
 * Exo h code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExoHCode1Trait {

    /**
     * Exo h code1.
     *
     * @var string
     */
    private $exoHCode1;

    /**
     * Get the exo h code1.
     *
     * @return string Returns the exo h code1.
     */
    public function getExoHCode1() {
        return $this->exoHCode1;
    }

    /**
     * Set the exo h code1.
     *
     * @param string $exoHCode1 The exo h code1.
     */
    public function setExoHCode1($exoHCode1) {
        $this->exoHCode1 = $exoHCode1;
        return $this;
    }
}
