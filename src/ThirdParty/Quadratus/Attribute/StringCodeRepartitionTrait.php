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
 * Code repartition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRepartitionTrait {

    /**
     * Code repartition.
     *
     * @var string
     */
    private $codeRepartition;

    /**
     * Get the code repartition.
     *
     * @return string Returns the code repartition.
     */
    public function getCodeRepartition() {
        return $this->codeRepartition;
    }

    /**
     * Set the code repartition.
     *
     * @param string $codeRepartition The code repartition.
     */
    public function setCodeRepartition($codeRepartition) {
        $this->codeRepartition = $codeRepartition;
        return $this;
    }
}
