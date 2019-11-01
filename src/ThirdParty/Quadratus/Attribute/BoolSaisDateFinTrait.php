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
 * Sais date fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisDateFinTrait {

    /**
     * Sais date fin.
     *
     * @var bool
     */
    private $saisDateFin;

    /**
     * Get the sais date fin.
     *
     * @return bool Returns the sais date fin.
     */
    public function getSaisDateFin() {
        return $this->saisDateFin;
    }

    /**
     * Set the sais date fin.
     *
     * @param bool $saisDateFin The sais date fin.
     */
    public function setSaisDateFin($saisDateFin) {
        $this->saisDateFin = $saisDateFin;
        return $this;
    }
}
