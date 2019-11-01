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
 * Tel conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelConjointTrait {

    /**
     * Tel conjoint.
     *
     * @var string
     */
    private $telConjoint;

    /**
     * Get the tel conjoint.
     *
     * @return string Returns the tel conjoint.
     */
    public function getTelConjoint() {
        return $this->telConjoint;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string $telConjoint The tel conjoint.
     */
    public function setTelConjoint($telConjoint) {
        $this->telConjoint = $telConjoint;
        return $this;
    }
}
