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
 * Mdp internet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMdpInternetTrait {

    /**
     * Mdp internet.
     *
     * @var string
     */
    private $mdpInternet;

    /**
     * Get the mdp internet.
     *
     * @return string Returns the mdp internet.
     */
    public function getMdpInternet() {
        return $this->mdpInternet;
    }

    /**
     * Set the mdp internet.
     *
     * @param string $mdpInternet The mdp internet.
     */
    public function setMdpInternet($mdpInternet) {
        $this->mdpInternet = $mdpInternet;
        return $this;
    }
}
