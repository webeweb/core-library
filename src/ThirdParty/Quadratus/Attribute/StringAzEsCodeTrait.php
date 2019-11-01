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
 * Az es code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEsCodeTrait {

    /**
     * Az es code.
     *
     * @var string
     */
    private $azEsCode;

    /**
     * Get the az es code.
     *
     * @return string Returns the az es code.
     */
    public function getAzEsCode() {
        return $this->azEsCode;
    }

    /**
     * Set the az es code.
     *
     * @param string $azEsCode The az es code.
     */
    public function setAzEsCode($azEsCode) {
        $this->azEsCode = $azEsCode;
        return $this;
    }
}
