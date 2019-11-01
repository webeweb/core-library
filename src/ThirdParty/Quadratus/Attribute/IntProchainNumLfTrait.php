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
 * Prochain num lf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumLfTrait {

    /**
     * Prochain num lf.
     *
     * @var int
     */
    private $prochainNumLf;

    /**
     * Get the prochain num lf.
     *
     * @return int Returns the prochain num lf.
     */
    public function getProchainNumLf() {
        return $this->prochainNumLf;
    }

    /**
     * Set the prochain num lf.
     *
     * @param int $prochainNumLf The prochain num lf.
     */
    public function setProchainNumLf($prochainNumLf) {
        $this->prochainNumLf = $prochainNumLf;
        return $this;
    }
}
