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
 * Ape trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringApeTrait {

    /**
     * Ape.
     *
     * @var string
     */
    private $ape;

    /**
     * Get the ape.
     *
     * @return string Returns the ape.
     */
    public function getApe() {
        return $this->ape;
    }

    /**
     * Set the ape.
     *
     * @param string $ape The ape.
     */
    public function setApe($ape) {
        $this->ape = $ape;
        return $this;
    }
}
