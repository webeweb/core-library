<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Navigation\Node;

use WBW\Library\Core\Node\AbstractNode;

/**
 * Abstract navigation node.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Navigation\Node
 * @abstract
 */
abstract class AbstractNavigationNode extends AbstractNode {

	/**
	 * Constructor.
	 *
	 * @param string $id The id.
	 */
	protected function __construct($id) {
		parent::__construct($id);
	}

}
