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
 * Code porteur risque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePorteurRisqueTrait {

    /**
     * Code porteur risque.
     *
     * @var string
     */
    private $codePorteurRisque;

    /**
     * Get the code porteur risque.
     *
     * @return string Returns the code porteur risque.
     */
    public function getCodePorteurRisque() {
        return $this->codePorteurRisque;
    }

    /**
     * Set the code porteur risque.
     *
     * @param string $codePorteurRisque The code porteur risque.
     */
    public function setCodePorteurRisque($codePorteurRisque) {
        $this->codePorteurRisque = $codePorteurRisque;
        return $this;
    }
}
