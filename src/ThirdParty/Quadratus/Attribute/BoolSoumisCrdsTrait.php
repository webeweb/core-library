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
 * Soumis crds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisCrdsTrait {

    /**
     * Soumis crds.
     *
     * @var bool
     */
    private $soumisCrds;

    /**
     * Get the soumis crds.
     *
     * @return bool Returns the soumis crds.
     */
    public function getSoumisCrds() {
        return $this->soumisCrds;
    }

    /**
     * Set the soumis crds.
     *
     * @param bool $soumisCrds The soumis crds.
     */
    public function setSoumisCrds($soumisCrds) {
        $this->soumisCrds = $soumisCrds;
        return $this;
    }
}
