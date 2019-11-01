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
 * A corres8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringACorres8Trait {

    /**
     * A corres8.
     *
     * @var string
     */
    private $aCorres8;

    /**
     * Get the a corres8.
     *
     * @return string Returns the a corres8.
     */
    public function getACorres8() {
        return $this->aCorres8;
    }

    /**
     * Set the a corres8.
     *
     * @param string $aCorres8 The a corres8.
     */
    public function setACorres8($aCorres8) {
        $this->aCorres8 = $aCorres8;
        return $this;
    }
}
