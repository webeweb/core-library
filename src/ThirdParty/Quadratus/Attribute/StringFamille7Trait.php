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
 * Famille7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille7Trait {

    /**
     * Famille7.
     *
     * @var string
     */
    private $famille7;

    /**
     * Get the famille7.
     *
     * @return string Returns the famille7.
     */
    public function getFamille7() {
        return $this->famille7;
    }

    /**
     * Set the famille7.
     *
     * @param string $famille7 The famille7.
     */
    public function setFamille7($famille7) {
        $this->famille7 = $famille7;
        return $this;
    }
}
