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
 * Az gc code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzGcCodeTrait {

    /**
     * Az gc code.
     *
     * @var string
     */
    private $azGcCode;

    /**
     * Get the az gc code.
     *
     * @return string Returns the az gc code.
     */
    public function getAzGcCode() {
        return $this->azGcCode;
    }

    /**
     * Set the az gc code.
     *
     * @param string $azGcCode The az gc code.
     */
    public function setAzGcCode($azGcCode) {
        $this->azGcCode = $azGcCode;
        return $this;
    }
}
