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
 * Num critere da txt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereDaTxt1Trait {

    /**
     * Num critere da txt1.
     *
     * @var string
     */
    private $numCritereDaTxt1;

    /**
     * Get the num critere da txt1.
     *
     * @return string Returns the num critere da txt1.
     */
    public function getNumCritereDaTxt1() {
        return $this->numCritereDaTxt1;
    }

    /**
     * Set the num critere da txt1.
     *
     * @param string $numCritereDaTxt1 The num critere da txt1.
     */
    public function setNumCritereDaTxt1($numCritereDaTxt1) {
        $this->numCritereDaTxt1 = $numCritereDaTxt1;
        return $this;
    }
}
