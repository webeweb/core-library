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
 * Collectif soc fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifSocFinTrait {

    /**
     * Collectif soc fin.
     *
     * @var string
     */
    private $collectifSocFin;

    /**
     * Get the collectif soc fin.
     *
     * @return string Returns the collectif soc fin.
     */
    public function getCollectifSocFin() {
        return $this->collectifSocFin;
    }

    /**
     * Set the collectif soc fin.
     *
     * @param string $collectifSocFin The collectif soc fin.
     */
    public function setCollectifSocFin($collectifSocFin) {
        $this->collectifSocFin = $collectifSocFin;
        return $this;
    }
}
