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
 * Prix net trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixNetTrait {

    /**
     * Prix net.
     *
     * @var bool
     */
    private $prixNet;

    /**
     * Get the prix net.
     *
     * @return bool Returns the prix net.
     */
    public function getPrixNet() {
        return $this->prixNet;
    }

    /**
     * Set the prix net.
     *
     * @param bool $prixNet The prix net.
     */
    public function setPrixNet($prixNet) {
        $this->prixNet = $prixNet;
        return $this;
    }
}
