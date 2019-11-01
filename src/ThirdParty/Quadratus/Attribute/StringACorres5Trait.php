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
 * A corres5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres5Trait {

    /**
     * A corres5.
     *
     * @var string
     */
    private $aCorres5;

    /**
     * Get the a corres5.
     *
     * @return string Returns the a corres5.
     */
    public function getACorres5() {
        return $this->aCorres5;
    }

    /**
     * Set the a corres5.
     *
     * @param string $aCorres5 The a corres5.
     */
    public function setACorres5($aCorres5) {
        $this->aCorres5 = $aCorres5;
        return $this;
    }
}
