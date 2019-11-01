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
 * Pourcent abat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentAbatTrait {

    /**
     * Pourcent abat.
     *
     * @var float
     */
    private $pourcentAbat;

    /**
     * Get the pourcent abat.
     *
     * @return float Returns the pourcent abat.
     */
    public function getPourcentAbat() {
        return $this->pourcentAbat;
    }

    /**
     * Set the pourcent abat.
     *
     * @param float $pourcentAbat The pourcent abat.
     */
    public function setPourcentAbat($pourcentAbat) {
        $this->pourcentAbat = $pourcentAbat;
        return $this;
    }
}
