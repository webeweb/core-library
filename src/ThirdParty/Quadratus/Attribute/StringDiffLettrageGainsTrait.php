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
 * Diff lettrage gains trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiffLettrageGainsTrait {

    /**
     * Diff lettrage gains.
     *
     * @var string
     */
    private $diffLettrageGains;

    /**
     * Get the diff lettrage gains.
     *
     * @return string Returns the diff lettrage gains.
     */
    public function getDiffLettrageGains() {
        return $this->diffLettrageGains;
    }

    /**
     * Set the diff lettrage gains.
     *
     * @param string $diffLettrageGains The diff lettrage gains.
     */
    public function setDiffLettrageGains($diffLettrageGains) {
        $this->diffLettrageGains = $diffLettrageGains;
        return $this;
    }
}
