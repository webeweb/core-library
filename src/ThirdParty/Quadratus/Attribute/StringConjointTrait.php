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
 * Conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringConjointTrait {

    /**
     * Conjoint.
     *
     * @var string
     */
    private $conjoint;

    /**
     * Get the conjoint.
     *
     * @return string Returns the conjoint.
     */
    public function getConjoint() {
        return $this->conjoint;
    }

    /**
     * Set the conjoint.
     *
     * @param string $conjoint The conjoint.
     */
    public function setConjoint($conjoint) {
        $this->conjoint = $conjoint;
        return $this;
    }
}
