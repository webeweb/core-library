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
 * Ad bt complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtComplementTrait {

    /**
     * Ad bt complement.
     *
     * @var string
     */
    private $adBtComplement;

    /**
     * Get the ad bt complement.
     *
     * @return string Returns the ad bt complement.
     */
    public function getAdBtComplement() {
        return $this->adBtComplement;
    }

    /**
     * Set the ad bt complement.
     *
     * @param string $adBtComplement The ad bt complement.
     */
    public function setAdBtComplement($adBtComplement) {
        $this->adBtComplement = $adBtComplement;
        return $this;
    }
}
