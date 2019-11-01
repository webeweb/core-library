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
 * At risque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisqueTrait {

    /**
     * At risque.
     *
     * @var string
     */
    private $atRisque;

    /**
     * Get the at risque.
     *
     * @return string Returns the at risque.
     */
    public function getAtRisque() {
        return $this->atRisque;
    }

    /**
     * Set the at risque.
     *
     * @param string $atRisque The at risque.
     */
    public function setAtRisque($atRisque) {
        $this->atRisque = $atRisque;
        return $this;
    }
}
