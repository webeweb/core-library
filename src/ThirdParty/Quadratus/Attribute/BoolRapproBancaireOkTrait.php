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
 * Rappro bancaire ok trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRapproBancaireOkTrait {

    /**
     * Rappro bancaire ok.
     *
     * @var bool
     */
    private $rapproBancaireOk;

    /**
     * Get the rappro bancaire ok.
     *
     * @return bool Returns the rappro bancaire ok.
     */
    public function getRapproBancaireOk() {
        return $this->rapproBancaireOk;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool $rapproBancaireOk The rappro bancaire ok.
     */
    public function setRapproBancaireOk($rapproBancaireOk) {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }
}
