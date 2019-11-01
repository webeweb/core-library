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
 * Commande isolee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCommandeIsoleeTrait {

    /**
     * Commande isolee.
     *
     * @var bool
     */
    private $commandeIsolee;

    /**
     * Get the commande isolee.
     *
     * @return bool Returns the commande isolee.
     */
    public function getCommandeIsolee() {
        return $this->commandeIsolee;
    }

    /**
     * Set the commande isolee.
     *
     * @param bool $commandeIsolee The commande isolee.
     */
    public function setCommandeIsolee($commandeIsolee) {
        $this->commandeIsolee = $commandeIsolee;
        return $this;
    }
}
