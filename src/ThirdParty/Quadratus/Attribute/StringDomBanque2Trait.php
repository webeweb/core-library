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
 * Dom banque2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDomBanque2Trait {

    /**
     * Dom banque2.
     *
     * @var string
     */
    private $domBanque2;

    /**
     * Get the dom banque2.
     *
     * @return string Returns the dom banque2.
     */
    public function getDomBanque2() {
        return $this->domBanque2;
    }

    /**
     * Set the dom banque2.
     *
     * @param string $domBanque2 The dom banque2.
     */
    public function setDomBanque2($domBanque2) {
        $this->domBanque2 = $domBanque2;
        return $this;
    }
}
