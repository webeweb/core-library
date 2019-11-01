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
 * Code class btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClassBtpTrait {

    /**
     * Code class btp.
     *
     * @var string
     */
    private $codeClassBtp;

    /**
     * Get the code class btp.
     *
     * @return string Returns the code class btp.
     */
    public function getCodeClassBtp() {
        return $this->codeClassBtp;
    }

    /**
     * Set the code class btp.
     *
     * @param string $codeClassBtp The code class btp.
     */
    public function setCodeClassBtp($codeClassBtp) {
        $this->codeClassBtp = $codeClassBtp;
        return $this;
    }
}
