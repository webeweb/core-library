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
 * Az ez code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEzCodeTrait {

    /**
     * Az ez code.
     *
     * @var string
     */
    private $azEzCode;

    /**
     * Get the az ez code.
     *
     * @return string Returns the az ez code.
     */
    public function getAzEzCode() {
        return $this->azEzCode;
    }

    /**
     * Set the az ez code.
     *
     * @param string $azEzCode The az ez code.
     */
    public function setAzEzCode($azEzCode) {
        $this->azEzCode = $azEzCode;
        return $this;
    }
}
