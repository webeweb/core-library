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
 * Nbr bulletins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrBulletinsTrait {

    /**
     * Nbr bulletins.
     *
     * @var float
     */
    private $nbrBulletins;

    /**
     * Get the nbr bulletins.
     *
     * @return float Returns the nbr bulletins.
     */
    public function getNbrBulletins() {
        return $this->nbrBulletins;
    }

    /**
     * Set the nbr bulletins.
     *
     * @param float $nbrBulletins The nbr bulletins.
     */
    public function setNbrBulletins($nbrBulletins) {
        $this->nbrBulletins = $nbrBulletins;
        return $this;
    }
}
