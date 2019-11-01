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
 * Az eu code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEuCodeTrait {

    /**
     * Az eu code.
     *
     * @var string
     */
    private $azEuCode;

    /**
     * Get the az eu code.
     *
     * @return string Returns the az eu code.
     */
    public function getAzEuCode() {
        return $this->azEuCode;
    }

    /**
     * Set the az eu code.
     *
     * @param string $azEuCode The az eu code.
     */
    public function setAzEuCode($azEuCode) {
        $this->azEuCode = $azEuCode;
        return $this;
    }
}
