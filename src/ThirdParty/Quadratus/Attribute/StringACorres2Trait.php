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
 * A corres2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres2Trait {

    /**
     * A corres2.
     *
     * @var string
     */
    private $aCorres2;

    /**
     * Get the a corres2.
     *
     * @return string Returns the a corres2.
     */
    public function getACorres2() {
        return $this->aCorres2;
    }

    /**
     * Set the a corres2.
     *
     * @param string $aCorres2 The a corres2.
     */
    public function setACorres2($aCorres2) {
        $this->aCorres2 = $aCorres2;
        return $this;
    }
}
