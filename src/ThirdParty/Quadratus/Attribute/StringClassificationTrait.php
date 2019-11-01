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
 * Classification trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClassificationTrait {

    /**
     * Classification.
     *
     * @var string
     */
    private $classification;

    /**
     * Get the classification.
     *
     * @return string Returns the classification.
     */
    public function getClassification() {
        return $this->classification;
    }

    /**
     * Set the classification.
     *
     * @param string $classification The classification.
     */
    public function setClassification($classification) {
        $this->classification = $classification;
        return $this;
    }
}
