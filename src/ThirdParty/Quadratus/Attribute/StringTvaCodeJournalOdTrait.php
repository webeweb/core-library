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
 * Tva code journal od trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeJournalOdTrait {

    /**
     * Tva code journal od.
     *
     * @var string
     */
    private $tvaCodeJournalOd;

    /**
     * Get the tva code journal od.
     *
     * @return string Returns the tva code journal od.
     */
    public function getTvaCodeJournalOd() {
        return $this->tvaCodeJournalOd;
    }

    /**
     * Set the tva code journal od.
     *
     * @param string $tvaCodeJournalOd The tva code journal od.
     */
    public function setTvaCodeJournalOd($tvaCodeJournalOd) {
        $this->tvaCodeJournalOd = $tvaCodeJournalOd;
        return $this;
    }
}
