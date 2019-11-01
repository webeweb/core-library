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
 * Lien sai immos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLienSaiImmosTrait {

    /**
     * Lien sai immos.
     *
     * @var bool
     */
    private $lienSaiImmos;

    /**
     * Get the lien sai immos.
     *
     * @return bool Returns the lien sai immos.
     */
    public function getLienSaiImmos() {
        return $this->lienSaiImmos;
    }

    /**
     * Set the lien sai immos.
     *
     * @param bool $lienSaiImmos The lien sai immos.
     */
    public function setLienSaiImmos($lienSaiImmos) {
        $this->lienSaiImmos = $lienSaiImmos;
        return $this;
    }
}
