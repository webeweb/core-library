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
 * Collectif soc debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifSocDebutTrait {

    /**
     * Collectif soc debut.
     *
     * @var string
     */
    private $collectifSocDebut;

    /**
     * Get the collectif soc debut.
     *
     * @return string Returns the collectif soc debut.
     */
    public function getCollectifSocDebut() {
        return $this->collectifSocDebut;
    }

    /**
     * Set the collectif soc debut.
     *
     * @param string $collectifSocDebut The collectif soc debut.
     */
    public function setCollectifSocDebut($collectifSocDebut) {
        $this->collectifSocDebut = $collectifSocDebut;
        return $this;
    }
}
