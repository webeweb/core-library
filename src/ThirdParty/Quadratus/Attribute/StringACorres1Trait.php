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
 * A corres1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres1Trait {

    /**
     * A corres1.
     *
     * @var string
     */
    private $aCorres1;

    /**
     * Get the a corres1.
     *
     * @return string Returns the a corres1.
     */
    public function getACorres1() {
        return $this->aCorres1;
    }

    /**
     * Set the a corres1.
     *
     * @param string $aCorres1 The a corres1.
     */
    public function setACorres1($aCorres1) {
        $this->aCorres1 = $aCorres1;
        return $this;
    }
}
