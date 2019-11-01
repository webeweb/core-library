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
 * A corres4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres4Trait {

    /**
     * A corres4.
     *
     * @var string
     */
    private $aCorres4;

    /**
     * Get the a corres4.
     *
     * @return string Returns the a corres4.
     */
    public function getACorres4() {
        return $this->aCorres4;
    }

    /**
     * Set the a corres4.
     *
     * @param string $aCorres4 The a corres4.
     */
    public function setACorres4($aCorres4) {
        $this->aCorres4 = $aCorres4;
        return $this;
    }
}
