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
 * Comptes comptables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComptesComptablesTrait {

    /**
     * Comptes comptables.
     *
     * @var string
     */
    private $comptesComptables;

    /**
     * Get the comptes comptables.
     *
     * @return string Returns the comptes comptables.
     */
    public function getComptesComptables() {
        return $this->comptesComptables;
    }

    /**
     * Set the comptes comptables.
     *
     * @param string $comptesComptables The comptes comptables.
     */
    public function setComptesComptables($comptesComptables) {
        $this->comptesComptables = $comptesComptables;
        return $this;
    }
}
