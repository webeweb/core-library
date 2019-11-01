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
 * Result mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolResultMtTrait {

    /**
     * Result mt.
     *
     * @var bool
     */
    private $resultMt;

    /**
     * Get the result mt.
     *
     * @return bool Returns the result mt.
     */
    public function getResultMt() {
        return $this->resultMt;
    }

    /**
     * Set the result mt.
     *
     * @param bool $resultMt The result mt.
     */
    public function setResultMt($resultMt) {
        $this->resultMt = $resultMt;
        return $this;
    }
}
