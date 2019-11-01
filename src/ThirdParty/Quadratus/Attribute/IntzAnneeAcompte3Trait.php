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
 * z annee acompte3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntzAnneeAcompte3Trait {

    /**
     * z annee acompte3.
     *
     * @var int
     */
    private $zAnneeAcompte3;

    /**
     * Get the z annee acompte3.
     *
     * @return int Returns the z annee acompte3.
     */
    public function getzAnneeAcompte3() {
        return $this->zAnneeAcompte3;
    }

    /**
     * Set the z annee acompte3.
     *
     * @param int $zAnneeAcompte3 The z annee acompte3.
     */
    public function setzAnneeAcompte3($zAnneeAcompte3) {
        $this->zAnneeAcompte3 = $zAnneeAcompte3;
        return $this;
    }
}
