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
 * A bloquer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringABloquerTrait {

    /**
     * A bloquer.
     *
     * @var string
     */
    private $aBloquer;

    /**
     * Get the a bloquer.
     *
     * @return string Returns the a bloquer.
     */
    public function getABloquer() {
        return $this->aBloquer;
    }

    /**
     * Set the a bloquer.
     *
     * @param string $aBloquer The a bloquer.
     */
    public function setABloquer($aBloquer) {
        $this->aBloquer = $aBloquer;
        return $this;
    }
}
