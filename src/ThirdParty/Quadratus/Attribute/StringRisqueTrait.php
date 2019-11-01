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
 * Risque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRisqueTrait {

    /**
     * Risque.
     *
     * @var string
     */
    private $risque;

    /**
     * Get the risque.
     *
     * @return string Returns the risque.
     */
    public function getRisque() {
        return $this->risque;
    }

    /**
     * Set the risque.
     *
     * @param string $risque The risque.
     */
    public function setRisque($risque) {
        $this->risque = $risque;
        return $this;
    }
}
