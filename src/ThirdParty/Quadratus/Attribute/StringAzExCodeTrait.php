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
 * Az ex code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzExCodeTrait {

    /**
     * Az ex code.
     *
     * @var string
     */
    private $azExCode;

    /**
     * Get the az ex code.
     *
     * @return string Returns the az ex code.
     */
    public function getAzExCode() {
        return $this->azExCode;
    }

    /**
     * Set the az ex code.
     *
     * @param string $azExCode The az ex code.
     */
    public function setAzExCode($azExCode) {
        $this->azExCode = $azExCode;
        return $this;
    }
}
