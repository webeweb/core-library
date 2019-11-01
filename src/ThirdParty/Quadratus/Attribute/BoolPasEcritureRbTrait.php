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
 * Pas ecriture rb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasEcritureRbTrait {

    /**
     * Pas ecriture rb.
     *
     * @var bool
     */
    private $pasEcritureRb;

    /**
     * Get the pas ecriture rb.
     *
     * @return bool Returns the pas ecriture rb.
     */
    public function getPasEcritureRb() {
        return $this->pasEcritureRb;
    }

    /**
     * Set the pas ecriture rb.
     *
     * @param bool $pasEcritureRb The pas ecriture rb.
     */
    public function setPasEcritureRb($pasEcritureRb) {
        $this->pasEcritureRb = $pasEcritureRb;
        return $this;
    }
}
