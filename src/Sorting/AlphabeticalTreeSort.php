<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Sorting;

/**
 * Alphabetical tree sort.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sorting
 */
class AlphabeticalTreeSort {

    /**
     * Nodee.
     *
     * @var AlphabeticalTreeNodeInterface[]
     */
    private $nodes;

    /**
     * Constructor.
     *
     * @param AlphabeticalTreeNodeInterface[] $nodes The nodes.
     */
    public function __construct(array $nodes) {
        $this->setNodes($nodes);
    }

    /**
     * Compare two nodes.
     *
     * @param AlphabeticalTreeNodeInterface $a The node A.
     * @param AlphabeticalTreeNodeInterface $b The node B.
     * @return int Returns
     *  < O: if the node A is lesser than node B
     *  > 0: if the node A is gerater than node B
     *  = 0: if the two nodes are equals
     */
    protected function compare(AlphabeticalTreeNodeInterface $a, AlphabeticalTreeNodeInterface $b) {

        // Get the paths.
        $pathA = AlphabeticalTreeNodeHelper::getPath($a);
        $pathB = AlphabeticalTreeNodeHelper::getPath($b);

        // Count the path.
        $count = count($pathA);

        // Handle each path.
        for ($i = 0; $i < $count; ++$i) {

            // Get the items.
            $itemA = $pathA[$i];
            $itemB = true === isset($pathB[$i]) ? $pathB[$i] : null;

            // Compare the items.
            if ($itemA !== $itemB) {
                return null !== $itemB ? strcasecmp($itemA->getAlphabeticalTreeNodeLabel(), $itemB->getAlphabeticalTreeNodeLabel()) : 1;
            }
        }

        // Return.
        return 0;
    }

    /**
     * Get the nodes.
     *
     * @return AlphabeticalTreeNodeInterface[] Returns the nodes.
     */
    public function getNodes() {
        return $this->nodes;
    }

    /**
     * Set the nodes.
     *
     * @param AlphabeticalTreeNodeInterface[] $nodes The nodes.
     * @return AlphabeticalTreeSort Returns this alphabetical tree sort.
     */
    protected function setNodes(array $nodes) {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Sort.
     *
     * @return void
     */
    public function sort() {
        usort($this->nodes, [$this, "compare"]);
    }

}
