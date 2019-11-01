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
 * Famille8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille8Trait {

    /**
     * Famille8.
     *
     * @var string
     */
    private $famille8;

    /**
     * Get the famille8.
     *
     * @return string Returns the famille8.
     */
    public function getFamille8() {
        return $this->famille8;
    }

    /**
     * Set the famille8.
     *
     * @param string $famille8 The famille8.
     */
    public function setFamille8($famille8) {
        $this->famille8 = $famille8;
        return $this;
    }
}
