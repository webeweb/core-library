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
 * H nuit deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHNuitDebTrait {

    /**
     * H nuit deb.
     *
     * @var string
     */
    private $hNuitDeb;

    /**
     * Get the h nuit deb.
     *
     * @return string Returns the h nuit deb.
     */
    public function getHNuitDeb() {
        return $this->hNuitDeb;
    }

    /**
     * Set the h nuit deb.
     *
     * @param string $hNuitDeb The h nuit deb.
     */
    public function setHNuitDeb($hNuitDeb) {
        $this->hNuitDeb = $hNuitDeb;
        return $this;
    }
}
