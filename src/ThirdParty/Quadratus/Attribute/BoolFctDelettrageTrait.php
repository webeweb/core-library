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
 * Fct delettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctDelettrageTrait {

    /**
     * Fct delettrage.
     *
     * @var bool
     */
    private $fctDelettrage;

    /**
     * Get the fct delettrage.
     *
     * @return bool Returns the fct delettrage.
     */
    public function getFctDelettrage() {
        return $this->fctDelettrage;
    }

    /**
     * Set the fct delettrage.
     *
     * @param bool $fctDelettrage The fct delettrage.
     */
    public function setFctDelettrage($fctDelettrage) {
        $this->fctDelettrage = $fctDelettrage;
        return $this;
    }
}
