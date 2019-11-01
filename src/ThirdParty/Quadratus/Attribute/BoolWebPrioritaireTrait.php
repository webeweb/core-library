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
 * Web prioritaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolWebPrioritaireTrait {

    /**
     * Web prioritaire.
     *
     * @var bool
     */
    private $webPrioritaire;

    /**
     * Get the web prioritaire.
     *
     * @return bool Returns the web prioritaire.
     */
    public function getWebPrioritaire() {
        return $this->webPrioritaire;
    }

    /**
     * Set the web prioritaire.
     *
     * @param bool $webPrioritaire The web prioritaire.
     */
    public function setWebPrioritaire($webPrioritaire) {
        $this->webPrioritaire = $webPrioritaire;
        return $this;
    }
}
