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
 * Rff cpt interets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRffCptInteretsTrait {

    /**
     * Rff cpt interets.
     *
     * @var string
     */
    private $rffCptInterets;

    /**
     * Get the rff cpt interets.
     *
     * @return string Returns the rff cpt interets.
     */
    public function getRffCptInterets() {
        return $this->rffCptInterets;
    }

    /**
     * Set the rff cpt interets.
     *
     * @param string $rffCptInterets The rff cpt interets.
     */
    public function setRffCptInterets($rffCptInterets) {
        $this->rffCptInterets = $rffCptInterets;
        return $this;
    }
}
