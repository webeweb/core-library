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
 * Code edition fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEditionFactTrait {

    /**
     * Code edition fact.
     *
     * @var string
     */
    private $codeEditionFact;

    /**
     * Get the code edition fact.
     *
     * @return string Returns the code edition fact.
     */
    public function getCodeEditionFact() {
        return $this->codeEditionFact;
    }

    /**
     * Set the code edition fact.
     *
     * @param string $codeEditionFact The code edition fact.
     */
    public function setCodeEditionFact($codeEditionFact) {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }
}
