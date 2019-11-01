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
 * Famille6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamille6Trait {

    /**
     * Famille6.
     *
     * @var string
     */
    private $famille6;

    /**
     * Get the famille6.
     *
     * @return string Returns the famille6.
     */
    public function getFamille6() {
        return $this->famille6;
    }

    /**
     * Set the famille6.
     *
     * @param string $famille6 The famille6.
     */
    public function setFamille6($famille6) {
        $this->famille6 = $famille6;
        return $this;
    }
}
