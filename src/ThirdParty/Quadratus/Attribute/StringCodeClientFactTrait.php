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
 * Code client fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClientFactTrait {

    /**
     * Code client fact.
     *
     * @var string
     */
    private $codeClientFact;

    /**
     * Get the code client fact.
     *
     * @return string Returns the code client fact.
     */
    public function getCodeClientFact() {
        return $this->codeClientFact;
    }

    /**
     * Set the code client fact.
     *
     * @param string $codeClientFact The code client fact.
     */
    public function setCodeClientFact($codeClientFact) {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }
}
