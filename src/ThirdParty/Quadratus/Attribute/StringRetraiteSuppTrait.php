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
 * Retraite supp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteSuppTrait {

    /**
     * Retraite supp.
     *
     * @var string
     */
    private $retraiteSupp;

    /**
     * Get the retraite supp.
     *
     * @return string Returns the retraite supp.
     */
    public function getRetraiteSupp() {
        return $this->retraiteSupp;
    }

    /**
     * Set the retraite supp.
     *
     * @param string $retraiteSupp The retraite supp.
     */
    public function setRetraiteSupp($retraiteSupp) {
        $this->retraiteSupp = $retraiteSupp;
        return $this;
    }
}
