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
 * Rm code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRmCodeTrait {

    /**
     * Rm code.
     *
     * @var string
     */
    private $rmCode;

    /**
     * Get the rm code.
     *
     * @return string Returns the rm code.
     */
    public function getRmCode() {
        return $this->rmCode;
    }

    /**
     * Set the rm code.
     *
     * @param string $rmCode The rm code.
     */
    public function setRmCode($rmCode) {
        $this->rmCode = $rmCode;
        return $this;
    }
}
