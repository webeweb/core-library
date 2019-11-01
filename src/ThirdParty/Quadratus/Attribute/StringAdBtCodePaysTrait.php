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
 * Ad bt code pays trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtCodePaysTrait {

    /**
     * Ad bt code pays.
     *
     * @var string
     */
    private $adBtCodePays;

    /**
     * Get the ad bt code pays.
     *
     * @return string Returns the ad bt code pays.
     */
    public function getAdBtCodePays() {
        return $this->adBtCodePays;
    }

    /**
     * Set the ad bt code pays.
     *
     * @param string $adBtCodePays The ad bt code pays.
     */
    public function setAdBtCodePays($adBtCodePays) {
        $this->adBtCodePays = $adBtCodePays;
        return $this;
    }
}
