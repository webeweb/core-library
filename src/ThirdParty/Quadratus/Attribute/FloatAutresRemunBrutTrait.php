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
 * Autres remun brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresRemunBrutTrait {

    /**
     * Autres remun brut.
     *
     * @var float
     */
    private $autresRemunBrut;

    /**
     * Get the autres remun brut.
     *
     * @return float Returns the autres remun brut.
     */
    public function getAutresRemunBrut() {
        return $this->autresRemunBrut;
    }

    /**
     * Set the autres remun brut.
     *
     * @param float $autresRemunBrut The autres remun brut.
     */
    public function setAutresRemunBrut($autresRemunBrut) {
        $this->autresRemunBrut = $autresRemunBrut;
        return $this;
    }
}
