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
 * Commande recue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCommandeRecueTrait {

    /**
     * Commande recue.
     *
     * @var bool
     */
    private $commandeRecue;

    /**
     * Get the commande recue.
     *
     * @return bool Returns the commande recue.
     */
    public function getCommandeRecue() {
        return $this->commandeRecue;
    }

    /**
     * Set the commande recue.
     *
     * @param bool $commandeRecue The commande recue.
     */
    public function setCommandeRecue($commandeRecue) {
        $this->commandeRecue = $commandeRecue;
        return $this;
    }
}
