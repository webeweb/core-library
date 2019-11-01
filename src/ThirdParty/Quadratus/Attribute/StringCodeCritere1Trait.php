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
 * Code critere1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCritere1Trait {

    /**
     * Code critere1.
     *
     * @var string
     */
    private $codeCritere1;

    /**
     * Get the code critere1.
     *
     * @return string Returns the code critere1.
     */
    public function getCodeCritere1() {
        return $this->codeCritere1;
    }

    /**
     * Set the code critere1.
     *
     * @param string $codeCritere1 The code critere1.
     */
    public function setCodeCritere1($codeCritere1) {
        $this->codeCritere1 = $codeCritere1;
        return $this;
    }
}
