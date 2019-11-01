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
 * Ad f complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFComplementTrait {

    /**
     * Ad f complement.
     *
     * @var string
     */
    private $adFComplement;

    /**
     * Get the ad f complement.
     *
     * @return string Returns the ad f complement.
     */
    public function getAdFComplement() {
        return $this->adFComplement;
    }

    /**
     * Set the ad f complement.
     *
     * @param string $adFComplement The ad f complement.
     */
    public function setAdFComplement($adFComplement) {
        $this->adFComplement = $adFComplement;
        return $this;
    }
}
