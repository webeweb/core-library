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
 * Creer alerte paie def en paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreerAlertePaieDefEnPaieTrait {

    /**
     * Creer alerte paie def en paie.
     *
     * @var bool
     */
    private $creerAlertePaieDefEnPaie;

    /**
     * Get the creer alerte paie def en paie.
     *
     * @return bool Returns the creer alerte paie def en paie.
     */
    public function getCreerAlertePaieDefEnPaie() {
        return $this->creerAlertePaieDefEnPaie;
    }

    /**
     * Set the creer alerte paie def en paie.
     *
     * @param bool $creerAlertePaieDefEnPaie The creer alerte paie def en paie.
     */
    public function setCreerAlertePaieDefEnPaie($creerAlertePaieDefEnPaie) {
        $this->creerAlertePaieDefEnPaie = $creerAlertePaieDefEnPaie;
        return $this;
    }
}
