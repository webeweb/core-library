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
 * Tvaedi edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaediEditionTrait {

    /**
     * Tvaedi edition.
     *
     * @var bool
     */
    private $tvaediEdition;

    /**
     * Get the tvaedi edition.
     *
     * @return bool Returns the tvaedi edition.
     */
    public function getTvaediEdition() {
        return $this->tvaediEdition;
    }

    /**
     * Set the tvaedi edition.
     *
     * @param bool $tvaediEdition The tvaedi edition.
     */
    public function setTvaediEdition($tvaediEdition) {
        $this->tvaediEdition = $tvaediEdition;
        return $this;
    }
}
