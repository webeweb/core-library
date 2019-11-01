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
 * En litige trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnLitigeTrait {

    /**
     * En litige.
     *
     * @var bool
     */
    private $enLitige;

    /**
     * Get the en litige.
     *
     * @return bool Returns the en litige.
     */
    public function getEnLitige() {
        return $this->enLitige;
    }

    /**
     * Set the en litige.
     *
     * @param bool $enLitige The en litige.
     */
    public function setEnLitige($enLitige) {
        $this->enLitige = $enLitige;
        return $this;
    }
}
