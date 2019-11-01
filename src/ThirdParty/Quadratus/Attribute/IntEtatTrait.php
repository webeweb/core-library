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
 * Etat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtatTrait {

    /**
     * Etat.
     *
     * @var int
     */
    private $etat;

    /**
     * Get the etat.
     *
     * @return int Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Set the etat.
     *
     * @param int $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }
}
