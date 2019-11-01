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
 * Code regime btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeBtpTrait {

    /**
     * Code regime btp.
     *
     * @var string
     */
    private $codeRegimeBtp;

    /**
     * Get the code regime btp.
     *
     * @return string Returns the code regime btp.
     */
    public function getCodeRegimeBtp() {
        return $this->codeRegimeBtp;
    }

    /**
     * Set the code regime btp.
     *
     * @param string $codeRegimeBtp The code regime btp.
     */
    public function setCodeRegimeBtp($codeRegimeBtp) {
        $this->codeRegimeBtp = $codeRegimeBtp;
        return $this;
    }
}
