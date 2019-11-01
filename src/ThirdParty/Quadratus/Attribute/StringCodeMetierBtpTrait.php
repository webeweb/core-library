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
 * Code metier btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMetierBtpTrait {

    /**
     * Code metier btp.
     *
     * @var string
     */
    private $codeMetierBtp;

    /**
     * Get the code metier btp.
     *
     * @return string Returns the code metier btp.
     */
    public function getCodeMetierBtp() {
        return $this->codeMetierBtp;
    }

    /**
     * Set the code metier btp.
     *
     * @param string $codeMetierBtp The code metier btp.
     */
    public function setCodeMetierBtp($codeMetierBtp) {
        $this->codeMetierBtp = $codeMetierBtp;
        return $this;
    }
}
