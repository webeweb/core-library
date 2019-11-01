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

use DateTime;

/**
 * Date derniere modif agenda trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDerniereModifAgendaTrait {

    /**
     * Date derniere modif agenda.
     *
     * @var DateTime|null
     */
    private $dateDerniereModifAgenda;

    /**
     * Get the date derniere modif agenda.
     *
     * @return DateTime|null Returns the date derniere modif agenda.
     */
    public function getDateDerniereModifAgenda() {
        return $this->dateDerniereModifAgenda;
    }

    /**
     * Set the date derniere modif agenda.
     *
     * @param DateTime|null $dateDerniereModifAgenda The date derniere modif agenda.
     */
    public function setDateDerniereModifAgenda(DateTime $dateDerniereModifAgenda = null) {
        $this->dateDerniereModifAgenda = $dateDerniereModifAgenda;
        return $this;
    }
}
