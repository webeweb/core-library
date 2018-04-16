<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Choices;

/**
 * Marital status choices interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 */
interface MaritalStatusChoicesInterface {

    /**
     * Marital status "Divorced".
     *
     * @var integer
     */
    const MARITAL_STATUS_DIVORCED = 80;

    /**
     * Marital status "Empty".
     *
     * @var integer
     */
    const MARITAL_STATUS_EMPTY = -1;

    /**
     * Marital status "Married".
     *
     * @var integer
     */
    const MARITAL_STATUS_MARRIED = 68;

    /**
     * Marital status "Pacs".
     *
     * @var integer
     */
    const MARITAL_STATUS_PACS = 39;

    /**
     * Marital status "Single".
     *
     * @var integer
     */
    const MARITAL_STATUS_SINGLE = 66;

    /**
     * Marital status "Widower".
     *
     * @var integer
     */
    const MARITAL_STATUS_WIDOWER = 97;

}
