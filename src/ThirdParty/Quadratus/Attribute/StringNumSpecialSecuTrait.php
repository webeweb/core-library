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
 * Num special secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumSpecialSecuTrait {

    /**
     * Num special secu.
     *
     * @var string
     */
    private $numSpecialSecu;

    /**
     * Get the num special secu.
     *
     * @return string Returns the num special secu.
     */
    public function getNumSpecialSecu() {
        return $this->numSpecialSecu;
    }

    /**
     * Set the num special secu.
     *
     * @param string $numSpecialSecu The num special secu.
     */
    public function setNumSpecialSecu($numSpecialSecu) {
        $this->numSpecialSecu = $numSpecialSecu;
        return $this;
    }
}
