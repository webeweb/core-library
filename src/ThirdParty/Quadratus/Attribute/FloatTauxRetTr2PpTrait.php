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
 * Taux ret tr2 pp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRetTr2PpTrait {

    /**
     * Taux ret tr2 pp.
     *
     * @var float
     */
    private $tauxRetTr2Pp;

    /**
     * Get the taux ret tr2 pp.
     *
     * @return float Returns the taux ret tr2 pp.
     */
    public function getTauxRetTr2Pp() {
        return $this->tauxRetTr2Pp;
    }

    /**
     * Set the taux ret tr2 pp.
     *
     * @param float $tauxRetTr2Pp The taux ret tr2 pp.
     */
    public function setTauxRetTr2Pp($tauxRetTr2Pp) {
        $this->tauxRetTr2Pp = $tauxRetTr2Pp;
        return $this;
    }
}
