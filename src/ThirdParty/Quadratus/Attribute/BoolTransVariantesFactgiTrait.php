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
 * Trans variantes factgi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransVariantesFactgiTrait {

    /**
     * Trans variantes factgi.
     *
     * @var bool
     */
    private $transVariantesFactgi;

    /**
     * Get the trans variantes factgi.
     *
     * @return bool Returns the trans variantes factgi.
     */
    public function getTransVariantesFactgi() {
        return $this->transVariantesFactgi;
    }

    /**
     * Set the trans variantes factgi.
     *
     * @param bool $transVariantesFactgi The trans variantes factgi.
     */
    public function setTransVariantesFactgi($transVariantesFactgi) {
        $this->transVariantesFactgi = $transVariantesFactgi;
        return $this;
    }
}
