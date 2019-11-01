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
 * Interdiction vue facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdictionVueFacturationTrait {

    /**
     * Interdiction vue facturation.
     *
     * @var bool
     */
    private $interdictionVueFacturation;

    /**
     * Get the interdiction vue facturation.
     *
     * @return bool Returns the interdiction vue facturation.
     */
    public function getInterdictionVueFacturation() {
        return $this->interdictionVueFacturation;
    }

    /**
     * Set the interdiction vue facturation.
     *
     * @param bool $interdictionVueFacturation The interdiction vue facturation.
     */
    public function setInterdictionVueFacturation($interdictionVueFacturation) {
        $this->interdictionVueFacturation = $interdictionVueFacturation;
        return $this;
    }
}
