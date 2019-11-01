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
 * Dot franc centime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDotFrancCentimeTrait {

    /**
     * Dot franc centime.
     *
     * @var string
     */
    private $dotFrancCentime;

    /**
     * Get the dot franc centime.
     *
     * @return string Returns the dot franc centime.
     */
    public function getDotFrancCentime() {
        return $this->dotFrancCentime;
    }

    /**
     * Set the dot franc centime.
     *
     * @param string $dotFrancCentime The dot franc centime.
     */
    public function setDotFrancCentime($dotFrancCentime) {
        $this->dotFrancCentime = $dotFrancCentime;
        return $this;
    }
}
