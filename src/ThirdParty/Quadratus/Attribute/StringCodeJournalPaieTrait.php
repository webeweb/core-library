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
 * Code journal paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalPaieTrait {

    /**
     * Code journal paie.
     *
     * @var string
     */
    private $codeJournalPaie;

    /**
     * Get the code journal paie.
     *
     * @return string Returns the code journal paie.
     */
    public function getCodeJournalPaie() {
        return $this->codeJournalPaie;
    }

    /**
     * Set the code journal paie.
     *
     * @param string $codeJournalPaie The code journal paie.
     */
    public function setCodeJournalPaie($codeJournalPaie) {
        $this->codeJournalPaie = $codeJournalPaie;
        return $this;
    }
}
