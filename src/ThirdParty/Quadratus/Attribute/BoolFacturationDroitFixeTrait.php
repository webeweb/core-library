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
 * Facturation droit fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturationDroitFixeTrait {

    /**
     * Facturation droit fixe.
     *
     * @var bool
     */
    private $facturationDroitFixe;

    /**
     * Get the facturation droit fixe.
     *
     * @return bool Returns the facturation droit fixe.
     */
    public function getFacturationDroitFixe() {
        return $this->facturationDroitFixe;
    }

    /**
     * Set the facturation droit fixe.
     *
     * @param bool $facturationDroitFixe The facturation droit fixe.
     */
    public function setFacturationDroitFixe($facturationDroitFixe) {
        $this->facturationDroitFixe = $facturationDroitFixe;
        return $this;
    }
}
