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
 * Famille2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille2Trait {

    /**
     * Famille2.
     *
     * @var string
     */
    private $famille2;

    /**
     * Get the famille2.
     *
     * @return string Returns the famille2.
     */
    public function getFamille2() {
        return $this->famille2;
    }

    /**
     * Set the famille2.
     *
     * @param string $famille2 The famille2.
     */
    public function setFamille2($famille2) {
        $this->famille2 = $famille2;
        return $this;
    }
}
