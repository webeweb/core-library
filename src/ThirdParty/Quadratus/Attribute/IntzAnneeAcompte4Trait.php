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
 * z annee acompte4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntzAnneeAcompte4Trait {

    /**
     * z annee acompte4.
     *
     * @var int
     */
    private $zAnneeAcompte4;

    /**
     * Get the z annee acompte4.
     *
     * @return int Returns the z annee acompte4.
     */
    public function getzAnneeAcompte4() {
        return $this->zAnneeAcompte4;
    }

    /**
     * Set the z annee acompte4.
     *
     * @param int $zAnneeAcompte4 The z annee acompte4.
     */
    public function setzAnneeAcompte4($zAnneeAcompte4) {
        $this->zAnneeAcompte4 = $zAnneeAcompte4;
        return $this;
    }
}
