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
 * Collectif frn fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifFrnFinTrait {

    /**
     * Collectif frn fin.
     *
     * @var string
     */
    private $collectifFrnFin;

    /**
     * Get the collectif frn fin.
     *
     * @return string Returns the collectif frn fin.
     */
    public function getCollectifFrnFin() {
        return $this->collectifFrnFin;
    }

    /**
     * Set the collectif frn fin.
     *
     * @param string $collectifFrnFin The collectif frn fin.
     */
    public function setCollectifFrnFin($collectifFrnFin) {
        $this->collectifFrnFin = $collectifFrnFin;
        return $this;
    }
}
