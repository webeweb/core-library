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
 * Exo h code5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExoHCode5Trait {

    /**
     * Exo h code5.
     *
     * @var string
     */
    private $exoHCode5;

    /**
     * Get the exo h code5.
     *
     * @return string Returns the exo h code5.
     */
    public function getExoHCode5() {
        return $this->exoHCode5;
    }

    /**
     * Set the exo h code5.
     *
     * @param string $exoHCode5 The exo h code5.
     */
    public function setExoHCode5($exoHCode5) {
        $this->exoHCode5 = $exoHCode5;
        return $this;
    }
}
