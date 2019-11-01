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
 * Code pays fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysFactTrait {

    /**
     * Code pays fact.
     *
     * @var string
     */
    private $codePaysFact;

    /**
     * Get the code pays fact.
     *
     * @return string Returns the code pays fact.
     */
    public function getCodePaysFact() {
        return $this->codePaysFact;
    }

    /**
     * Set the code pays fact.
     *
     * @param string $codePaysFact The code pays fact.
     */
    public function setCodePaysFact($codePaysFact) {
        $this->codePaysFact = $codePaysFact;
        return $this;
    }
}
