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
 * Ad f nom client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFNomClientTrait {

    /**
     * Ad f nom client.
     *
     * @var string
     */
    private $adFNomClient;

    /**
     * Get the ad f nom client.
     *
     * @return string Returns the ad f nom client.
     */
    public function getAdFNomClient() {
        return $this->adFNomClient;
    }

    /**
     * Set the ad f nom client.
     *
     * @param string $adFNomClient The ad f nom client.
     */
    public function setAdFNomClient($adFNomClient) {
        $this->adFNomClient = $adFNomClient;
        return $this;
    }
}
