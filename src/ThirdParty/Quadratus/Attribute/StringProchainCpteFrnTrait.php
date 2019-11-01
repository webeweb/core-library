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
 * Prochain cpte frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProchainCpteFrnTrait {

    /**
     * Prochain cpte frn.
     *
     * @var string
     */
    private $prochainCpteFrn;

    /**
     * Get the prochain cpte frn.
     *
     * @return string Returns the prochain cpte frn.
     */
    public function getProchainCpteFrn() {
        return $this->prochainCpteFrn;
    }

    /**
     * Set the prochain cpte frn.
     *
     * @param string $prochainCpteFrn The prochain cpte frn.
     */
    public function setProchainCpteFrn($prochainCpteFrn) {
        $this->prochainCpteFrn = $prochainCpteFrn;
        return $this;
    }
}
