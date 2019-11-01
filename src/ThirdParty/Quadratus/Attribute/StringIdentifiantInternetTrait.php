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
 * Identifiant internet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdentifiantInternetTrait {

    /**
     * Identifiant internet.
     *
     * @var string
     */
    private $identifiantInternet;

    /**
     * Get the identifiant internet.
     *
     * @return string Returns the identifiant internet.
     */
    public function getIdentifiantInternet() {
        return $this->identifiantInternet;
    }

    /**
     * Set the identifiant internet.
     *
     * @param string $identifiantInternet The identifiant internet.
     */
    public function setIdentifiantInternet($identifiantInternet) {
        $this->identifiantInternet = $identifiantInternet;
        return $this;
    }
}
