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
 * Ref oblig fisc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefObligFiscTrait {

    /**
     * Ref oblig fisc.
     *
     * @var string
     */
    private $refObligFisc;

    /**
     * Get the ref oblig fisc.
     *
     * @return string Returns the ref oblig fisc.
     */
    public function getRefObligFisc() {
        return $this->refObligFisc;
    }

    /**
     * Set the ref oblig fisc.
     *
     * @param string $refObligFisc The ref oblig fisc.
     */
    public function setRefObligFisc($refObligFisc) {
        $this->refObligFisc = $refObligFisc;
        return $this;
    }
}
