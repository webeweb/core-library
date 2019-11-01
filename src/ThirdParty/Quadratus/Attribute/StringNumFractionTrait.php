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
 * Num fraction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumFractionTrait {

    /**
     * Num fraction.
     *
     * @var string
     */
    private $numFraction;

    /**
     * Get the num fraction.
     *
     * @return string Returns the num fraction.
     */
    public function getNumFraction() {
        return $this->numFraction;
    }

    /**
     * Set the num fraction.
     *
     * @param string $numFraction The num fraction.
     */
    public function setNumFraction($numFraction) {
        $this->numFraction = $numFraction;
        return $this;
    }
}
