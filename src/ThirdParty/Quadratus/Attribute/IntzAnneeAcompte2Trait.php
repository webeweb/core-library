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
 * z annee acompte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntzAnneeAcompte2Trait {

    /**
     * z annee acompte2.
     *
     * @var int
     */
    private $zAnneeAcompte2;

    /**
     * Get the z annee acompte2.
     *
     * @return int Returns the z annee acompte2.
     */
    public function getzAnneeAcompte2() {
        return $this->zAnneeAcompte2;
    }

    /**
     * Set the z annee acompte2.
     *
     * @param int $zAnneeAcompte2 The z annee acompte2.
     */
    public function setzAnneeAcompte2($zAnneeAcompte2) {
        $this->zAnneeAcompte2 = $zAnneeAcompte2;
        return $this;
    }
}
