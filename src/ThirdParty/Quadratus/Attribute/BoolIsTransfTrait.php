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
 * Is transf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsTransfTrait {

    /**
     * Is transf.
     *
     * @var bool
     */
    private $isTransf;

    /**
     * Get the is transf.
     *
     * @return bool Returns the is transf.
     */
    public function getIsTransf() {
        return $this->isTransf;
    }

    /**
     * Set the is transf.
     *
     * @param bool $isTransf The is transf.
     */
    public function setIsTransf($isTransf) {
        $this->isTransf = $isTransf;
        return $this;
    }
}
