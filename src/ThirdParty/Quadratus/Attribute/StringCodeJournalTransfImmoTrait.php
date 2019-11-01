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
 * Code journal transf immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalTransfImmoTrait {

    /**
     * Code journal transf immo.
     *
     * @var string
     */
    private $codeJournalTransfImmo;

    /**
     * Get the code journal transf immo.
     *
     * @return string Returns the code journal transf immo.
     */
    public function getCodeJournalTransfImmo() {
        return $this->codeJournalTransfImmo;
    }

    /**
     * Set the code journal transf immo.
     *
     * @param string $codeJournalTransfImmo The code journal transf immo.
     */
    public function setCodeJournalTransfImmo($codeJournalTransfImmo) {
        $this->codeJournalTransfImmo = $codeJournalTransfImmo;
        return $this;
    }
}
