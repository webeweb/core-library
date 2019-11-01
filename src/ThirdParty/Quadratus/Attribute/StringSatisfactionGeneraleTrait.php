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
 * Satisfaction generale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSatisfactionGeneraleTrait {

    /**
     * Satisfaction generale.
     *
     * @var string
     */
    private $satisfactionGenerale;

    /**
     * Get the satisfaction generale.
     *
     * @return string Returns the satisfaction generale.
     */
    public function getSatisfactionGenerale() {
        return $this->satisfactionGenerale;
    }

    /**
     * Set the satisfaction generale.
     *
     * @param string $satisfactionGenerale The satisfaction generale.
     */
    public function setSatisfactionGenerale($satisfactionGenerale) {
        $this->satisfactionGenerale = $satisfactionGenerale;
        return $this;
    }
}
