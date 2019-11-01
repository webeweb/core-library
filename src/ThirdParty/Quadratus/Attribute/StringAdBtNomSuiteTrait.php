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
 * Ad bt nom suite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtNomSuiteTrait {

    /**
     * Ad bt nom suite.
     *
     * @var string
     */
    private $adBtNomSuite;

    /**
     * Get the ad bt nom suite.
     *
     * @return string Returns the ad bt nom suite.
     */
    public function getAdBtNomSuite() {
        return $this->adBtNomSuite;
    }

    /**
     * Set the ad bt nom suite.
     *
     * @param string $adBtNomSuite The ad bt nom suite.
     */
    public function setAdBtNomSuite($adBtNomSuite) {
        $this->adBtNomSuite = $adBtNomSuite;
        return $this;
    }
}
