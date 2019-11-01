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
 * z annee acompte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntzAnneeAcompte1Trait {

    /**
     * z annee acompte1.
     *
     * @var int
     */
    private $zAnneeAcompte1;

    /**
     * Get the z annee acompte1.
     *
     * @return int Returns the z annee acompte1.
     */
    public function getzAnneeAcompte1() {
        return $this->zAnneeAcompte1;
    }

    /**
     * Set the z annee acompte1.
     *
     * @param int $zAnneeAcompte1 The z annee acompte1.
     */
    public function setzAnneeAcompte1($zAnneeAcompte1) {
        $this->zAnneeAcompte1 = $zAnneeAcompte1;
        return $this;
    }
}
