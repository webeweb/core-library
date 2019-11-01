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
 * Sante financiere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSanteFinanciereTrait {

    /**
     * Sante financiere.
     *
     * @var string
     */
    private $santeFinanciere;

    /**
     * Get the sante financiere.
     *
     * @return string Returns the sante financiere.
     */
    public function getSanteFinanciere() {
        return $this->santeFinanciere;
    }

    /**
     * Set the sante financiere.
     *
     * @param string $santeFinanciere The sante financiere.
     */
    public function setSanteFinanciere($santeFinanciere) {
        $this->santeFinanciere = $santeFinanciere;
        return $this;
    }
}
