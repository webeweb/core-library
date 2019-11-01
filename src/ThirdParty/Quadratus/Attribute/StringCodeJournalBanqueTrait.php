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
 * Code journal banque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalBanqueTrait {

    /**
     * Code journal banque.
     *
     * @var string
     */
    private $codeJournalBanque;

    /**
     * Get the code journal banque.
     *
     * @return string Returns the code journal banque.
     */
    public function getCodeJournalBanque() {
        return $this->codeJournalBanque;
    }

    /**
     * Set the code journal banque.
     *
     * @param string $codeJournalBanque The code journal banque.
     */
    public function setCodeJournalBanque($codeJournalBanque) {
        $this->codeJournalBanque = $codeJournalBanque;
        return $this;
    }
}
