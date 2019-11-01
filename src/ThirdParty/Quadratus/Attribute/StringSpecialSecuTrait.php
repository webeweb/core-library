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
 * Special secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSpecialSecuTrait {

    /**
     * Special secu.
     *
     * @var string
     */
    private $specialSecu;

    /**
     * Get the special secu.
     *
     * @return string Returns the special secu.
     */
    public function getSpecialSecu() {
        return $this->specialSecu;
    }

    /**
     * Set the special secu.
     *
     * @param string $specialSecu The special secu.
     */
    public function setSpecialSecu($specialSecu) {
        $this->specialSecu = $specialSecu;
        return $this;
    }
}
