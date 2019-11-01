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
 * Autoriser acces internet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriserAccesInternetTrait {

    /**
     * Autoriser acces internet.
     *
     * @var bool
     */
    private $autoriserAccesInternet;

    /**
     * Get the autoriser acces internet.
     *
     * @return bool Returns the autoriser acces internet.
     */
    public function getAutoriserAccesInternet() {
        return $this->autoriserAccesInternet;
    }

    /**
     * Set the autoriser acces internet.
     *
     * @param bool $autoriserAccesInternet The autoriser acces internet.
     */
    public function setAutoriserAccesInternet($autoriserAccesInternet) {
        $this->autoriserAccesInternet = $autoriserAccesInternet;
        return $this;
    }
}
