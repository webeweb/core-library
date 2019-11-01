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
 * Collectif client debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifClientDebutTrait {

    /**
     * Collectif client debut.
     *
     * @var string
     */
    private $collectifClientDebut;

    /**
     * Get the collectif client debut.
     *
     * @return string Returns the collectif client debut.
     */
    public function getCollectifClientDebut() {
        return $this->collectifClientDebut;
    }

    /**
     * Set the collectif client debut.
     *
     * @param string $collectifClientDebut The collectif client debut.
     */
    public function setCollectifClientDebut($collectifClientDebut) {
        $this->collectifClientDebut = $collectifClientDebut;
        return $this;
    }
}
