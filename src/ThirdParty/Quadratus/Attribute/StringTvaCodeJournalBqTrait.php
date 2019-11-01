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
 * Tva code journal bq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeJournalBqTrait {

    /**
     * Tva code journal bq.
     *
     * @var string
     */
    private $tvaCodeJournalBq;

    /**
     * Get the tva code journal bq.
     *
     * @return string Returns the tva code journal bq.
     */
    public function getTvaCodeJournalBq() {
        return $this->tvaCodeJournalBq;
    }

    /**
     * Set the tva code journal bq.
     *
     * @param string $tvaCodeJournalBq The tva code journal bq.
     */
    public function setTvaCodeJournalBq($tvaCodeJournalBq) {
        $this->tvaCodeJournalBq = $tvaCodeJournalBq;
        return $this;
    }
}
