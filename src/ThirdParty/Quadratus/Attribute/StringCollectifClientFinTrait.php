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
 * Collectif client fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifClientFinTrait {

    /**
     * Collectif client fin.
     *
     * @var string
     */
    private $collectifClientFin;

    /**
     * Get the collectif client fin.
     *
     * @return string Returns the collectif client fin.
     */
    public function getCollectifClientFin() {
        return $this->collectifClientFin;
    }

    /**
     * Set the collectif client fin.
     *
     * @param string $collectifClientFin The collectif client fin.
     */
    public function setCollectifClientFin($collectifClientFin) {
        $this->collectifClientFin = $collectifClientFin;
        return $this;
    }
}
