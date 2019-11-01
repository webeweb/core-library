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
 * Indem cp msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIndemCpMsaTrait {

    /**
     * Indem cp msa.
     *
     * @var bool
     */
    private $indemCpMsa;

    /**
     * Get the indem cp msa.
     *
     * @return bool Returns the indem cp msa.
     */
    public function getIndemCpMsa() {
        return $this->indemCpMsa;
    }

    /**
     * Set the indem cp msa.
     *
     * @param bool $indemCpMsa The indem cp msa.
     */
    public function setIndemCpMsa($indemCpMsa) {
        $this->indemCpMsa = $indemCpMsa;
        return $this;
    }
}
