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
 * Lieu pj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuPjTrait {

    /**
     * Lieu pj.
     *
     * @var string
     */
    private $lieuPj;

    /**
     * Get the lieu pj.
     *
     * @return string Returns the lieu pj.
     */
    public function getLieuPj() {
        return $this->lieuPj;
    }

    /**
     * Set the lieu pj.
     *
     * @param string $lieuPj The lieu pj.
     */
    public function setLieuPj($lieuPj) {
        $this->lieuPj = $lieuPj;
        return $this;
    }
}
