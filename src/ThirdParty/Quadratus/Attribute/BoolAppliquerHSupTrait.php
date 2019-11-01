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
 * Appliquer h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAppliquerHSupTrait {

    /**
     * Appliquer h sup.
     *
     * @var bool
     */
    private $appliquerHSup;

    /**
     * Get the appliquer h sup.
     *
     * @return bool Returns the appliquer h sup.
     */
    public function getAppliquerHSup() {
        return $this->appliquerHSup;
    }

    /**
     * Set the appliquer h sup.
     *
     * @param bool $appliquerHSup The appliquer h sup.
     */
    public function setAppliquerHSup($appliquerHSup) {
        $this->appliquerHSup = $appliquerHSup;
        return $this;
    }
}
