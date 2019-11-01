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
 * Collectif frn defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifFrnDefautTrait {

    /**
     * Collectif frn defaut.
     *
     * @var string
     */
    private $collectifFrnDefaut;

    /**
     * Get the collectif frn defaut.
     *
     * @return string Returns the collectif frn defaut.
     */
    public function getCollectifFrnDefaut() {
        return $this->collectifFrnDefaut;
    }

    /**
     * Set the collectif frn defaut.
     *
     * @param string $collectifFrnDefaut The collectif frn defaut.
     */
    public function setCollectifFrnDefaut($collectifFrnDefaut) {
        $this->collectifFrnDefaut = $collectifFrnDefaut;
        return $this;
    }
}
