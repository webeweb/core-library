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
 * Az ga code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzGaCodeTrait {

    /**
     * Az ga code.
     *
     * @var string
     */
    private $azGaCode;

    /**
     * Get the az ga code.
     *
     * @return string Returns the az ga code.
     */
    public function getAzGaCode() {
        return $this->azGaCode;
    }

    /**
     * Set the az ga code.
     *
     * @param string $azGaCode The az ga code.
     */
    public function setAzGaCode($azGaCode) {
        $this->azGaCode = $azGaCode;
        return $this;
    }
}
