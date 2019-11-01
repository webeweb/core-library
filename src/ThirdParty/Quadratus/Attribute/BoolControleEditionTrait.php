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
 * Controle edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControleEditionTrait {

    /**
     * Controle edition.
     *
     * @var bool
     */
    private $controleEdition;

    /**
     * Get the controle edition.
     *
     * @return bool Returns the controle edition.
     */
    public function getControleEdition() {
        return $this->controleEdition;
    }

    /**
     * Set the controle edition.
     *
     * @param bool $controleEdition The controle edition.
     */
    public function setControleEdition($controleEdition) {
        $this->controleEdition = $controleEdition;
        return $this;
    }
}
