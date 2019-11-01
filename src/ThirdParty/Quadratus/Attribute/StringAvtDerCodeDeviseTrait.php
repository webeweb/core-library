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
 * Avt der code devise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAvtDerCodeDeviseTrait {

    /**
     * Avt der code devise.
     *
     * @var string
     */
    private $avtDerCodeDevise;

    /**
     * Get the avt der code devise.
     *
     * @return string Returns the avt der code devise.
     */
    public function getAvtDerCodeDevise() {
        return $this->avtDerCodeDevise;
    }

    /**
     * Set the avt der code devise.
     *
     * @param string $avtDerCodeDevise The avt der code devise.
     */
    public function setAvtDerCodeDevise($avtDerCodeDevise) {
        $this->avtDerCodeDevise = $avtDerCodeDevise;
        return $this;
    }
}
