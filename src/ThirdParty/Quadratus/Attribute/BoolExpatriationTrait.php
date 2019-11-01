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
 * Expatriation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExpatriationTrait {

    /**
     * Expatriation.
     *
     * @var bool
     */
    private $expatriation;

    /**
     * Get the expatriation.
     *
     * @return bool Returns the expatriation.
     */
    public function getExpatriation() {
        return $this->expatriation;
    }

    /**
     * Set the expatriation.
     *
     * @param bool $expatriation The expatriation.
     */
    public function setExpatriation($expatriation) {
        $this->expatriation = $expatriation;
        return $this;
    }
}
