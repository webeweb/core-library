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
 * Famille4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille4Trait {

    /**
     * Famille4.
     *
     * @var string
     */
    private $famille4;

    /**
     * Get the famille4.
     *
     * @return string Returns the famille4.
     */
    public function getFamille4() {
        return $this->famille4;
    }

    /**
     * Set the famille4.
     *
     * @param string $famille4 The famille4.
     */
    public function setFamille4($famille4) {
        $this->famille4 = $famille4;
        return $this;
    }
}
