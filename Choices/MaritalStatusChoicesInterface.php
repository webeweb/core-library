<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Choices;

/**
 * Marital status choices interface.
 *
 * @author Camille A. <c.attia@nectardecode.com>
 * @package WBW\Library\Core\Choices
 */
interface MaritalStatusChoicesInterface {

	/**
	 * Marital status "Divorced".
	 */
	const MARITAL_STATUS_DIVORCED = 80;

	/**
	 * Marital status "Empty".
	 */
	const MARITAL_STATUS_EMPTY = -1;

	/**
	 * Marital status "Married".
	 */
	const MARITAL_STATUS_MARRIED = 68;

	/**
	 * Marital status "Pacs".
	 */
	const MARITAL_STATUS_PACS = 39;

	/**
	 * Marital status "Single".
	 */
	const MARITAL_STATUS_SINGLE = 66;

	/**
	 * Marital status "Widower".
	 */
	const MARITAL_STATUS_WIDOWER = 97;

}
