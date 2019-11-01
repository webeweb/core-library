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
 * Dom banque3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDomBanque3Trait {

    /**
     * Dom banque3.
     *
     * @var string
     */
    private $domBanque3;

    /**
     * Get the dom banque3.
     *
     * @return string Returns the dom banque3.
     */
    public function getDomBanque3() {
        return $this->domBanque3;
    }

    /**
     * Set the dom banque3.
     *
     * @param string $domBanque3 The dom banque3.
     */
    public function setDomBanque3($domBanque3) {
        $this->domBanque3 = $domBanque3;
        return $this;
    }
}
