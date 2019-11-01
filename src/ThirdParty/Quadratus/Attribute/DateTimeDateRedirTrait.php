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
 * Date redir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRedirTrait {

    /**
     * Date redir.
     *
     * @var DateTime|null
     */
    private $dateRedir;

    /**
     * Get the date redir.
     *
     * @return DateTime|null Returns the date redir.
     */
    public function getDateRedir() {
        return $this->dateRedir;
    }

    /**
     * Set the date redir.
     *
     * @param DateTime|null $dateRedir The date redir.
     */
    public function setDateRedir(DateTime $dateRedir = null) {
        $this->dateRedir = $dateRedir;
        return $this;
    }
}
