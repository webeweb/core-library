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
 * Brut soumis crds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBrutSoumisCrdsTrait {

    /**
     * Brut soumis crds.
     *
     * @var float
     */
    private $brutSoumisCrds;

    /**
     * Get the brut soumis crds.
     *
     * @return float Returns the brut soumis crds.
     */
    public function getBrutSoumisCrds() {
        return $this->brutSoumisCrds;
    }

    /**
     * Set the brut soumis crds.
     *
     * @param float $brutSoumisCrds The brut soumis crds.
     */
    public function setBrutSoumisCrds($brutSoumisCrds) {
        $this->brutSoumisCrds = $brutSoumisCrds;
        return $this;
    }
}
