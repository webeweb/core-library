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
 * Regroup fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegroupFactTrait {

    /**
     * Regroup fact.
     *
     * @var string
     */
    private $regroupFact;

    /**
     * Get the regroup fact.
     *
     * @return string Returns the regroup fact.
     */
    public function getRegroupFact() {
        return $this->regroupFact;
    }

    /**
     * Set the regroup fact.
     *
     * @param string $regroupFact The regroup fact.
     */
    public function setRegroupFact($regroupFact) {
        $this->regroupFact = $regroupFact;
        return $this;
    }
}
