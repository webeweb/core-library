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
 * Ht avec saisie conges codes clients trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHtAvecSaisieCongesCodesClientsTrait {

    /**
     * Ht avec saisie conges codes clients.
     *
     * @var string
     */
    private $htAvecSaisieCongesCodesClients;

    /**
     * Get the ht avec saisie conges codes clients.
     *
     * @return string Returns the ht avec saisie conges codes clients.
     */
    public function getHtAvecSaisieCongesCodesClients() {
        return $this->htAvecSaisieCongesCodesClients;
    }

    /**
     * Set the ht avec saisie conges codes clients.
     *
     * @param string $htAvecSaisieCongesCodesClients The ht avec saisie conges codes clients.
     */
    public function setHtAvecSaisieCongesCodesClients($htAvecSaisieCongesCodesClients) {
        $this->htAvecSaisieCongesCodesClients = $htAvecSaisieCongesCodesClients;
        return $this;
    }
}
