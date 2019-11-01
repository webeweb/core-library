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
 * Acces autorise plan facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesAutorisePlanFacturationTrait {

    /**
     * Acces autorise plan facturation.
     *
     * @var bool
     */
    private $accesAutorisePlanFacturation;

    /**
     * Get the acces autorise plan facturation.
     *
     * @return bool Returns the acces autorise plan facturation.
     */
    public function getAccesAutorisePlanFacturation() {
        return $this->accesAutorisePlanFacturation;
    }

    /**
     * Set the acces autorise plan facturation.
     *
     * @param bool $accesAutorisePlanFacturation The acces autorise plan facturation.
     */
    public function setAccesAutorisePlanFacturation($accesAutorisePlanFacturation) {
        $this->accesAutorisePlanFacturation = $accesAutorisePlanFacturation;
        return $this;
    }
}
