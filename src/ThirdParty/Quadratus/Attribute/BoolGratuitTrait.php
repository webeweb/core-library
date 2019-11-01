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
 * Gratuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGratuitTrait {

    /**
     * Gratuit.
     *
     * @var bool
     */
    private $gratuit;

    /**
     * Get the gratuit.
     *
     * @return bool Returns the gratuit.
     */
    public function getGratuit() {
        return $this->gratuit;
    }

    /**
     * Set the gratuit.
     *
     * @param bool $gratuit The gratuit.
     */
    public function setGratuit($gratuit) {
        $this->gratuit = $gratuit;
        return $this;
    }
}
