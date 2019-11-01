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
 * Prochain num pj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumPjTrait {

    /**
     * Prochain num pj.
     *
     * @var int
     */
    private $prochainNumPj;

    /**
     * Get the prochain num pj.
     *
     * @return int Returns the prochain num pj.
     */
    public function getProchainNumPj() {
        return $this->prochainNumPj;
    }

    /**
     * Set the prochain num pj.
     *
     * @param int $prochainNumPj The prochain num pj.
     */
    public function setProchainNumPj($prochainNumPj) {
        $this->prochainNumPj = $prochainNumPj;
        return $this;
    }
}
