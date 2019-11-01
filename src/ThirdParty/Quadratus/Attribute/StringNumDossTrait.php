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
 * Num doss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossTrait {

    /**
     * Num doss.
     *
     * @var string
     */
    private $numDoss;

    /**
     * Get the num doss.
     *
     * @return string Returns the num doss.
     */
    public function getNumDoss() {
        return $this->numDoss;
    }

    /**
     * Set the num doss.
     *
     * @param string $numDoss The num doss.
     */
    public function setNumDoss($numDoss) {
        $this->numDoss = $numDoss;
        return $this;
    }
}
