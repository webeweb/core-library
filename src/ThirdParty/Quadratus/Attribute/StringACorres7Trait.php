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
 * A corres7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres7Trait {

    /**
     * A corres7.
     *
     * @var string
     */
    private $aCorres7;

    /**
     * Get the a corres7.
     *
     * @return string Returns the a corres7.
     */
    public function getACorres7() {
        return $this->aCorres7;
    }

    /**
     * Set the a corres7.
     *
     * @param string $aCorres7 The a corres7.
     */
    public function setACorres7($aCorres7) {
        $this->aCorres7 = $aCorres7;
        return $this;
    }
}
