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
 * Code regroupement pre fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroupementPreFactTrait {

    /**
     * Code regroupement pre fact.
     *
     * @var string
     */
    private $codeRegroupementPreFact;

    /**
     * Get the code regroupement pre fact.
     *
     * @return string Returns the code regroupement pre fact.
     */
    public function getCodeRegroupementPreFact() {
        return $this->codeRegroupementPreFact;
    }

    /**
     * Set the code regroupement pre fact.
     *
     * @param string $codeRegroupementPreFact The code regroupement pre fact.
     */
    public function setCodeRegroupementPreFact($codeRegroupementPreFact) {
        $this->codeRegroupementPreFact = $codeRegroupementPreFact;
        return $this;
    }
}
