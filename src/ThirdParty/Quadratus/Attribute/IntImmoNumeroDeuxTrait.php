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
 * Immo numero deux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntImmoNumeroDeuxTrait {

    /**
     * Immo numero deux.
     *
     * @var int
     */
    private $immoNumeroDeux;

    /**
     * Get the immo numero deux.
     *
     * @return int Returns the immo numero deux.
     */
    public function getImmoNumeroDeux() {
        return $this->immoNumeroDeux;
    }

    /**
     * Set the immo numero deux.
     *
     * @param int $immoNumeroDeux The immo numero deux.
     */
    public function setImmoNumeroDeux($immoNumeroDeux) {
        $this->immoNumeroDeux = $immoNumeroDeux;
        return $this;
    }
}
