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
 * A corres6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres6Trait {

    /**
     * A corres6.
     *
     * @var string
     */
    private $aCorres6;

    /**
     * Get the a corres6.
     *
     * @return string Returns the a corres6.
     */
    public function getACorres6() {
        return $this->aCorres6;
    }

    /**
     * Set the a corres6.
     *
     * @param string $aCorres6 The a corres6.
     */
    public function setACorres6($aCorres6) {
        $this->aCorres6 = $aCorres6;
        return $this;
    }
}
