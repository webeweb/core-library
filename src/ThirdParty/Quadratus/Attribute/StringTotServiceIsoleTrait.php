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
 * Tot service isole trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTotServiceIsoleTrait {

    /**
     * Tot service isole.
     *
     * @var string
     */
    private $totServiceIsole;

    /**
     * Get the tot service isole.
     *
     * @return string Returns the tot service isole.
     */
    public function getTotServiceIsole() {
        return $this->totServiceIsole;
    }

    /**
     * Set the tot service isole.
     *
     * @param string $totServiceIsole The tot service isole.
     */
    public function setTotServiceIsole($totServiceIsole) {
        $this->totServiceIsole = $totServiceIsole;
        return $this;
    }
}
