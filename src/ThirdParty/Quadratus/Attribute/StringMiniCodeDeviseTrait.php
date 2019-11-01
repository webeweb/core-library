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
 * Mini code devise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMiniCodeDeviseTrait {

    /**
     * Mini code devise.
     *
     * @var string
     */
    private $miniCodeDevise;

    /**
     * Get the mini code devise.
     *
     * @return string Returns the mini code devise.
     */
    public function getMiniCodeDevise() {
        return $this->miniCodeDevise;
    }

    /**
     * Set the mini code devise.
     *
     * @param string $miniCodeDevise The mini code devise.
     */
    public function setMiniCodeDevise($miniCodeDevise) {
        $this->miniCodeDevise = $miniCodeDevise;
        return $this;
    }
}
