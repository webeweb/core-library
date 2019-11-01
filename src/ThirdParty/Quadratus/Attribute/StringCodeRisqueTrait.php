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
 * Code risque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRisqueTrait {

    /**
     * Code risque.
     *
     * @var string
     */
    private $codeRisque;

    /**
     * Get the code risque.
     *
     * @return string Returns the code risque.
     */
    public function getCodeRisque() {
        return $this->codeRisque;
    }

    /**
     * Set the code risque.
     *
     * @param string $codeRisque The code risque.
     */
    public function setCodeRisque($codeRisque) {
        $this->codeRisque = $codeRisque;
        return $this;
    }
}
