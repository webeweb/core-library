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
 * Trs type travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsTypeTravailTrait {

    /**
     * Trs type travail.
     *
     * @var string
     */
    private $trsTypeTravail;

    /**
     * Get the trs type travail.
     *
     * @return string Returns the trs type travail.
     */
    public function getTrsTypeTravail() {
        return $this->trsTypeTravail;
    }

    /**
     * Set the trs type travail.
     *
     * @param string $trsTypeTravail The trs type travail.
     */
    public function setTrsTypeTravail($trsTypeTravail) {
        $this->trsTypeTravail = $trsTypeTravail;
        return $this;
    }
}
