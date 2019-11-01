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
 * H bonif influ cassation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHBonifInfluCassationTrait {

    /**
     * H bonif influ cassation.
     *
     * @var string
     */
    private $hBonifInfluCassation;

    /**
     * Get the h bonif influ cassation.
     *
     * @return string Returns the h bonif influ cassation.
     */
    public function getHBonifInfluCassation() {
        return $this->hBonifInfluCassation;
    }

    /**
     * Set the h bonif influ cassation.
     *
     * @param string $hBonifInfluCassation The h bonif influ cassation.
     */
    public function setHBonifInfluCassation($hBonifInfluCassation) {
        $this->hBonifInfluCassation = $hBonifInfluCassation;
        return $this;
    }
}
