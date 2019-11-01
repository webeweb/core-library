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
 * Prochain numero pj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumeroPjTrait {

    /**
     * Prochain numero pj.
     *
     * @var int
     */
    private $prochainNumeroPj;

    /**
     * Get the prochain numero pj.
     *
     * @return int Returns the prochain numero pj.
     */
    public function getProchainNumeroPj() {
        return $this->prochainNumeroPj;
    }

    /**
     * Set the prochain numero pj.
     *
     * @param int $prochainNumeroPj The prochain numero pj.
     */
    public function setProchainNumeroPj($prochainNumeroPj) {
        $this->prochainNumeroPj = $prochainNumeroPj;
        return $this;
    }
}
