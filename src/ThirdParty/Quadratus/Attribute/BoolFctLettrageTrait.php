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
 * Fct lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctLettrageTrait {

    /**
     * Fct lettrage.
     *
     * @var bool
     */
    private $fctLettrage;

    /**
     * Get the fct lettrage.
     *
     * @return bool Returns the fct lettrage.
     */
    public function getFctLettrage() {
        return $this->fctLettrage;
    }

    /**
     * Set the fct lettrage.
     *
     * @param bool $fctLettrage The fct lettrage.
     */
    public function setFctLettrage($fctLettrage) {
        $this->fctLettrage = $fctLettrage;
        return $this;
    }
}
