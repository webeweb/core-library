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
 * Brut soumis abat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutSoumisAbatTrait {

    /**
     * Brut soumis abat.
     *
     * @var float
     */
    private $brutSoumisAbat;

    /**
     * Get the brut soumis abat.
     *
     * @return float Returns the brut soumis abat.
     */
    public function getBrutSoumisAbat() {
        return $this->brutSoumisAbat;
    }

    /**
     * Set the brut soumis abat.
     *
     * @param float $brutSoumisAbat The brut soumis abat.
     */
    public function setBrutSoumisAbat($brutSoumisAbat) {
        $this->brutSoumisAbat = $brutSoumisAbat;
        return $this;
    }
}
