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
 * Mt cmd non fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCmdNonFactTrait {

    /**
     * Mt cmd non fact.
     *
     * @var float
     */
    private $mtCmdNonFact;

    /**
     * Get the mt cmd non fact.
     *
     * @return float Returns the mt cmd non fact.
     */
    public function getMtCmdNonFact() {
        return $this->mtCmdNonFact;
    }

    /**
     * Set the mt cmd non fact.
     *
     * @param float $mtCmdNonFact The mt cmd non fact.
     */
    public function setMtCmdNonFact($mtCmdNonFact) {
        $this->mtCmdNonFact = $mtCmdNonFact;
        return $this;
    }
}
