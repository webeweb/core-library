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
 * Exo occasionnel msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoOccasionnelMsaTrait {

    /**
     * Exo occasionnel msa.
     *
     * @var bool
     */
    private $exoOccasionnelMsa;

    /**
     * Get the exo occasionnel msa.
     *
     * @return bool Returns the exo occasionnel msa.
     */
    public function getExoOccasionnelMsa() {
        return $this->exoOccasionnelMsa;
    }

    /**
     * Set the exo occasionnel msa.
     *
     * @param bool $exoOccasionnelMsa The exo occasionnel msa.
     */
    public function setExoOccasionnelMsa($exoOccasionnelMsa) {
        $this->exoOccasionnelMsa = $exoOccasionnelMsa;
        return $this;
    }
}
