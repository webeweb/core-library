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
 * Code journal echeance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalEcheanceTrait {

    /**
     * Code journal echeance.
     *
     * @var string
     */
    private $codeJournalEcheance;

    /**
     * Get the code journal echeance.
     *
     * @return string Returns the code journal echeance.
     */
    public function getCodeJournalEcheance() {
        return $this->codeJournalEcheance;
    }

    /**
     * Set the code journal echeance.
     *
     * @param string $codeJournalEcheance The code journal echeance.
     */
    public function setCodeJournalEcheance($codeJournalEcheance) {
        $this->codeJournalEcheance = $codeJournalEcheance;
        return $this;
    }
}
