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
 * Police trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoliceTrait {

    /**
     * Police.
     *
     * @var string
     */
    private $police;

    /**
     * Get the police.
     *
     * @return string Returns the police.
     */
    public function getPolice() {
        return $this->police;
    }

    /**
     * Set the police.
     *
     * @param string $police The police.
     */
    public function setPolice($police) {
        $this->police = $police;
        return $this;
    }
}
