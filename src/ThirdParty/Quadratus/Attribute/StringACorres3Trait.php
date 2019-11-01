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
 * A corres3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres3Trait {

    /**
     * A corres3.
     *
     * @var string
     */
    private $aCorres3;

    /**
     * Get the a corres3.
     *
     * @return string Returns the a corres3.
     */
    public function getACorres3() {
        return $this->aCorres3;
    }

    /**
     * Set the a corres3.
     *
     * @param string $aCorres3 The a corres3.
     */
    public function setACorres3($aCorres3) {
        $this->aCorres3 = $aCorres3;
        return $this;
    }
}
