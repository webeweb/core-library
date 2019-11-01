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
 * Ht avec saisie conges trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHtAvecSaisieCongesTrait {

    /**
     * Ht avec saisie conges.
     *
     * @var bool
     */
    private $htAvecSaisieConges;

    /**
     * Get the ht avec saisie conges.
     *
     * @return bool Returns the ht avec saisie conges.
     */
    public function getHtAvecSaisieConges() {
        return $this->htAvecSaisieConges;
    }

    /**
     * Set the ht avec saisie conges.
     *
     * @param bool $htAvecSaisieConges The ht avec saisie conges.
     */
    public function setHtAvecSaisieConges($htAvecSaisieConges) {
        $this->htAvecSaisieConges = $htAvecSaisieConges;
        return $this;
    }
}
