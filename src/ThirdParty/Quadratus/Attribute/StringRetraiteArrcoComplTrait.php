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
 * Retraite arrco compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteArrcoComplTrait {

    /**
     * Retraite arrco compl.
     *
     * @var string
     */
    private $retraiteArrcoCompl;

    /**
     * Get the retraite arrco compl.
     *
     * @return string Returns the retraite arrco compl.
     */
    public function getRetraiteArrcoCompl() {
        return $this->retraiteArrcoCompl;
    }

    /**
     * Set the retraite arrco compl.
     *
     * @param string $retraiteArrcoCompl The retraite arrco compl.
     */
    public function setRetraiteArrcoCompl($retraiteArrcoCompl) {
        $this->retraiteArrcoCompl = $retraiteArrcoCompl;
        return $this;
    }
}
