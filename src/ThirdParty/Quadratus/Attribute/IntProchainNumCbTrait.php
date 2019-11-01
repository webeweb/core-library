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
 * Prochain num cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumCbTrait {

    /**
     * Prochain num cb.
     *
     * @var int
     */
    private $prochainNumCb;

    /**
     * Get the prochain num cb.
     *
     * @return int Returns the prochain num cb.
     */
    public function getProchainNumCb() {
        return $this->prochainNumCb;
    }

    /**
     * Set the prochain num cb.
     *
     * @param int $prochainNumCb The prochain num cb.
     */
    public function setProchainNumCb($prochainNumCb) {
        $this->prochainNumCb = $prochainNumCb;
        return $this;
    }
}
