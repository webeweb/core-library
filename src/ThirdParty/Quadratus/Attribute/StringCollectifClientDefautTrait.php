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
 * Collectif client defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifClientDefautTrait {

    /**
     * Collectif client defaut.
     *
     * @var string
     */
    private $collectifClientDefaut;

    /**
     * Get the collectif client defaut.
     *
     * @return string Returns the collectif client defaut.
     */
    public function getCollectifClientDefaut() {
        return $this->collectifClientDefaut;
    }

    /**
     * Set the collectif client defaut.
     *
     * @param string $collectifClientDefaut The collectif client defaut.
     */
    public function setCollectifClientDefaut($collectifClientDefaut) {
        $this->collectifClientDefaut = $collectifClientDefaut;
        return $this;
    }
}
