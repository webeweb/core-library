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
 * Contremarque interdite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolContremarqueInterditeTrait {

    /**
     * Contremarque interdite.
     *
     * @var bool
     */
    private $contremarqueInterdite;

    /**
     * Get the contremarque interdite.
     *
     * @return bool Returns the contremarque interdite.
     */
    public function getContremarqueInterdite() {
        return $this->contremarqueInterdite;
    }

    /**
     * Set the contremarque interdite.
     *
     * @param bool $contremarqueInterdite The contremarque interdite.
     */
    public function setContremarqueInterdite($contremarqueInterdite) {
        $this->contremarqueInterdite = $contremarqueInterdite;
        return $this;
    }
}
